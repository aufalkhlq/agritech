<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Sign in eCommerce HTML Template - FreshCart</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function() {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>
</head>

<body>
    <!-- navigation -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="../index.html">
                    <img src="../assets/images/logo/freshcart-logo.svg" alt=""
                        class="d-inline-block align-text-top" />
                </a>
            </div>
        </nav>
    </div>

    <main>
        <!-- section -->
        <section class="my-lg-14 my-8">
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <!-- img -->
                        <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid" />
                    </div>
                    <!-- col -->
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Sign in to FreshCart</h1>
                            <p>Welcome back to FreshCart! Enter your email to get started.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" required />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <label for="password" class="form-label visually-hidden">Password</label>
                                        <div class="password-field position-relative">
                                            <input type="password" class="form-control fakePassword" id="password"
                                                name="password" placeholder="*****" required />
                                            <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- Rest of your form elements -->
                                <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Sign
                                        In</button></div>
                                <div> Don’t have an account? <a href="{{ route('register') }}">Sign Up</a> </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Javascript-->
    <!-- Libs JS -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendors/password.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/validation.js') }}"></script>
</body>

</html>
