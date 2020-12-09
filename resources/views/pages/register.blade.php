<title>Register</title>
@include('includes/header')

    <body>
        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->
        <main>
        
            <!-- page title area start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/page-title/page-title-1.jpg">
                <div class="container cont">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Register</h1>
                                <div class="page__title-breadcrumb">                                 
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> Register</li>
                                    </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end -->

            <!-- login Area Strat-->
            <section class="login-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="basic-login">
                                <h3 class="text-center mb-60">Signup From Here</h3>
                                <form action="/pages/login" method="POST">
                                    @csrf
                                    <label for="name">Username <span>**</span></label>
                                    <input id="name" type="text" name="name" placeholder="Enter Username" />
                                    <p class="errors">{{ $errors->first("name") }}</p>

                                    <label for="email-id">Email Address <span>**</span></label>
                                    <input id="email-id" type="text" name="email" placeholder="Email address..." />
                                    <p class="errors">{{ $errors->first("name") }}</p>

                                    <label for="pass">Password <span>**</span></label>
                                    <input id="pass" type="password" name="password" placeholder="Enter password..." />
                                    <p class="errors">{{ $errors->first("name") }}</p>
                                    <div class="mt-10"></div>
                                    <button class="os-btn w-100" type="submit">Register Now</button>
                                    <div class="or-divide"><span>or</span></div>
                                    <a href="/pages/login" class="os-btn os-btn-black w-100">login Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End-->
        </main>

        <!-- footer area start -->
        <section class="footer__area footer-bg">
            <div class="footer__top pt-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <a href="index.html"><img src="assets/img/logo/logo-2.png" alt="logo"></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                    <div class="footer__contact">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-envelope-open-text"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Email: Contact@basictheme.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-phone-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Phone Number: (800) 123 456 789</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title">
                                    <h5>information</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Delivery Inforamtion</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Condition</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">Shipping Policy</a></li>
                                            <li><a href="#">Help & Contact Us</a></li>
                                            <li><a href="#">Returns & Refunds</a></li>
                                            <li><a href="#">Online Stores</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="footer__copyright">
                                <p>Copyright © <a href="index.html">Outstock</a> all rights reserved. Powered by <a href="index.html">basictheme</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="footer__social f-right">
                                <ul>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer area end -->
        
        @include('includes/footer')