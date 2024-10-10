@extends('components.dashboard.app')
@section('title', 'Product | Ecommerce')
@section('content')
<link href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- main -->
<main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>Add New Product</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- button -->
                    <div>
                        <a href="{{ route('dashboard.product') }}" class="btn btn-light">Back to Product</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- card -->
                <div class="card mb-6 card-lg">
                    <!-- card body -->
                    <div class="card-body p-6">
                        <h4 class="mb-4 h5">Product Information</h4>
                        <form id="createProductForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Nama Product</label>
                                    <input type="text" name="title" class="form-control" placeholder="Product Name" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Product Category</label>
                                    <select name="category" class="form-select">
                                        <option selected>Product Category</option>
                                        <option value="Dairy, Bread & Eggs">Dairy, Bread & Eggs</option>
                                        <option value="Snacks & Munchies">Snacks & Munchies</option>
                                        <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                                    </select>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Weight</label>
                                    <input type="text" name="weight" class="form-control" placeholder="Weight" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Product Code</label>
                                    <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" required />
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-6">
                                    <label class="form-label">Harga Produk</label>
                                    <input type="text" name="price" class="form-control" placeholder="Enter Product Price" required />
                                </div>

                                <!-- input -->
                                <div class="mb-3 col-lg-3">
                                    <label class="form-label">Status Produk</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" name="in_stock" id="flexSwitchStock" {{ old('in_stock', true) ? 'checked' : '' }} />
                                        <label class="form-check-label mt-1" for="flexSwitchStock">In Stock</label>
                                    </div>
                                </div>
                            </div>
                                <div>
                                    <div class="mb-3 col-lg-12 mt-5">
                                        <h4 class="mb-3 h5">Product Images</h4>
                                        <div id="productDropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
                                    </div>
                                </div>
                                <!-- input -->
                                <div class="mb-3 col-lg-12 mt-5">
                                    <h4 class="mb-3 h5">Product Descriptions</h4>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                <input type="hidden" name="uploaded_image" id="uploaded_image" />
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                </div>
            </div>

            </form>
        </div>
    </div>
</main>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    Dropzone.autoDiscover = false;

    // Declare the variables in the global scope
    let uploadedFiles = [];
    let myDropzone; // Declare myDropzone here so it is accessible globally

    $(document).ready(function() {
        // Check if the dropzone element exists in the DOM before initializing
        if ($('#productDropzone').length) {
            myDropzone = new Dropzone("#productDropzone", {
                url: "{{ route('product.upload-image') }}",
                paramName: "image",
                maxFilesize: 2, // in MB
                acceptedFiles: "image/*",
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(file, response) {
                    uploadedFiles.push(response.success);
                },
                removedfile: function(file) {
                    let index = uploadedFiles.indexOf(file.name);
                    if (index !== -1) uploadedFiles.splice(index, 1);
                    file.previewElement.remove();
                },
                error: function(file, response) {
                    console.error("File upload error: ", response);
                }
            });
        } else {
            console.error("Dropzone element not found!");
        }

        $('#createProductForm').on('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            formData.append('uploaded_images', JSON.stringify(uploadedFiles));

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert('Product successfully created!');
                    $('#createProductForm')[0].reset();
                    if (myDropzone) { // Check if myDropzone is defined
                        myDropzone.removeAllFiles(); // Clear the Dropzone files
                    }
                    uploadedFiles = [];
                },
                error: function(xhr, status, error) {
                    alert('Failed to create product. Please check your input.');
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>




<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/editor.js') }}"></script>

@endsection
