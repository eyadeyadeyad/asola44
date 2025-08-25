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
<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<!-- Animate CSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
<!-- Owl Carousel CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
<!-- jQuery UI CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/ui-lightness/jquery-ui.min.css" rel="stylesheet">
<!-- Magnific Popup CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">

<!-- Local Assets (fallback) -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" onerror="this.remove()">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" onerror="this.remove()">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" onerror="this.remove()">

<!-- Complete Ecommerce Styles -->
<style>
/* Reset and Base */
* { margin: 0; padding: 0; box-sizing: border-box; }
ul, ol { list-style: none; }
li:before { content: none !important; }
a { text-decoration: none; }
body { font-family: 'Poppins', Arial, sans-serif; line-height: 1.6; color: #333; background: #fff; }

/* Header */
.header { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.topbar { background: #f8f9fa; padding: 5px 0; font-size: 12px; }
.middle { padding: 10px 0; }
.logo img { max-height: 40px; }
.search-bar { background: #f8f9fa; border-radius: 20px; padding: 3px; max-width: 400px; }
.search-bar input { border: none; background: transparent; padding: 8px 12px; width: 100%; font-size: 14px; }
.search-bar button { background: #007bff; color: white; border: none; padding: 8px 12px; border-radius: 15px; font-size: 14px; }
.right-bar { display: flex; gap: 10px; align-items: center; }
.single-icon { font-size: 18px; color: #333; position: relative; }
.total-count { position: absolute; top: -6px; right: -6px; background: #dc3545; color: white; border-radius: 50%; width: 16px; height: 16px; font-size: 10px; display: flex; align-items: center; justify-content: center; }

/* Navigation */
.main-menu { background: #007bff; padding: 0; }
.main-menu ul { list-style: none !important; display: flex; margin: 0; padding: 0; }
.main-menu li { position: relative; list-style: none !important; }
.main-menu li:before { display: none !important; content: none !important; }
.main-menu a { color: white; text-decoration: none; padding: 12px 16px; display: block; transition: all 0.3s; font-size: 14px; }
.main-menu a:hover { background: rgba(255,255,255,0.1); }
.navbar ul, .navbar li { list-style: none !important; }
.navbar li:before { display: none !important; }

/* Hero Section */
.hero-area { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 80px 0; text-align: center; }
.hero-area h1 { font-size: 3rem; margin-bottom: 20px; }
.hero-area p { font-size: 1.2rem; margin-bottom: 30px; }

/* Products */
.product-area { padding: 60px 0; }
.section-title { text-align: center; margin-bottom: 50px; }
.section-title h2 { font-size: 2.5rem; color: #333; margin-bottom: 15px; }
.section-title p { color: #666; font-size: 1.1rem; }

/* Empty State */
.empty-products { text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 10px; margin: 40px 0; }
.empty-products h3 { color: #666; margin-bottom: 15px; }
.empty-products p { color: #999; margin-bottom: 20px; }
.empty-products .btn { margin: 5px; }

.single-product { background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 30px; overflow: hidden; transition: transform 0.3s; }
.single-product:hover { transform: translateY(-5px); }
.product-img { position: relative; overflow: hidden; }
.product-img img { width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s; }
.product-img:empty:before { content: '🖼️ No Image'; display: flex; align-items: center; justify-content: center; height: 250px; background: #f8f9fa; color: #999; font-size: 16px; }
.default-img, .hover-img { width: 100%; height: 250px; object-fit: cover; background: #f8f9fa; }
img[src=""], img:not([src]) { display: none; }
.product-img { background: #f8f9fa; min-height: 250px; display: flex; align-items: center; justify-content: center; }
.single-product:hover .product-img img { transform: scale(1.05); }
.product-content { padding: 20px; }
.product-content h3 { font-size: 18px; margin-bottom: 10px; color: #333; }
.product-content h3 a { color: #333; text-decoration: none; }
.product-content h3 a:hover { color: #007bff; }
.product-price { font-weight: bold; color: #007bff; font-size: 20px; margin: 10px 0; }
.product-price .old { text-decoration: line-through; color: #999; margin-left: 10px; }

/* Buttons */
.btn { padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; transition: all 0.3s; font-weight: 500; }
.btn-primary { background: #007bff; color: white; }
.btn-primary:hover { background: #0056b3; color: white; text-decoration: none; }
.btn-success { background: #28a745; color: white; }
.btn-success:hover { background: #1e7e34; }
.btn-warning { background: #ffc107; color: #212529; }
.btn-warning:hover { background: #e0a800; }

/* Cards */
.card { background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 20px; }
.card-header { background: #f8f9fa; padding: 15px 20px; border-bottom: 1px solid #dee2e6; font-weight: 600; }
.card-body { padding: 20px; }

/* Footer */
.footer { background: #333; color: white; padding: 40px 0 20px; margin-top: 60px; }
.footer h4 { color: #007bff; margin-bottom: 20px; }
.footer ul { list-style: none; }
.footer ul li { margin-bottom: 8px; }
.footer ul li a { color: #ccc; text-decoration: none; }
.footer ul li a:hover { color: white; }

/* Responsive */
@media (max-width: 768px) {
    .hero-area h1 { font-size: 2rem; }
    .main-menu ul { flex-direction: column; }
    .right-bar { justify-content: center; margin-top: 15px; }
    .product-img img { height: 200px; }
}

/* Bootstrap-like Grid */
.container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
.row { display: flex; flex-wrap: wrap; margin: 0 -15px; }
.col-lg-3, .col-md-4, .col-sm-6, .col-12 { padding: 0 15px; }
.col-lg-3 { flex: 0 0 25%; max-width: 25%; }
.col-md-4 { flex: 0 0 33.333%; max-width: 33.333%; }
.col-sm-6 { flex: 0 0 50%; max-width: 50%; }
.col-12 { flex: 0 0 100%; max-width: 100%; }

@media (max-width: 992px) {
    .col-lg-3 { flex: 0 0 50%; max-width: 50%; }
}
@media (max-width: 768px) {
    .col-lg-3, .col-md-4 { flex: 0 0 100%; max-width: 100%; }
}
</style>
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
