<!doctype html>
<html class="no-js" lang="zxx">
   <title>Ecos - About Us</title>
    @include('includes/header')

        <main>

            <!-- page title area start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/page-title/page-title-2.jpg">
                <div class="container cont">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Stockist</h1>
                                <div class="page__title-breadcrumb">                                 
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> Stockist</li>
                                    </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end -->

            <!-- contact area start -->
            <section class="contact__area pb-100 pt-95">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="contact__info" style="float:left;  margin-right: 150px;">
                                <h3 class="abouth3">Stockist</h3>
                                <img src="/assets/img/page-title/page-title-2.jpg" class="stockist-img" alt="">
                                <p><a href="mailto:info@ashluxuryhq.com">Info@Ecoms.com</a></p>
                                <div class="col-xl-6 col-md-6 col-lg-6 contact__social">
                                    <ul>
                                        <li><a href="http:://facebook.com/ecoms"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="http:://twitter.com/ecoms"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="http:://instagram.com/ecoms"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact__info" style="float:left;">
                                <div class="col-xl-12 col-md-12 col-lg-12 contact__social">
                                    <form action="/pages/stockist" method="POST">
                                        @csrf
                                        <h2>Become an Ecos Partner</h2>
                                        <div class="form-group">
                                            <label>Store Name :</label>
                                            <input type="text" name="store_name" required="" class="store-in form-control">
                                        </div>
                                        <div class="form-group">
                                            <h3>Representative information</h3>
                                            <div class="form-group"  style="margin-top: -35px;">
                                                <label>Name :</label>
                                                <input type="text" name="rep_name" required="" class="store-in form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address :</label>
                                                <input type="text" name="rep_address" required="" class="store-in form-control">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label>Email :</label>
                                                    <input type="email" name="rep_email" required="" class="store-in form-control">
                                                </div>
                                                <div class="form-group" style="margin-left: 20px">
                                                    <label>Phone No :</label>
                                                    <input type="number" name="rep_phone" required="" class="store-in form-control">
                                                </div>
                                            </div>
                                            <div class="form-submit">
                                                <input type="submit" value="Submit Form" class="btn btn-info" name="submit" id="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact area end -->
        </main>

@include('includes/footer')
        