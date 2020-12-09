<!doctype html>
<html class="no-js" lang="zxx">
    <title>Login</title>
    @include('includes/header')

    <main>
        
        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/page-title/page-title-1.jpg">
             <div class="container cont">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1>Login</h1>
                            <div class="page__title-breadcrumb">                                 
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Login</li>
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
                            <h3 class="text-center mb-60">Login From Here</h3>
                            <form action="/pages/home" method="POST">
                                @csrf
                                @if (session()->has('msg'))
                                    <div class="btn btn-danger login-error">
                                        The password or the Email is not Correct
                                    </div>
                                @endif
                                <label for="name">Email Address <span>**</span></label>
                                <input id="name" type="text" name="email" placeholder="Email address..." value="{{ old("email") }}"/>
                                <p class="errors">{{ $errors->first("email") }}</p>

                                <label for="pass">Password <span>**</span></label>
                                <input id="pass" type="password" name="password" placeholder="Enter password..." />
                                <p class="errors">{{ $errors->first("password") }}</p>

                                <div class="login-action mb-20 fix1">
                                    <span class="log-rem f-left">
                                        <input id="remember" type="checkbox" />
                                        <label for="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} name="remember">Remember me!</label>
                                    </span>
                                    <span class="forgot-login f-right">
                                        <a href="#">Lost your password?</a>
                                    </span>
                                </div>
                                <button class="os-btn w-100">Login Now</button>
                                <div class="or-divide"><span>or</span></div>
                                <a href="register" class="os-btn os-btn-black w-100">Register Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login Area End-->
    </main>
        @include('includes/header')
