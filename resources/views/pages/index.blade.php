@include('includes/header')
<body>
        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->
        <main>
            <!-- slider area start -->
            <section class="slider__area slider__area-2 p-relative">
                <div class="slider-active">
                    <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="/assets/img/slider/slider-1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12">
                                    <div class="slider__content">
                                        <h2 data-animation="fadeInUp" data-delay=".2s">Handmade <br> Hand carved Coffee</h2>
                                        <p data-animation="fadeInUp" data-delay=".2s">High Beam is an adjustable desk or shelf light that offers a wide variety of lighting possibilities.</p>
                                        <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".3s">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="/assets/img/slider/slider-2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12">
                                    <div class="slider__content">
                                        <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>
                                        <p data-animation="fadeInUp" data-delay=".2s">High Beam is an adjustable desk or shelf light that offers a wide variety of lighting possibilities.</p>
                                        <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".3s">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider single-slider-2 slider__height-5 d-flex align-items-center" data-background="/assets/img/slider/slider-3.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12">
                                    <div class="slider__content">
                                        <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>
                                        <p data-animation="fadeInUp" data-delay=".2s">High Beam is an adjustable desk or shelf light that offers a wide variety of lighting possibilities.</p>
                                        <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".3s">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider area end -->
            
             <!-- sale off area start -->
             <section class="sale__area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-55">
                                <div class="section__title mb-10">
                                    <h2 class="elements">ELEMENTS COLLECTION LIST</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12" style="margin-left: 35px;">
                            @foreach ($category as $item)
                                <div class="owl-item cloned active col-sm-12 col-md-3 col-lg-2" style="margin-right: 25px; width: 234px;float:left;" class="">
                                    <div class="product__wrapper mb-60">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{ asset('uploads/category')}}/{{ $item->category_image }}" style="width:200px; height: 200px" alt="product-img">
                                            <h3 class="collection-grid-item__title">
                                                {{ $item->category_name }}  
                                            </h3>
                                        </a>
                                    </div>
                                </div></div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- sale off area end -->
            
            <!-- product area start -->
            <section class="product__area pt-60 pb-65 col-lg-12 col-md-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__title-wrapper text-center mb-55">
                                <div class="section__title mb-10">
                                    <h2>UNIQUE ITEMS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($uniItem as $item)
                            <div class="col-xl-6 col-md-6 col-lg-6">
                                <div class="product__banner  mb-30">
                                    <a href="product-details.html" class="w-img" id="image-1">
                                        <img src="{{ asset("uploads/products") }}/{{ $uniItem[0]['image_name'][0] }}" style="height: 550px; opacity: 0.5;" alt="{{ $item->name }}">
                                        <p class="product-p">{{ $item->name }}</p>
                                        <b class="product-b">SOLD OUT</b>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        
                        @foreach ($uniItems as $item)
                            <div class="col-xl-6 col-lg-6">
                                <div class="product__banner w-img pb-25 mb-30">
                                    <a href="product-details.html" class="w-img" id="image-1">
                                        <img src="{{ asset("uploads/products") }}/{{ $uniItems[0]['image_name'][0] }}" style="height: 550px; opacity: 0.5;" alt="{{ $item->name }}">
                                        <p class="product-p">{{ $item->name }}</p>
                                        <b class="product-b">SOLD OUT</b>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center">
                        <a href="/collections/unique-items">
                            <button class="os-btn os-btn-2 os-btn-3">VIEW ALL</button>
                        </a>
                    </div>
                </div>
            </section>
            <!-- product area end -->

            <!-- banner area start -->
            <div class="pb-60" style="padding-top: 70px">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-xl-12 col-md-12 col-lg-12 banner-bt">
                            <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                <div class="col-sm-3 col-md-12 col-lg-3 bottom-img"  style="float: left">
                                    <a href="/" class="w-img">
                                        <img src="/uploads/products/960x0.jpg1607120180.jpg" class="bottom-img" alt="banner"></a>
                                </div>
                                <div class="col-sm-3 col-md-12 col-lg-3 bottom-img" style="float: left">
                                    <a href="/" class="w-img"><img src="uploads/products/pexels-paul-ijsendoorn-33041.jpg1607132329.jpg" class="bottom-img" alt="banner"></a>
                                </div>
                                <div class="col-sm-3 col-md-12 col-lg-3 bottom-img" style="float: left">
                                    <a href="/" class="w-img"><img src="uploads/products/960x0 (1).jpg1607120580.jpg" class="bottom-img" alt="banner"></a>
                                </div>
                                <div class="col-sm-3 col-md-12 col-lg-3 bottom-img" style="float: left">
                                    <a href="/" class="w-img"><img src="uploads/products/37406-70228-36564-68130-iPhone-12-Dummies-In-Hnad-xl-xl.jpg1607120897.jpg" class="bottom-img" alt="banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner area end -->
            
            {{-- <!-- subscribe area start -->
            <section class="subscribe__area pb-100">
                <div class="container">
                    <div class="subscribe__inner pt-95">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                                <div class="subscribe__content text-center">
                                    <h2>Get Discount Info</h2>
                                    <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                    <div class="subscribe__form">
                                        <form action="#">
                                            <input type="email" placeholder="Subscribe to our newsletter...">
                                            <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe area end --> --}}

            <!-- shop modal start -->
            <!-- Modal -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product-modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content mb-20" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-big-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-big-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-big-3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <nav>
                                                <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                    <div class="product__nav-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-sm-1.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-sm-2.jpg" alt="">
                                                    </div>
                                                    </a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                    <div class="product__nav-img w-img">
                                                        <img src="/assets/img/shop/product/quick-view/quick-sm-3.jpg" alt="">
                                                    </div>
                                                    </a>
                                                </div>
                                                </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-content">
                                            <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                            <div class="rating rating-shop mb-15">
                                                <ul>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fas fa-star"></i></span></li>
                                                    <li><span><i class="fal fa-star"></i></span></li>
                                                </ul>
                                                <span class="rating-no ml-10">
                                                    3 rating(s)
                                                </span>
                                            </div>
                                            <div class="product__price-2 mb-25">
                                                <span>$96.00</span>
                                                <span class="old-price">$96.00</span>
                                            </div>
                                            <div class="product__modal-des mb-30">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            </div>
                                            <div class="product__modal-form">
                                                <form action="#">
                                                    <div class="product__modal-input size mb-20">
                                                        <label>Size <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> S</option>
                                                            <option> M</option>
                                                            <option> L</option>
                                                            <option> XL</option>
                                                            <option> XXL</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-input color mb-20">
                                                        <label>Color <i class="fas fa-star-of-life"></i></label>
                                                        <select>
                                                            <option>- Please select -</option>
                                                            <option> Black</option>
                                                            <option> Yellow</option>
                                                            <option> Blue</option>
                                                            <option> White</option>
                                                            <option> Ocean Blue</option>
                                                        </select>
                                                    </div>
                                                    <div class="product__modal-required mb-5">
                                                        <span >Repuired Fiields *</span>
                                                    </div>
                                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                                        <div class="product-quantity-title">
                                                            <label>Quantity</label>
                                                        </div>
                                                        <div class="product-quantity">
                                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                        </div>
                                                        <div class="pro-cart-btn ml-20">
                                                            <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->
        </main>


@include('includes/footer')
