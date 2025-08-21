<!-- Meta Tag -->
@yield('meta')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
<!-- Fancybox -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
<!-- Themify Icons -->
<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
<!-- Flex Slider CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
<!-- Slicknav -->
<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
<!-- Jquery Ui -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

<!-- Eshop StyleSheet -->
<link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
<style>
    /* Multilevel dropdown */
    .dropdown-submenu {
    position: relative;
    }

    .dropdown-submenu>a:after {
    content: "\f0da";
    float: right;
    border: none;
    font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: 0px;
    margin-left: 0px;
    }

    /* RTL Support for Arabic */
    [dir="rtl"] {
        text-align: right;
    }
    [dir="rtl"] .navbar-nav {
        flex-direction: row-reverse;
    }
    [dir="rtl"] .dropdown-submenu>a:after {
        content: "\f0d9";
        float: left;
    }
    [dir="rtl"] .dropdown-submenu>.dropdown-menu {
        left: -100%;
        right: 0;
    }
    [dir="rtl"] .carousel-control-prev {
        right: 0;
        left: auto;
    }
    [dir="rtl"] .carousel-control-next {
        left: 0;
        right: auto;
    }
    [dir="rtl"] .product-price {
        text-align: right;
    }
    /* Ensure mobile visibility */
    @media (max-width: 991px) {
        .header .right-bar {
            display: flex !important;
            justify-content: center;
            gap: 15px;
        }
        .header .right-bar .sinlge-bar {
            display: inline-block !important;
        }
        /* Mobile Product Grid */
        .product-area .row .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .single-product {
            margin-bottom: 20px;
        }
        .single-product .product-content h3 {
            font-size: 14px;
        }
        .single-product .product-price {
            font-size: 14px;
            font-weight: bold;
            color: #007bff;
        }
        /* All Images Responsive */
        img {
            max-width: 100%;
            height: auto;
        }
        .default-img, .hover-img {
            width: 100% !important;
            height: auto !important;
        }
    }
    /* Extra small devices */
    @media (max-width: 576px) {
        .header .middle-inner .col-lg-2:first-child {
            flex: 0 0 20%;
            max-width: 20%;
        }
        .header .middle-inner .col-lg-8 {
            flex: 0 0 55%;
            max-width: 55%;
        }
        .header .middle-inner .col-lg-2:last-child {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .header .logo img {
            max-width: 60px;
            max-height: 30px;
        }
        .product-area .row .col-sm-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }

    }
    /* Tablet Responsive */
    @media (min-width: 577px) and (max-width: 991px) {
        .product-area .row .col-sm-6,
        .isotope-item {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }

        .carousel-item img {
            height: auto !important;
        }
    }
    
    /* Desktop Responsive */
    @media (min-width: 992px) {

        .carousel-item img {
            height: auto !important;
        }
    }
    
    /* Arabic Font and Design */
    body[dir="rtl"] {
        font-family: 'Cairo', 'Tajawal', 'Poppins', sans-serif;
        font-weight: 400;
        line-height: 1.6;
    }
    /* Mobile Optimizations */
    @media (max-width: 768px) {
        [dir="rtl"] .container {
            padding: 0 10px;
        }
        [dir="rtl"] .btn {
            padding: 8px 16px;
            font-size: 14px;
        }
        /* Responsive Images - Mobile */
        [dir="rtl"] .product-img img,
        .product-img img,
        .single-product img,
        .product-gallery img {
            width: 100% !important;
            height: auto !important;
            max-width: 100%;
            object-fit: cover;
        }
        /* Product Images */
        .single-product .product-img img {
            width: 100%;
            height: auto;
        }
        /* Banner Images */
        .carousel-item img,
        .single-banner img {
            width: 100% !important;
            height: auto !important;
        }
        [dir="rtl"] .single-product {
            margin-bottom: 20px;
        }
        [dir="rtl"] .header .search-bar {
            margin-bottom: 10px;
        }
        /* Mobile Cart & Wishlist */
        .header .right-bar {
            display: flex !important;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }
        .header .right-bar .sinlge-bar {
            display: block !important;
        }
        .header .right-bar .single-icon {
            font-size: 20px;
            color: #333;
            position: relative;
        }
        .header .right-bar .total-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff6b6b;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* Mobile Header Layout */
        .header .middle-inner .row {
            align-items: center;
        }
        .header .middle-inner .col-lg-2:first-child {
            flex: 0 0 25%;
            max-width: 25%;
        }
        .header .middle-inner .col-lg-8 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .header .middle-inner .col-lg-2:last-child {
            flex: 0 0 25%;
            max-width: 25%;
        }
        /* Mobile Logo */
        .header .logo img {
            max-width: 80px;
            max-height: 40px;
            width: auto;
            height: auto;
        }
        /* Mobile Topbar */
        .header .topbar {
            display: none;
        }
        /* Mobile Menu */
        .header .header-inner {
            background: #f8f9fa;
            padding: 10px 0;
        }
        .header .main-menu {
            flex-wrap: wrap;
            justify-content: center;
        }
        .header .main-menu li {
            margin: 5px;
        }
        .header .main-menu li a {
            font-size: 14px;
            padding: 8px 12px;
        }
        /* Mobile Search */
        .search-bar-top {
            margin: 10px 0;
        }
        .search-bar-top .search-bar {
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .search-bar-top .search-bar select {
            display: none;
        }
        .search-bar-top .search-bar form {
            width: 100%;
            display: flex;
        }
        .search-bar-top .search-bar input {
            font-size: 14px;
            padding: 12px 15px;
            border: none;
            flex: 1;
            outline: none;
        }
        .search-bar-top .search-bar .btnn {
            background: #007bff;
            border: none;
            padding: 12px 15px;
            color: white;
        }
        /* Mobile Search Toggle */
        .search-top {
            display: block;
        }
        .search-form {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
    }
    [dir="rtl"] h1, [dir="rtl"] h2, [dir="rtl"] h3, [dir="rtl"] h4, [dir="rtl"] h5, [dir="rtl"] h6 {
        font-family: 'Cairo', 'Tajawal', sans-serif;
        font-weight: 600;
    }
    [dir="rtl"] .btn {
        font-family: 'Cairo', sans-serif;
        font-weight: 500;
        border-radius: 8px;
        padding: 12px 24px;
        transition: all 0.3s ease;
    }
    [dir="rtl"] .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    [dir="rtl"] .card {
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        border: none;
    }
    [dir="rtl"] .form-control {
        border-radius: 8px;
        border: 2px solid #e9ecef;
        padding: 12px 16px;
        font-family: 'Cairo', sans-serif;
    }
    [dir="rtl"] .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
</style>
<!-- Arabic Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
@stack('styles')
