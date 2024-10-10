@extends('components.frontend.app')
@section('title', 'Home | Ecommerce')

@section('content')

    <main>
        <section class="mt-8">
            <div class="container">
                <div class="hero-slider">
                    <div
                        style="background: url(./assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                            <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                            <p class="lead">Introduced a new model for online grocery shopping and convenient home
                                delivery.</p>
                            <a href="#!" class="btn btn-dark mt-3">
                                Shop Now
                                <i class="feather-icon icon-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                    <div
                        style="background: url(./assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                            <h2 class="text-dark display-5 fw-bold mt-4">
                                Free Shipping on
                                <br />
                                orders over
                                <span class="text-primary">$100</span>
                            </h2>
                            <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are
                                applied.</p>
                            <a href="#!" class="btn btn-dark mt-3">
                                Shop Now
                                <i class="feather-icon icon-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category Section Start-->
        <section class="mb-lg-10 mt-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6">
                        <h3 class="mb-0">Featured Categories</h3>
                    </div>
                </div>
                <div class="category-slider">
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-dairy-bread-eggs.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                    <div class="text-truncate">Dairy, Bread & Eggs</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-snack-munchies.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Snack & Munchies</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-bakery-biscuits.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Bakery & Biscuits</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-instant-food.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Instant Food</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-tea-coffee-drinks.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Tea, Coffee & Drinks</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-atta-rice-dal.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Atta, Rice & Dal</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-baby-care.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Baby Care</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-chicken-meat-fish.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Chicken, Meat & Fish</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-cleaning-essentials.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Cleaning Essentials</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="../pages/shop-grid.html" class="text-decoration-none text-inherit">
                            <div class="card card-product mb-lg-4">
                                <div class="card-body text-center py-8">
                                    <img src="assets/images/category/category-pet-care.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3" />
                                    <div class="text-truncate">Pet Care</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Section End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mb-lg-0">
                        <div>
                            <div class="py-10 px-8 rounded"
                                style="background: url(./assets/images/banner/grocery-banner.png) no-repeat; background-size: cover; background-position: center">
                                <div>
                                    <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                                    <p class="mb-4">
                                        Get Upto
                                        <span class="fw-bold">30%</span>
                                        Off
                                    </p>
                                    <a href="#!" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div>
                            <div class="py-10 px-8 rounded"
                                style="background: url(./assets/images/banner/grocery-banner-2.jpg) no-repeat; background-size: cover; background-position: center">
                                <div>
                                    <h3 class="fw-bold mb-1">Freshly Baked Buns</h3>
                                    <p class="mb-4">
                                        Get Upto
                                        <span class="fw-bold">25%</span>
                                        Off
                                    </p>
                                    <a href="#!" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Products Start-->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6">
                        <h3 class="mb-0">Popular Products</h3>
                    </div>
                </div>

                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <div class="position-absolute top-0 start-0">
                                            @if ($product->is_on_sale)
                                                <span class="badge bg-danger">Sale</span>
                                            @endif
                                        </div>
                                        @php
                                            // Decode the JSON-encoded image path
                                            $imagePath = json_decode($product->images, true);

                                            // Check if the decoded value is an array and get the first image
                                            $imagePath =
                                                is_array($imagePath) && count($imagePath) > 0 ? $imagePath[0] : null;
                                        @endphp

                                        @if ($imagePath)
                                            <a href="#/">
                                                <img src="{{ asset('assets/images/products/' . $imagePath) }}"
                                                    alt="Product Image" class="mb-3 img-fluid"
                                                    style="object-fit: contain; height:200px;" />
                                            </a>
                                        @else
                                            <p>Image not available</p>
                                        @endif

                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal" data-product-id="{{ $product->id }}">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Compare"><i
                                                    class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!"
                                            class="text-decoration-none text-muted"><small>{{ $product->category }}</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="./pages/shop-single.html"
                                            class="text-inherit text-decoration-none">{{ $product->title }}</a></h2>
                                    <div>
                                        <small class="text-warning">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $product->rating)
                                                    <i class="bi bi-star-fill"></i>
                                                @elseif ($i > $product->rating && $i - 1 < $product->rating)
                                                    <i class="bi bi-star-half"></i>
                                                @else
                                                    <i class="bi bi-star"></i>
                                                @endif
                                            @endfor
                                        </small>
                                        <span class="text-muted small">{{ number_format($product->rating, 1) }}
                                            ({{ $product->reviews_count }})</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark">${{ $product->price }}</span>
                                            @if ($product->original_price > $product->price)
                                                <span
                                                    class="text-decoration-line-through text-muted">${{ $product->original_price }}</span>
                                            @endif
                                        </div>
                                        <div>
                                            <a href="#!" class="btn btn-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                                Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Popular Products End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-6">
                        <h3 class="mb-0">Daily Best Sells</h3>
                    </div>
                </div>
                <div class="table-responsive-lg pb-6">
                    <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                        <div class="col">
                            <div class="pt-8 px-6 px-xl-8 rounded"
                                style="background: url(./assets/images/banner/banner-deal.jpg) no-repeat; background-size: cover; height: 470px">
                                <div>
                                    <h3 class="fw-bold text-white">100% Organic Coffee Beans.</h3>
                                    <p class="text-white">Get the best deal before close.</p>
                                    <a href="#!" class="btn btn-primary">
                                        Shop Now
                                        <i class="feather-icon icon-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <a href="./pages/shop-single.html"><img
                                                src="assets/images/products/product-img-11.jpg"
                                                alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Compare"><i
                                                    class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>Tea, Coffee &
                                                Drinks</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="./pages/shop-single.html"
                                            class="text-inherit text-decoration-none">Roast Ground Coffee</a></h2>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark">$13</span>
                                            <span class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span><small>4.5</small></span>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-2">
                                        <a href="#!" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-start text-center mt-3">
                                        <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <a href="./pages/shop-single.html"><img
                                                src="assets/images/products/product-img-12.jpg"
                                                alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Compare"><i
                                                    class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                                                Vegetables</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="./pages/shop-single.html"
                                            class="text-inherit text-decoration-none">Crushed Tomatoes</a></h2>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark">$13</span>
                                            <span class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span><small>4.5</small></span>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-2">
                                        <a href="#!" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-start text-center mt-3 w-100">
                                        <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center position-relative">
                                        <a href="./pages/shop-single.html"><img
                                                src="assets/images/products/product-img-13.jpg"
                                                alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action quick-view-btn"
                                                data-id="{{ $product->id }}" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip"
                                                data-bs-html="true" title="Compare"><i
                                                    class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>Fruits &
                                                Vegetables</small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="./pages/shop-single.html"
                                            class="text-inherit text-decoration-none">Golden Pineapple</a></h2>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <span class="text-dark">$13</span>
                                            <span class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span><small>4.5</small></span>
                                        </div>
                                    </div>
                                    <div class="d-grid mt-2">
                                        <a href="#!" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-start text-center mt-3">
                                        <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/icons/clock.svg" alt="" /></div>
                            <h3 class="h5 mb-3">10 minute grocery now</h3>
                            <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near
                                you.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/icons/gift.svg" alt="" /></div>
                            <h3 class="h5 mb-3">Best Prices & Offers</h3>
                            <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best
                                pricess & offers.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/icons/package.svg" alt="" /></div>
                            <h3 class="h5 mb-3">Wide Assortment</h3>
                            <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg &
                                other categories.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                            <h3 class="h5 mb-3">Easy Returns</h3>
                            <p>
                                Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                                questions asked
                                <a href="#!">policy</a>
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-8">
                    <div class="position-absolute top-0 end-0 me-3 mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- img slide -->
                            <div class="product" id="productModal">
                                <div class="zoom" onmousemove="zoom(event)"
                                    style="background-image: url(./assets/images/products/placeholder.jpg)">
                                    <img src="./assets/images/products/placeholder.jpg" alt="Product Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div class="thumbnails row g-3" id="productModalThumbnails">
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <img src="./assets/images/products/placeholder.jpg" alt="Product Thumbnail"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-8 mt-6 mt-lg-0">
                                <a href="#!" class="mb-4 d-block product-category"></a>
                                <h2 class="mb-1 h1 modal-title"></h2>
                                <div class="mb-4">
                                    <small class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <a href="#" class="ms-2 product-reviews">(0 reviews)</a>
                                </div>
                                <div class="fs-4">
                                    <span class="fw-bold text-dark product-price"></span>
                                    <span class="text-decoration-line-through text-muted product-original-price"></span>
                                    <span><small class="fs-6 ms-2 text-danger product-discount"></small></span>
                                </div>
                                <hr class="my-6" />
                                <div>
                                    <div class="input-group input-spinner">
                                        <input type="button" value="-" class="button-minus btn btn-sm"
                                            data-field="quantity" />
                                        <input type="number" step="1" max="10" value="1"
                                            name="quantity" class="quantity-field form-control-sm form-input" />
                                        <input type="button" value="+" class="button-plus btn btn-sm"
                                            data-field="quantity" />
                                    </div>
                                </div>
                                <div class="mt-3 row justify-content-start g-2 align-items-center">
                                    <div class="col-lg-4 col-md-5 col-6 d-grid">
                                        <button type="button" class="btn btn-primary">
                                            <i class="feather-icon icon-shopping-bag me-2"></i>
                                            Add to cart
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-5">
                                        <a class="btn btn-light" href="#" data-bs-toggle="tooltip"
                                            data-bs-html="true" aria-label="Compare"><i
                                                class="bi bi-arrow-left-right"></i></a>
                                        <a class="btn btn-light" href="#!" data-bs-toggle="tooltip"
                                            data-bs-html="true" aria-label="Wishlist"><i
                                                class="feather-icon icon-heart"></i></a>
                                    </div>
                                </div>
                                <hr class="my-6" />
                                <div>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Product Code:</td>
                                                <td class="product-code"></td>
                                            </tr>
                                            <tr>
                                                <td>Availability:</td>
                                                <td class="product-availability"></td>
                                            </tr>
                                            <tr>
                                                <td>Type:</td>
                                                <td class="product-type"></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>
                                                    <small>
                                                        01 day shipping.
                                                        <span class="text-muted">(Free pickup today)</span>
                                                    </small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn-action[data-bs-target="#quickViewModal"]').on('click', function() {
                var productId = $(this).data('product-id');
                $.ajax({
                    url: '/view-product/' + productId, // Updated URL
                    method: 'GET',
                    success: function(response) {
                        populateQuickViewModal(response);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching product details:', error);
                        console.log('Response:', xhr.responseText);
                    }
                });
            });
        });

        function populateQuickViewModal(product) {
            $('#quickViewModal .modal-title').text(product.title);
            $('#quickViewModal .product-category').text(product.category);
            $('#quickViewModal .product-price').text('$' + product.price);
            $('#quickViewModal .product-reviews').text('(' + product.reviews_count + ' reviews)');

            // Update images
            try {
                var images = Array.isArray(product.images) ? product.images : JSON.parse(product.images);
                updateProductImages(images, product.title);
            } catch (error) {
                console.error('Error parsing product images:', error);
                // Fallback to show a placeholder or handle the error as needed
                updateProductImages([], product.title);
            }

            // Update other details
            $('#quickViewModal .product-code').text(product.code || 'N/A');
            $('#quickViewModal .product-availability').text(product.in_stock ? 'In Stock' : 'Out of Stock');
            $('#quickViewModal .product-type').text(product.type || 'N/A');
        }

        function updateProductImages(images, productTitle) {
            var mainImageHtml = '';
            var thumbnailHtml = '';

            if (images.length > 0) {
                images.forEach(function(image, index) {
                    var imageUrl = '/assets/images/products/' + image;

                    if (index === 0) {
                        mainImageHtml = `
                    <div class="zoom" onmousemove="zoom(event)" style="background-image: url(${imageUrl}); background-repeat:no-repeat; ">
                        <img src="${imageUrl}" alt="${productTitle}" class="img-fluid" />
                    </div>
                `;
                    }

                    thumbnailHtml += `
                <div class="col-3">
                    <div class="thumbnails-img">
                        <img src="${imageUrl}" alt="${productTitle}" class="img-fluid" />
                    </div>
                </div>
            `;
                });
            } else {
                // Fallback for when no images are available
                var placeholderUrl = '/assets/images/products/placeholder.jpg';
                mainImageHtml = `
            <div class="zoom" onmousemove="zoom(event)" style="background-image: url(${placeholderUrl})">
                <img src="${placeholderUrl}" alt="Product image not available" class="img-fluid" />
            </div>
        `;
                thumbnailHtml = `
            <div class="col-3">
                <div class="thumbnails-img">
                    <img src="${placeholderUrl}" alt="Product image not available" class="img-fluid" />
                </div>
            </div>
        `;
            }

            $('#quickViewModal #productModal').html(mainImageHtml);
            $('#quickViewModal #productModalThumbnails').html(thumbnailHtml);
        }
    </script>

@endsection
