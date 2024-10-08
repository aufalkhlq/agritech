@extends('components.dashboard.app')
@section('title', 'Pengaturan Toko | Ecommerce')

@section('content')
<main class="main-content-wrapper">
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Create a new post</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create New Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="row g-6 needs-validation" novalidate>
                    <div class="col-lg-8 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="blognewTitle" placeholder="Post Title" required />
                                    <div class="invalid-feedback">Please enter post title</div>
                                </div>
                                <div class="col-12">
                                    <!-- heading -->
                                    <label class="form-label">Cover</label>

                                    <!-- input -->
                                    <div id="my-dropzone" class="dropzone border-dashed rounded-2 min-h-0"></div>
                                </div>
                                <div class="col-12">
                                    <label for="blogdescriptionTextarea" class="form-label">Short Descriptions</label>
                                    <textarea class="form-control" id="blogdescriptionTextarea" row="5" placeholder="Write a short description" required></textarea>
                                    <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Content</label>
                                    <div class="py-8" id="editor"></div>
                                    <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div class="col-12">
                                    <div class="d-flex flex-column gap-3">
                                        <div>
                                            <label for="validationCustom04" class="form-label">Category</label>
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">Select Category</option>

                                                <option value="Recipes">Recipes</option>
                                                <option value="Company">Company</option>
                                                <option value="Retailer">Retailer</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid category.</div>
                                        </div>
                                        <div>
                                            <div>
                                                <label class="form-label" for="tags">Tags</label>
                                                <input name="tags" id="tags" value='[{"value":"grocery", "editable":false}, {"value":"shop"}]' class="w-100" placeholder="Tags" required />
                                                <div class="invalid-feedback">Please enter tags</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <label for="blognewContent" class="form-label">SEO Content</label>
                                            <input type="text" class="form-control" id="blognewContent" placeholder="Meta Title" required />

                                            <div class="invalid-feedback">Please enter seo content</div>
                                        </div>

                                        <div>
                                            <label for="blogdeseoTextarea" class="form-label visually-hidden">Content</label>
                                            <textarea class="form-control" id="blogdeseoTextarea" row="7" placeholder="Meta Descriptions" required></textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Publish</label>
                                        <input class="form-check-input ms-auto" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch ps-0">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Enable comments</label>
                                        <input class="form-check-input ms-auto" type="checkbox" role="switch" id="flexSwitchCheckChecked" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-row gap-2">
                                        <button class="btn btn-primary w-100" type="submit">Post</button>
                                        <button class="btn btn-light w-100" type="button">Preview</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
