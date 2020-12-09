<!doctype html>
<html class="no-js" lang="zxx">
   
    @include('includes/head')
    @if (Auth::user()->user_type == "user")
        <main>

            <!-- contact area start -->
            <section class="contact__area pb-100 pt-95">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="contact__info">
                                <h3 class="abouth3" style="margin-top: 120px;">My Account</h3>
                                @if (session()->has("message"))
                                <div class="btn btn-success" id="addaddress">
                                    Address Created Successfully
                                </div>
                                @endif
                                <p class="logout"><a href="/account/logout" class="logout-a">Log out</a></p>

                                
                                <div class="order col-sm-12 col-md-7 col-lg-7"  style="float: left">
                                    <h3 class="order-h3">ORDER HISTORY</h3>
                                    <p class="order-p">You haven't placed any orders yet.</p>
                                </div>
                                
                                <div class="order col-sm-12 col-md-5 col-lg-5" style="float: left">
                                    <h3 class="order-h3">ACCOUNT DETAILS</h3>
                                    <a href="/account/addresses" class="btn btn-info">VIEW ADDRESSES ({{ count($dec) }})</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact area end -->
            <script>
                setTimeout(function(){
                     $('#addaddress').alert("close");
                 }, 1000);
             </script>
        </main>
        @else
        <script>window.location="/pages/login"</script>
        @endif
@include('includes/footer')
        