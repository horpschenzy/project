<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Outstock</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
        
		<!-- CSS here -->
        <link rel="stylesheet" href="/assets/css/preloader.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/metisMenu.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/assets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="/assets/css/default.css">
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <header>
        <div id="header__transparent" class="header__area header__transparent">
        <div class="container">
            <div class="header__top header__top-2">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12">
                        <div class="header__welcome">
                            <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i></a></li>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-5">
                        <div class="logo logo__6 text-md-center">
                            <a href="/"><img src="/assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="header__right p-relative d-flex justify-content-between justify-content-sm-end align-items-center">
                            <div class="mobile-menu-btn d-lg-none">
                                <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                            </div>
                            <div class="header__action">
                                <ul>
                                    <li><a href="/pages/cart" class="cart"><i class="ion-bag"></i> Cart <span>(01)</span></a></li>
                                    
                                        <li> <a href="/account"><i class="far fa-user"></i></a>
                                   
                                    
                                        
                                        {{-- <ul class="extra-info">
                                            <li>
                                                <div class="my-account">
                                                    <div class="extra-title">
                                                        <h5>My Account</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="login.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="register.html">Create Account</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lang">
                                                    <div class="extra-title">
                                                        <h5>Language</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">France</a></li>
                                                        <li><a href="#">Germany</a></li>
                                                        <li><a href="#">Bangla</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="currency">
                                                    <div class="extra-title">
                                                        <h5>currency</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">USD - US Dollar</a></li>
                                                        <li><a href="#">EUR - Ruro</a></li>
                                                        <li><a href="#">GBP - Britis Pound</a></li>
                                                        <li><a href="#">INR - Indian Rupee</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header__bottom">  
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="main-menu d-none d-lg-flex justify-content-center">
                            <nav>
                                <ul>
                                <li class="mega-menu"><a href="/">HOME</a></li>

                                    <li class="active has-dropdown"><a href="#">ACTIVITIES</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="/admin/dashboard">DASHBOARD</a></li>
                                            <li><a href="/admin/add-product">ADD PRODUCT</a></li>
                                            <li><a href="/admin/orders">ORDERS</a></li>
                                            <li><a href="/admin/users">ALL USERS</a></li>
                                            {{-- <li><a href="/pages/shoes">ORDERS</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="active has-dropdown"><a href="/collections/all">PRODUCTS</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="/pages/t-shirts">T-SHIRTS</a></li>
                                            <li><a href="/pages/pants">PANTS</a></li>
                                            <li><a href="/pages/shoes">SHOES</a></li>
                                            <li><a href="/pages/hats">HATS</a></li>
                                            <li><a href="/pages/socks">SOCKS</a></li>
                                            <li><a href="/pages/unique-items">UNIQUE ITEMS</a></li>
                                            <li><a href="/pages/sunglases">SUNGLASES</a></li>
                                        </ul>
                                    </li>
                                    <li class="active has-dropdown"><a href="#">ABOUT US</a>
                                        <ul class="submenu transition-3">
                                            <li><a href="/pages/about-us">ABOUT US</a></li>
                                            <li><a href="/pages/stockist">STOCKIST</a></li>
                                            <li><a href="/admin/logout">LOGOUT</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->