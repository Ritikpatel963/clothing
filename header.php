<!DOCTYPE html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Swami</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon-32x32.png" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main5103.css?v=6.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="form-container">
                        <div id="login-form">
                            <div class="form-header">Login Form</div>
                            <form onsubmit="return validateLoginForm()">
                                <div class="form-field">
                                    <i class="fa fa-phone"></i>
                                    <input id="login-phone" type="tel" placeholder="Phone Number" maxlength="10" pattern="[0-9]{10}" required>
                                </div>
                                <div class="form-field">
                                    <i class="fa fa-key"></i>
                                    <input id="login-otp" type="number" placeholder="OTP" maxlength="10" required>
                                </div>
                                <input class="form-submit" type="submit" value="Login">
                            </form>
                            <div class="form-toggle">
                                <span class="form-link" onclick="toggleForms()">If you are new user ? Sign Up</span>
                            </div>
                        </div>

                        <div id="signup-form" style="display: none;">
                            <div class="form-header">Sign Up Form</div>
                            <form onsubmit="return validateSignupForm()">
                                <div class="form-field">
                                    <i class="fa fa-user"></i>
                                    <input id="signup-name" type="text" placeholder="Name" required>
                                </div>
                                <div class="form-field">
                                    <i class="fa fa-phone"></i>
                                    <input id="signup-phone" type="tel" placeholder="Phone Number" maxlength="10" pattern="[0-9]{10}" required>
                                </div>
                                <div class="form-field">
                                    <i class="fa fa-key"></i>
                                    <input id="signup-otp" type="number" placeholder="OTP" maxlength="10" required>
                                </div>
                                <div class="form-radio-group">
                                    <label>
                                        <input type="radio" name="userType" value="Wholesaler" required>
                                        <span class="radio-indicator"></span>
                                        <img src="assets/imgs/shop/wholesale.png" alt="Wholesaler"> Wholesaler
                                    </label>
                                    <label>
                                        <input type="radio" name="userType" value="Retailer" required>
                                        <span class="radio-indicator"></span>
                                        <img src="assets/imgs/shop/shop.png" alt="Retailer"> Retailer
                                    </label>
                                </div>
                                <input class="form-submit" type="submit" value="Sign Up">
                            </form>
                            <div class="form-toggle">
                                <span class="form-link" onclick="toggleForms()">If you have already account ? Login</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-2.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-3.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-4.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-5.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-6.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-7.jpg" alt="product image" />
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a class='text-heading' href='shop-product-right.php'>Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">₹38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">₹52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2024</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><a href="page-about.php">About Us</a></li>
                                <li><a href='page-account.php'>My Account</a></li>
                                <li><a href='shop-wishlist.php'>Wishlist</a></li>
                                <li><a href="shop-order.php">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <!-- <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>100% Secure delivery without contacting the courier</li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today</li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>Need help? Call Us: <strong class="text-brand">+91 76224 77641</strong></li>
                                <li>
                                    <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/imgs/theme/india.png" alt="" />Hindi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href='index.php'><img src="assets/imgs/theme/logo.png" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Milks and Dairies</option>
                                    <option>Wines & Alcohol</option>
                                    <option>Clothing & Beauty</option>
                                    <option>Pet Foods & Toy</option>
                                    <option>Fast food</option>
                                    <option>Baking material</option>
                                    <option>Vegetables</option>
                                    <option>Fresh Seafood</option>
                                    <option>Noodles & Rice</option>
                                    <option>Ice cream</option>
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="search-location">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>Your Location</option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>Arizona</option>
                                            <option>Delaware</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>Hawaii</option>
                                            <option>Indiana</option>
                                            <option>Maryland</option>
                                            <option>Nevada</option>
                                            <option>New Jersey</option>
                                            <option>New Mexico</option>
                                            <option>New York</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href='shop-compare.php'>
                                        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-compare.svg" />
                                        <span class="pro-count blue">3</span>
                                    </a>
                                    <a href='shop-compare.php'><span class="lable ml-0">Compare</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href='shop-wishlist.php'>
                                        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
                                        <span class="pro-count blue">6</span>
                                    </a>
                                    <a href='shop-wishlist.php'><span class="lable">Wishlist</span></a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class='mini-cart-icon' href='shop-cart.php'>
                                        <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href='shop-cart.php'><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href='shop-product-right.php'>Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>₹800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-2.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href='shop-product-right.php'>Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>₹3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>₹4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a class='outline' href='shop-cart.php'>View cart</a>
                                                <a href='shop-checkout.php'>Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href='page-account.php'>
                                        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg" />
                                    </a>
                                    <a href='page-account.php'><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href='page-account.php'><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                            </li>
                                            <li>
                                                <a href='page-account.php'><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                            </li>
                                            <li>
                                                <a href='page-account.php'><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                            </li>
                                            <li>
                                                <a href='shop-wishlist.php'><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                            </li>
                                            <li>
                                                <a href='page-account.php'><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                            </li>
                                            <li>
                                                <a href='page-login.php'><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href='index.php'><img src="assets/imgs/theme/logo.png" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <li>
                                                <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                            </li>
                                            <li>
                                                <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                            </li>
                                        </ul>
                                        <ul class="end">
                                            <li>
                                                <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                            </li>
                                            <li>
                                                <a href='shop-grid-left.php'> <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li class="hot-deals"><img src="assets/imgs/theme/icons/icon-hot.svg" alt="hot deals" /><a href='shop-grid-left.php'>Deals</a></li>
                                    <li>
                                        <a class='active' href='index.php'>Home</a>
                                    </li>
                                    <li>
                                        <a href='page-about-2.php'>About</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-left.php'>Shop</a>
                                    </li>
                                    <li>
                                        <a href='blog-category-fullwidth.php'>Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href='page-about-2.php'>About Us</a></li>
                                            <li><a href='page-account.php'>My Account</a></li>
                                            <li><a href='page-login.php'>Login</a></li>
                                            <li><a href='page-register.php'>Register</a></li>
                                            <li><a href='page-privacy-policy.php'>Privacy Policy</a></li>
                                            <li><a href='page-terms.php'>Terms of Service</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='page-contact.php'>Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                        <p>+91 76224 77641<span>24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href='shop-wishlist.php'>
                                    <img alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href='shop-product-right.php'>Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>₹800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-4.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href='shop-product-right.php'>Macbook Pro 2024</a></h4>
                                                <h3><span>1 × </span>₹3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>₹383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href='shop-cart.php'>View cart</a>
                                            <a href='shop-checkout.php'>Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href='index.php'><img src="assets/imgs/theme/logo.png" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href='index.php'>Home</a>
                                <ul class="dropdown">
                                    <li><a href='index.php'>Home 1</a></li>
                                    <li><a href='index-2.php'>Home 2</a></li>
                                    <li><a href='index-3.php'>Home 3</a></li>
                                    <li><a href='index-4.php'>Home 4</a></li>
                                    <li><a href='index-5.php'>Home 5</a></li>
                                    <li><a href='index-6.php'>Home 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href='shop-grid-left.php'>shop</a>
                                <ul class="dropdown">
                                    <li><a href='shop-grid-left.php'>Shop Grid – Right Sidebar</a></li>
                                    <li><a href='shop-grid-left.php'>Shop Grid – Left Sidebar</a></li>
                                    <li><a href='shop-list-right.php'>Shop List – Right Sidebar</a></li>
                                    <li><a href='shop-list-left.php'>Shop List – Left Sidebar</a></li>
                                    <li><a href='shop-fullwidth.php'>Shop - Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.php'>Product – Right Sidebar</a></li>
                                            <li><a href='shop-product-left.php'>Product – Left Sidebar</a></li>
                                            <li><a href='shop-product-full.php'>Product – No sidebar</a></li>
                                            <li><a href='shop-product-vendor.php'>Product – Vendor Infor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='shop-filter.php'>Shop – Filter</a></li>
                                    <li><a href='shop-wishlist.php'>Shop – Wishlist</a></li>
                                    <li><a href='shop-cart.php'>Shop – Cart</a></li>
                                    <li><a href='shop-checkout.php'>Shop – Checkout</a></li>
                                    <li><a href='shop-compare.php'>Shop – Compare</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Invoice</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-invoice-1.php'>Shop Invoice 1</a></li>
                                            <li><a href='shop-invoice-2.php'>Shop Invoice 2</a></li>
                                            <li><a href='shop-invoice-3.php'>Shop Invoice 3</a></li>
                                            <li><a href='shop-invoice-4.php'>Shop Invoice 4</a></li>
                                            <li><a href='shop-invoice-5.php'>Shop Invoice 5</a></li>
                                            <li><a href='shop-invoice-6.php'>Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Vendors</a>
                                <ul class="dropdown">
                                    <li><a href='vendors-grid.php'>Vendors Grid</a></li>
                                    <li><a href='vendors-list.php'>Vendors List</a></li>
                                    <li><a href='vendor-details-1.php'>Vendor Details 01</a></li>
                                    <li><a href='vendor-details-2.php'>Vendor Details 02</a></li>
                                    <li><a href='vendor-dashboard.php'>Vendor Dashboard</a></li>
                                    <li><a href='vendor-guide.php'>Vendor Guide</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.php'>Dresses</a></li>
                                            <li><a href='shop-product-right.php'>Blouses & Shirts</a></li>
                                            <li><a href='shop-product-right.php'>Hoodies & Sweatshirts</a></li>
                                            <li><a href='shop-product-right.php'>Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.php'>Jackets</a></li>
                                            <li><a href='shop-product-right.php'>Casual Faux Leather</a></li>
                                            <li><a href='shop-product-right.php'>Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.php'>Gaming Laptops</a></li>
                                            <li><a href='shop-product-right.php'>Ultraslim Laptops</a></li>
                                            <li><a href='shop-product-right.php'>Tablets</a></li>
                                            <li><a href='shop-product-right.php'>Laptop Accessories</a></li>
                                            <li><a href='shop-product-right.php'>Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href='blog-category-fullwidth.php'>Blog</a>
                                <ul class="dropdown">
                                    <li><a href='blog-category-grid.php'>Blog Category Grid</a></li>
                                    <li><a href='blog-category-list.php'>Blog Category List</a></li>
                                    <li><a href='blog-category-big.php'>Blog Category Big</a></li>
                                    <li><a href='blog-category-fullwidth.php'>Blog Category Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href='blog-post-left.php'>Left Sidebar</a></li>
                                            <li><a href='blog-post-right.php'>Right Sidebar</a></li>
                                            <li><a href='blog-post-fullwidth.php'>No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href='page-about-2.php'>About Us</a></li>
                                    <li><a href='page-contact.php'>Contact</a></li>
                                    <li><a href='page-account.php'>My Account</a></li>
                                    <li><a href='page-login.php'>Login</a></li>
                                    <li><a href='page-register.php'>Register</a></li>
                                    <li><a href='page-forgot-password.php'>Forgot password</a></li>
                                    <li><a href='page-reset-password.php'>Reset password</a></li>
                                    <li><a href='page-purchase-guide.php'>Purchase Guide</a></li>
                                    <li><a href='page-privacy-policy.php'>Privacy Policy</a></li>
                                    <li><a href='page-terms.php'>Terms of Service</a></li>
                                    <li><a href='page-404.php'>404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href='page-contact.php'><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href='page-login.php'><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                </div>
                <div class="site-copyright">Copyright 2024 © Nest. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>
    <!--End header-->
    <a href="https://api.whatsapp.com/send?phone=9893165784" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>