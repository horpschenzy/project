<!doctype html>
<html class="no-js" lang="zxx">
   
    @include('includes/head')
    @if (Auth::user()->user_type == "user")
        <main>
            <style>
                .address-p{
                    text-align: center;
                    margin-bottom: 20px !important;
                }
                .address-button{
                    font-size: 15px;
                    text-align: center
                }
            </style>
            <!-- contact area start -->
            <section class="contact__area pb-100 pt-95">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="contact__info" style="text-align: center;">
                                <h3 class="abouth3" style="margin-top: 120px; margin-bottom: 20px;">Your Addresses</h3>
                                <p class="address-p"><a href="/account" class="logout-a">Return to Account Details</a></p>
                                <button class="btn btn-info address-button" type="button" id="but"> ADD A NEW ADDRESS</button>
                                

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                
            </style>
            <div class="page-div" id="address" style="display: none">
                <div class="page-binding">
                    <div class="page-joining col-sm-12 col-md-12 col-lg-12">
                        <form action="/account" method="POST">
                            @csrf
                            <h2>Add a New Address</h2>
                            <div class="div-bind col-sm-12 col-md-12 col-lg-12">
                                <div class="each-div col-sm-6 col-md-6 col-lg-6">
                                    <label for="">First Name</label>
                                    <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name">
                                    <p class="errors">{{ $errors->first("fname") }}</p>
                                </div>

                                <div class="each-div col-sm-6 col-md-6 col-lg-6">
                                    <label for="">Last Name</label>
                                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name">
                                    <p class="errors">{{ $errors->first("lname") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Company</label>
                                    <input type="text" id="lname" class="form-control" name="company" placeholder="Company">
                                <p class="errors">{{ $errors->first("company") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Address1</label>
                                    <input type="text" id="lname" class="form-control" name="address" placeholder="First Address">
                                    <p class="errors">{{ $errors->first("address") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Address2</label>
                                    <input type="text" id="lname" class="form-control" name="address1" placeholder="Second Address">
                                    <p class="errors">{{ $errors->first("address1") }}</p>
                                </div>

                                <div class="each-div col-sm-6 col-md-6 col-lg-6">
                                    <label for="">City</label>
                                    <input type="text" id="fname" class="form-control" name="city" placeholder="City">
                                    <p class="errors">{{ $errors->first("city") }}</p>
                                </div>

                                <div class="each-div col-sm-6 col-md-6 col-lg-6">
                                    <label for="">Country</label>
                                    <select type="text" id="lname" name="country" class="form-control" placeholder="Country">
                                        @include('user/countries')
                                    </select>
                                    <p class="errors">{{ $errors->first("country") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Province</label>
                                    <select type="text" id="lname"  name="province" class="form-control" placeholder="Province">
                                        @include('user/countries')
                                    </select>
                                    <p class="errors">{{ $errors->first("province") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Postal/Zip Code</label>
                                    <input type="number" id="lname" name="zip_code" class="form-control" placeholder="Zip Code">
                                    <p class="errors">{{ $errors->first("zip_code") }}</p>
                                </div>

                                <div class="each-div col-sm-12 col-md-12 col-lg-12">
                                    <label for="">Phone Number</label>
                                    <input type="number" id="lname" class="form-control" name="phone" placeholder="Phone Number">
                                <p class="errors">{{ $errors->first("phone") }}</p>
                                </div>
                                <button class="btn btn-info address-submit" type="submit" id="but"> ADD A NEW ADDRESS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- contact area end -->

        </main>
        @else
        <script>window.location="/pages/login"</script>
        @endif
@include('includes/footer')
<script type="text/javascript">
    var select = document.querySelector('#but');
    var address = document.querySelector('#address');
        select.onclick = function(){
            address.style.display = 'block';
        }
</script>