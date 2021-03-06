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
        <link rel="stylesheet" href="/assets/css/ui-range-slider.css">
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
                                    <li><a href="/pages/cart" class="cart"><i class="ion-bag"></i> Cart <span>(
                                        @php
                                            $jun = session('cart');
                                        @endphp
                                        
                                        @if ($jun != null)
                                            {{ count($jun) }}
                                        @else
                                        {{ "0" }}
                                        @endif
                                        )</span></a></li>

                                    @if (Auth::user())
                                        <li> <a href="/account"><i class="far fa-user"></i></a>
                                    @else
                                        <li> <a href="/pages/login"><i class="far fa-user"></i></a>
                                    @endif

                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <section class="extra__info transition-3">
                <div class="extra__info-inner">
                    <div class="extra__info-close text-right">
                        <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
                    </div>
                    <!-- side-mobile-menu start -->
                    <nav class="side-mobile-menu d-block d-lg-none">
                        <ul id="mobile-menu-active" class="metismenu">
                            <li class="active has-dropdown"><a href="index.html">Categories</a>
                                <ul class="submenu transition-3 mm-collapse">
                                    @php
                                        $jun = App\Category::all()->sortBy('category_name');
                                    @endphp
                                    @foreach ($jun as $item)
                                    <li><a href="/pages/{{ $item->category_slug }}">{{ $item->category_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="/pages/about-us">About Us</a></li>
                            <li><a href="/pages/stockist">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- side-mobile-menu end -->
                </div>
            </section>
            <div id="header-sticky" class="header__bottom">  
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="main-menu d-none d-lg-flex justify-content-center">
                            <nav>
                                <ul>
                                   <li class="active has-dropdown"><a href="#"> <i class="fa fa-bars bars" aria-hidden="true"></i>CATEGORIES</a>
                                        <ul class="submenu transition-3">
                                            @php
                                                $jun = App\Category::all()->sortBy('category_name');
                                            @endphp
                                            @foreach ($jun as $item)
                                            <li><a href="/pages/{{ $item->category_slug }}">{{ $item->category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                <li class="mega-menu"><a href="/pages/about-us"><i class="fa fa-bars bars" aria-hidden="true"></i>ABOUT US</a></li>
                                    <li><a href="/pages/stockist"><i class="fa fa-bars bars" aria-hidden="true"></i>STOCKLIST</a></li>
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
<section class="header__search white-bg transition-3 col-sm-12 col-md-12 col-lg-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__search-inner text-center">
                    
                        <div class="header__search-btn">
                            <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header__search-header">
                            <h3>Search</h3>
                        </div>
                        <div class="header__search-categories">
                            <ul class="search-category">
                                @php
                                    $cat = App\Category::all()->take(5);
                                @endphp
                                @foreach ($cat as $item)
                                <li><a href="shop.html">{{ $item->category_name }}</a></li>  
                                @endforeach
                                <li><a href="shop.html">About Us</a></li>  
                            </ul>
                        </div>
                        <form action="/search" method="GET" role="search">
                            @csrf
                            <div class="header__search-input p-relative">
                                <input type="text" name="q" placeholder="Search for products... ">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </div>
                        </form>
        
                    
                </div>
            </div>
        </div>
    </div>
</section>