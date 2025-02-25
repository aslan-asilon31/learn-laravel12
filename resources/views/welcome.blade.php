<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> MarketPro</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/img-new/favicon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    @livewireStyles
    @vite(['resources/js/app.js'])
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="{{ asset('frontend/assets/images/img-new/preloader.gif') }}" alt="">
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            <img src="{{ asset('frontend/assets/images/img-new/logo.png') }}" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ======================= Middle Top Start ========================= -->
<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
            <ul class="flex-align flex-wrap d-none d-md-flex">
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Become A Seller</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">About us</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Free Delivery</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Returns Policy</a></li>
            </ul>
        <ul class="header-top__right flex-align flex-wrap">
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="text-white text-sm py-8">Help Center</a>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-headset"></i></span>
                                Call Center
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-chat-circle-dots"></i></span>
                                Live Chat
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag1.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag2.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag3.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag4.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag6.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag5.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                   <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag1.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag2.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag3.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag4.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag6.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="{{ asset('frontend/assets/images/img-new/flag5.png') }}" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="border-right-item">
                    <a href="account.html" class="text-white text-sm py-8 flex-align gap-6"> 
                        <span class="icon text-md d-flex"> <i class="ph ph-user-circle"></i> </span> 
                        <span class="hover-text-decoration-underline">My Account</span>
                     </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ======================= Middle Top End ========================= -->

    <!-- ======================= Middle Header Start ========================= -->
<header class="header-middle bg-color-one border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.html" class="link">
                    <img src="{{ asset('frontend/assets/images/img-new/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- form location Start -->
            <form action="#" class="flex-align flex-wrap form-location-wrapper">
                <div class="search-category d-flex h-48 select-border-end-0 radius-end-0 search-form d-sm-flex d-none">
                    <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                        <option value="1" selected disabled>All Categories</option>
                        <option value="1">Grocery</option>
                        <option value="1">Breakfast & Dairy</option>
                        <option value="1">Vegetables</option>
                        <option value="1">Milks and Dairies</option>
                        <option value="1">Pet Foods & Toy</option>
                        <option value="1">Breads & Bakery</option>
                        <option value="1">Fresh Seafood</option>
                        <option value="1">Fronzen Foods</option>
                        <option value="1">Noodles & Rice</option>
                        <option value="1">Ice Cream</option>
                    </select>
    
                    <div class="search-form__wrapper position-relative">
                        <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-end-pill pe-44" placeholder="Search for a product or brand">
                        <button type="submit" class="w-32 h-32 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8"><i class="ph ph-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="location-box bg-white flex-align gap-8 py-6 px-16 rounded-pill border border-gray-100">
                    <span class="text-gray-900 text-xl d-xs-flex d-none"><i class="ph ph-map-pin"></i></span>
                    <div class="line-height-1">
                        <span class="text-gray-600 text-xs">Your Location</span>
                        <div class="line-height-1">
                            <select class="js-example-basic-single border border-gray-200 border-end-0" name="state">
                                <option value="1">Alabama</option>
                                <option value="1">Alaska</option>
                                <option value="1">Arizona</option>
                                <option value="1">Delaware</option>
                                <option value="1">Florida</option>
                                <option value="1">Georgia</option>
                                <option value="1">Hawaii</option>
                                <option value="1">Indiana</option>
                                <option value="1">Marzland</option>
                                <option value="1">Nevada</option>
                                <option value="1">New Jersey</option>
                                <option value="1">New Mexico</option>
                                <option value="1">Jakarta</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form location start -->
             
            <!-- Header Middle Right start -->
            <div class="header-right flex-align d-lg-block d-none">
                <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
            </div>
            <!-- Header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->

    <!-- ==================== Header Start Here ==================== -->
<header class="header bg-white border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper">

                <!-- Category Dropdown Start -->
                <div class="category on-hover-item">
                    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-heading">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">

                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

                        <!-- Logo Start -->
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.html" class="link">
                                <img src="{{ asset('frontend/assets/images/img-new/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- Logo End -->

                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
    
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Soda & Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Sports & Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flavoured Water    </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats & Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats & Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Fresh & Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast & Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast & Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Oats & Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Granola & Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits & Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits & Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cream Biscuits & Wafers </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Glucose & Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery & Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery & Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Lemon, Ginger & Garlic </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Indian & Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dals & pulses</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Millet & Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> 
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <a href="tel:01234567890" class="bg-main-600 text-white p-12 h-100 hover-bg-main-800 flex-align gap-8 text-lg d-lg-flex d-none"> 
                    <div class="d-flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                </a>
                <div class="me-16 d-lg-none d-block">
                    <div class="flex-align flex-wrap gap-12">
    <button type="button" class="search-icon flex-align d-lg-none d-flex gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align gap-4 item-hover">
        <span class="text-2xl text-gray-700 d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-gray-500 item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->
    
    <!-- ============================ Banner Section start =============================== -->
<div class="banner " >
    <div class="container container-lg">

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/assets/images/img-new/banner-bg.png') }}" class="d-block w-100" alt="{{ asset('frontend/assets/images/img-new/banner-bg.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/img-new/banner-bg.png') }}" class="d-block w-100" alt="{{ asset('frontend/assets/images/img-new/banner-bg.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/img-new/banner-bg.png') }}" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

       
    </div>
</div>
<!-- ============================ Banner Section End =============================== -->

    <!-- ============================ Feature Section start =============================== -->
<div class="feature" id="featureSection">
    <div class="container container-lg">
        <div class="position-relative arrow-center">
            <div class="flex-align">
                <button type="button" id="feature-item-wrapper-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="feature-item-wrapper-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
            <div class="feature-item-wrapper">
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Vegetables</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Desserts</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img4.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Drinks & Juice</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img5.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Animals Food</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img6.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fresh Fruits</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img7.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Yummy Candy</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img8.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Dairy & Eggs</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img9.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Snacks</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/feature-img10.png') }}" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Frozen Foods</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Feature Section End =============================== -->

    <!-- ======================== promotional banner Start ============================== -->
<section class="promotional-banner pt-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/promotional-banner-img1.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Meat</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/promotional-banner-img2.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Daily Fresh Vegetables</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/promotional-banner-img3.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Milk</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                <div class="promotional-banner-item position-relative rounded-24 overflow-hidden z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/promotional-banner-img4.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="promotional-banner-item__content">
                        <h6 class="promotional-banner-item__title text-32">Everyday Fresh Fruits</h6>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== promotional banner End ============================== -->
    
    <!-- ========================= flash sales Start ================================ -->
<section class="flash-sales pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Flash Sales Today</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="flash-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="flash-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales__slider arrow-style-two">
            <div class="" data-aos="fade-up" data-aos-duration="600">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="{{ asset('frontend/assets/images/img-new/flash-sale-bg1.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="{{ asset('frontend/assets/images/img-new/flash-sale-img1.png') }}" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Fresh Vegetables</h6>
                        <div class="countdown" id="countdown1">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="{{ asset('frontend/assets/images/img-new/flash-sale-bg2.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="{{ asset('frontend/assets/images/img-new/flash-sale-img2.png') }}" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown2">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1400">
                <div class="flash-sales-item rounded-16 overflow-hidden z-1 position-relative flex-align flex-0 justify-content-between gap-8">
                    <img src="{{ asset('frontend/assets/images/img-new/flash-sale-bg2.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1 flash-sales-item__bg">
                    <div class="flash-sales-item__thumb d-sm-block d-none">
                        <img src="{{ asset('frontend/assets/images/img-new/flash-sale-img2.png') }}" alt="">
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown3">
                            <ul class="countdown-list flex-align flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= flash sales End ================================ -->

    <div class="product mt-24">
    <div class="container container-lg">
        <div class="row gy-4 g-12">
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                   
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img1.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img2.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img3.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img1.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img5.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16">
                        Add <i class="ph ph-shopping-cart"></i> 
                    </a>
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img6.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-16">
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                            <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>
                        <div class="mt-12">
                            <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                            </div>
                            <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- =========================== Offer Section Start =============================== -->
 <section class="offer pt-80 pb-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/offer-shape.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="{{ asset('frontend/assets/images/img-new/offer-img1.png') }}" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="{{ asset('frontend/assets/images/img-new/offer-logo.png') }}" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">Rp5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="offer-card position-relative rounded-16 bg-main-600 overflow-hidden p-16 flex-align gap-16 flex-wrap z-1">
                    <img src="{{ asset('frontend/assets/images/img-new/offer-shape.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="offer-card__thumb d-lg-block d-none">
                        <img src="{{ asset('frontend/assets/images/img-new/offer-img2.png') }}" alt="">
                    </div>
                    <div class="py-xl-4">
                        <div class="offer-card__logo mb-16 w-80 h-80 flex-center bg-white rounded-circle">
                            <img src="{{ asset('frontend/assets/images/img-new/offer-logo.png') }}" alt=""> 
                        </div>
                        <h4 class="text-white mb-8">Rp5 off your first order</h4>
                        <div class="flex-align gap-8">
                            <span class="text-sm text-white">Delivery by 6:15am</span>
                            <span class="text-sm text-main-two-600">expired Aug 5</span>
                        </div>
                        <a href="shop.html" class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- =========================== Offer Section End =============================== -->
    
    <!-- ========================= Recommended Start ================================ -->
<section class="recommended overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading flex-between flex-wrap gap-16">
            <h5 class="mb-0 wow bounceInLeft">Recommended for you</h5>
            <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-grocery-tab" data-bs-toggle="pill" data-bs-target="#pills-grocery" type="button" role="tab" aria-controls="pills-grocery" aria-selected="false">Grocery</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-fruits" aria-selected="false">Fruits</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-juices-tab" data-bs-toggle="pill" data-bs-target="#pills-juices" type="button" role="tab" aria-controls="pills-juices" aria-selected="false">Juices</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false">Vegetables</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-snacks" type="button" role="tab" aria-controls="pills-snacks" aria-selected="false">Snacks</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-organic-tab" data-bs-toggle="pill" data-bs-target="#pills-organic" type="button" role="tab" aria-controls="pills-organic" aria-selected="false">Organic Foods</button>
                </li>
            </ul>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-juices" role="tabpanel" aria-labelledby="pills-juices-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab" tabindex="0">
                 <div class="row g-12">
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img7.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>   
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img11.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img12.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img13.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img14.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img15.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img16.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img17.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
            <a href="product-details.html" class="product-card__thumb flex-center">
                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
            </a>
            <div class="product-card__content p-sm-2 w-100">
                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                </h6>
                <div class="flex-align gap-4">
                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                </div>

                <div class="product-card__content mt-12">
                    <div class="product-card__price mb-8">
                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                    </div>
                    <div class="flex-align gap-6">
                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                    </div>
                    <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Recommended End ================================ -->


    <!-- ========================= hot-deals Start ================================ -->
<section class="hot-deals pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Hot Deals Todays</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="deals-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="deals-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-12">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="hot-deals position-relative rounded-16 bg-main-600 overflow-hidden p-28 z-1 text-center">
                    <img src="{{ asset('frontend/assets/images/img-new/offer-shape.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="hot-deals__thumb">
                        <img src="{{ asset('frontend/assets/images/img-new/hot-deals-img.png') }}" alt="">
                    </div>
                    <div class="py-xl-4">
                        <h4 class="text-white mb-8">Fresh Vegetables</h4>
                        <div class="countdown my-32" id="countdown4">
                            <ul class="countdown-list flex-center flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="hot-deals-slider arrow-style-two">
                    <div  data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="{{ asset('frontend/assets/images/img-new/product-img8.png') }}" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="600">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="{{ asset('frontend/assets/images/img-new/product-img10.png') }}" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="800">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="{{ asset('frontend/assets/images/img-new/product-img18.png') }}" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  data-aos="fade-up" data-aos-duration="1000">
                        <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                            <a href="product-details.html" class="product-card__thumb flex-center">
                                <img src="{{ asset('frontend/assets/images/img-new/product-img9.png') }}" alt="">
                            </a>
                            <div class="product-card__content p-sm-2 w-100">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
        
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    </div>
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-600">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                    </div>
                                     <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= hot-deals End ================================ -->


    <!-- ============================== Top Vendors Section Start ================================= -->
 <section class="top-vendors py-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">Weekly Top Vendors</h5>
                <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">All Vendors</a>
            </div>
        </div>

        <div class="row gy-4 vendor-card-wrapper">
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo1.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Organic Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo2.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Safeway</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo3.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Food Max</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo4.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">HRmart</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="200">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo5.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Lucky Supermarket</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo6.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Arico Farmer</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo7.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Farmer Market</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/vendor-logo8.png') }}" alt="" class="vendor-card__logo m-12">
                        <h6 class="title mt-32">Foodsco</h6>
                        <span class="text-heading text-sm d-block">Delivery by 6:15am</span>
                        <a href="shop.html" class="btn btn-main-two rounded-pill py-6 px-16 text-12 mt-8">Rp5 off Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex-center flex-wrap gap-8">
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img1.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img2.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img3.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img4.png') }}" alt="">
                        </div>
                        <div class="vendor-card__item bg-white rounded-circle flex-center">
                            <img src="{{ asset('frontend/assets/images/img-new/vendor-img5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ============================== Top Vendors Section End ================================= -->

        <!-- ========================= best sells Start ================================ -->
<section class="best sells pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Daily Best Sells</h5>
            </div>
        </div>

        <div class="row g-12">
            <div class="col-xxl-8">
                <div class="row gy-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="{{ asset('frontend/assets/images/img-new/best-sell1.png') }}" alt="">
                                </a>
                                <div class="countdown" id="countdown6">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="{{ asset('frontend/assets/images/img-new/best-sell2.png') }}" alt="">
                                </a>
                                <div class="countdown" id="countdown7">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="{{ asset('frontend/assets/images/img-new/best-sell3.png') }}" alt="">
                                </a>
                                <div class="countdown" id="countdown8">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card style-two h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 flex-align gap-16">
                            <div class="">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                                <a href="product-details.html" class="product-card__thumb flex-center">
                                    <img src="{{ asset('frontend/assets/images/img-new/best-sell4.png') }}" alt="">
                                </a>
                                <div class="countdown" id="countdown9">
                                    <ul class="countdown-list style-three flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="days"></span>Days</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="hours"></span>Hours</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="minutes"></span>Min</li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium"><span class="seconds"></span>Sec</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-card__content">
                                <div class="product-card__price mb-16">
                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> Rp28.99</span>
                                    <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <div class="flex-align gap-6">
                                    <span class="text-xs fw-bold text-gray-600">4.8</span>
                                    <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                                </h6>
                                <div class="flex-align gap-4">
                                    <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="mt-12">
                                    <div class="progress w-100  bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                </div>
                                <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4" data-aos="zoom-in" data-aos-duration="600">
                <div class="position-relative rounded-16 bg-light-purple overflow-hidden p-28 z-1 text-center">
                    <div class="">
                        <img src="{{ asset('frontend/assets/images/img-new/special-snacks.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                        <div class="d-xxl-block d-none">
                            <img src="{{ asset('frontend/assets/images/img-new/special-snacks-img.png') }}" alt="">
                        </div>
                    </div>
                    <div class="py-xl-4">
                        <h4 class="mb-8">Special Snacks</h4>
                        <div class="countdown my-32" id="countdown5">
                            <ul class="countdown-list style-two flex-center flex-wrap">
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="days"></span>Days</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="hours"></span>Hours</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="minutes"></span>Min</li>
                                <li class="countdown-list__item text-heading flex-align gap-4 text-sm fw-medium colon-white"><span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= best sells End ================================ -->


    <!-- ========================= Delivery Section Start ================================ -->
<div class="delivery-section">
    <div class="container container-lg">
        <div class="delivery position-relative rounded-16 bg-main-600 p-16 flex-align gap-16 flex-wrap z-1">
            <img src="{{ asset('frontend/assets/images/img-new/delivery-bg.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
            <div class="row align-items-center">
                <div class="col-md-3 d-md-block d-none">
                    <div class="delivery__man text-center" data-aos="fade-down-right">
                        <img src="{{ asset('frontend/assets/images/img-new/delivery-man.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-7">
                    <div class="text-center">
                        <h4 class="text-white mb-8" data-aos="fade-down">We Delivery on Next Day from 10:00 AM to 08:00 PM</h4>
                        <p class="text-white" data-aos="zoom-in">For Orders starts from $100</p>
                        <a href="shop.html" class="mt-16 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" data-aos="fade-up" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 d-sm-block d-none" data-aos="zoom-out" data-aos-duration="800">
                    <img src="{{ asset('frontend/assets/images/img-new/special-snacks-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================= Delivery Section End ================================ -->


    <!-- ========================= organic food Start ================================ -->
<section class="organic-food py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Organic Food</h5>
                <div class="flex-align gap-16 wow bounceInRight">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline"> All Categories</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="organic-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="organic-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="organic-food__slider arrow-style-two">
            <div data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img20.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img21.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img22.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img23.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img24.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img25.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                   <a href="product-details.html" class="product-card__thumb flex-center">
                       <img src="{{ asset('frontend/assets/images/img-new/product-img21.png') }}" alt="">
                   </a>
                   <div class="product-card__content mt-12">
                       <div class="flex-align gap-6">
                           <span class="text-xs fw-bold text-gray-500">4.8</span>
                           <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-xs fw-bold text-gray-500">(17k)</span>
                       </div>
                       <h6 class="title text-lg fw-semibold mt-12 mb-8">
                           <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets Vegetables</a>
                       </h6>
                       <div class="flex-align gap-4">
                           <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                           <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                       </div>

                       <div class="flex-between gap-8 mt-24 flex-wrap">
                           <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                           <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= organic food End ================================ -->

    <!-- ========================== Short Product Section Start ============================== -->
 <div class="short-product">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Featured Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img1.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img2.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img3.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img1.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img2.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img3.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Top Selling Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img5.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img6.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img8.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img5.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img6.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img8.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">On-sale Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img9.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img9.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img4.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2 ">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line position-relative mb-0 pb-16 d-inline-block">Top Rated Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img3.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img1.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img8.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img1.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img7.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img3.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-align gap-16">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="product-details.html" class="link"><img src="{{ asset('frontend/assets/images/img-new/short-product-img8.png') }}" alt=""></a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-bold text-gray-500">4.8</span>
                                        <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-bold text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-8 mb-8">
                                        <a href="product-details.html" class="link text-line-1">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="product-card__price flex-align gap-8">
                                        <span class="text-heading text-md fw-semibold d-block">Rp1500.00</span>
                                        <span class="text-gray-400 text-md fw-semibold d-block">Rp1500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>



<!-- ========================== Short Product Section End ============================== -->

    <!-- ============================== Brand Section Start =============================== -->
<div class="brand py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="brand-inner bg-color-one p-24 rounded-16">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Shop by Brands</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="brand-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="brand-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-slider arrow-style-two">
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="200">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img1.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="400">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img2.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="600">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img3.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="800">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img4.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1000">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img5.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1200">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img6.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1400">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img7.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1600">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img8.png') }}" alt="">
                </div>
                <div class="brand-item" data-aos="zoom-in" data-aos-duration="1800">    
                    <img src="{{ asset('frontend/assets/images/img-new/brand-img3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================== Brand Section End =============================== -->

    <!-- ========================== New Arrival Section Start ============================= -->
 <section class="new-arrival pb-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">New Arrivals</h5>
                <div class="flex-align gap-16">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="new-arrival-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="new-arrival-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1" >
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-arrival__slider arrow-style-two">
            <div data-aos="fade-up" data-aos-duration="200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img20.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img21.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="600">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img22.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="800">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img23.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img24.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img25.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1400">
                <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                    <a href="product-details.html" class="product-card__thumb flex-center">
                        <img src="{{ asset('frontend/assets/images/img-new/product-img21.png') }}" alt="">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-500">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-500">(17k)</span>
                        </div>
                        <h6 class="title text-lg fw-semibold mt-12 mb-8">
                            <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                        </h6>
                        <div class="flex-align gap-4">
                            <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                        </div>

                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through d-block"> Rp28.99</span>
                                <span class="text-heading text-md fw-semibold ">Rp14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <a href="cart.html" class="product-card__cart btn btn-main py-11 px-24 rounded-pill flex-align gap-8">
                                Add <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== New Arrival Section End ============================= -->

    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->

    <!-- =============================== Newsletter Section Start ============================ -->
<div class="newsletter">
    <div class="container container-lg">
        <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
            <img src="{{ asset('frontend/assets/images/img-new/newsletter-bg.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="">
                        <h1 class="text-white mb-12" data-aos="fade-down" data-aos-duration="800">Don't Miss Out on Grocery Deals</h1>
                        <p class="text-white h5 mb-0" data-aos="fade-up" data-aos-duration="800">SING UP FOR THE UPDATE NEWSLETTER</p>
                        <form action="#" class="position-relative mt-40" data-aos="zoom-in" data-aos-duration="800">
                            <input type="text" class="form-control common-input rounded-pill text-white py-22 px-16 pe-144" placeholder="Your email address...">
                            <button type="submit" class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 text-center d-xl-block d-none">
                    <img src="{{ asset('frontend/assets/images/img-new/newsletter-img.png') }}" alt="" data-aos="zoom-in" data-aos-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============================== Newsletter Section End ============================ -->
    
    
<!-- ==================== Footer Start Here ==================== -->
<footer class="footer py-120">
    <img src="{{ asset('frontend/assets/images/img-new/body-bottom-bg.png') }}" alt="BG" class="body-bottom-bg">
    <div class="container container-lg">
        <div class="footer-item-wrapper d-flex align-items-start flex-wrap">
            <div class="footer-item" data-aos="fade-up" data-aos-duration="200">
                <div class="footer-item__logo">
                    <a href="index.html"> <img src="{{ asset('frontend/assets/images/img-new/logo.png') }}" alt=""></a>
                </div>
                <p class="mb-24">We're Grocery Shop, an innovative team of food supliers.</p>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, Biyes park, California, USA</span>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                    <div class="flex-align gap-16 flex-wrap">
                        <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                        <span class="text-md text-main-600 ">or</span>
                        <a href="tel:+00987654012" class="text-md text-gray-900 hover-text-main-600">+00 987 654 012</a>
                    </div>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle bg-main-600 text-white text-md flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                </div>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="400">
                <h6 class="footer-item__title">Information</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="600">
                <h6 class="footer-item__title">Customer Support</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="contact.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="800">
                <h6 class="footer-item__title">My Account</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="footer-item__title">Daily Groceries</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Dairy & Eggs</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Meat & Seafood</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Breakfast Food</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Household Supplies</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Bread & Bakery</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Pantry Staples</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="1200">
                <h6 class="">Shop on The Go</h6>
                <p class="mb-16">Marketpro App is available.  Get it now</p>
                <div class="flex-align gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                        <img src="{{ asset('frontend/assets/images/img-new/store-img1.png') }}" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                        <img src="{{ asset('frontend/assets/images/img-new/store-img2.png') }}" alt="">
                    </a>
                </div>

                <ul class="flex-align gap-16">
    <li>
        <a href="https://www.facebook.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-facebook-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.twitter.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-twitter-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-instagram-logo"></i>
        </a>
    </li>
    <li>
        <a href="https://www.pinterest.com" class="w-44 h-44 flex-center bg-main-100 text-main-600 text-xl rounded-circle hover-bg-main-600 hover-text-white">
            <i class="ph-fill ph-linkedin-logo"></i>
        </a>
    </li>
</ul>
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer bg-color-one py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved </p>
            <div class="flex-align gap-8 flex-wrap wow fadeInRightBig">
                <span class="text-heading text-sm">We Are Accepting</span>
                <img src="{{ asset('frontend/assets/images/img-new/payment-method.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer End Here ==================== -->
  

    
    <!-- Jquery js -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('frontend/assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('frontend/assets/js/phosphor-icon.js') }}"></script>
    <!-- Select 2 -->
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('frontend/assets/js/count-down.js') }}"></script>
    <!-- jquery UI js -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- AOS Animation -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- marque -->
    <script src="{{ asset('frontend/assets/js/marque.min.js') }}"></script>
    <!-- marque -->
    <script src="{{ asset('frontend/assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/assets/js/counter.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    @livewireScripts

    </body>
</html>