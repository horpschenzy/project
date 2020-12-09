<!doctype html>
<html class="no-js" lang="zxx">
    @include('includes/header')
        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->
    <main>


        <!-- page title area start -->
        <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/page-title/page-title-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="msg">All orders are processed in USD. While the content of your cart is currently displayed in 
                            <span>NGN</span>, you will checkout using USD at the most current exchange rate.</div>
     @if (session('cart') != null)
                            <div class="page__title-inner text-center">
                            <h1 class="abouth3">Your Cart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

            <!-- Cart Area Strat-->
            <section class="cart-area pt-100 pb-100" style="margin-top: -150px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table" style="text-align: initial !important">
                                        @if(session()->has('msg'))
                                            <div class="col-sm-12 col-md-12 col-lg-12 btn btn-success" id="cartsuccess">
                                                Product Added to Cart Successfully. You can remove, update or Proceed with the buying Below. Thanks!
                                            </div>
                                        @endif
                                        @if(session()->has('mssg'))
                                            <div class="col-sm-12 col-md-12 col-lg-12 btn btn-success" id="cartsuccess">
                                                Product removed from Cart successfully.
                                            </div>
                                        @endif
                                        @if(session()->has('msasg'))
                                            <div class="col-sm-12 col-md-12 col-lg-12 btn btn-success" id="cartsuccess">
                                                Product Updated successfully!
                                            </div>
                                        @endif
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail" colspan="2">Product</th>
                                                <th class="cart-product-name">Price</th>
                                                <th class="product-price">Quantity</th>
                                                <th class="product-quantity">Total</th>
                                            </tr>
                                        </thead>
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $cart)
                                            <form action="/pages/cart/{{ $cart['id'] ?? '' }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail" style="white-space: "><a href="product-details.html">
                                                        <img src="{{ asset("uploads/products") }}/{{ $cart['image_name'] ?? ''}}" height="150px" alt=""></a></td>
                                                    <td class="product-name">
                                                        <a href="product-details.html">{{ $cart['name'] ?? ''}}</a></br><br>
                                                                <button data-id="$id" class="cart-remove btn  btn-secondary btn-small" type="submit">REMOVE</button> </form>
                                                                <button class="cart-remove btn btn-info btn-small update-cart" data-id="{{ $id }}" type="button"><i class="fa fa-refresh"></i>Update</button>
                                                            </td>
                                                            @php
                                                                $id = $cart['id'];
                                                                $get_price = App\Product::where('id', $id)->first('price')
                                                            @endphp
                                                    <td class="product-name">${{ $get_price->price ?? '' }}</td>
                                                    <td class="product-quantity">
                                                        <div class="cart-quantity">
                                                            <input type="number" class="cart-input quantity" name="quantity" id="quantity" value="{{ $cart['quantity'] ?? ''}}">
                                                        </div>                                            
                                                    <td class="product-name">
                                                        ${{ $cart['price'] ?? ''}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                    
                                            @endforeach
                                            @endif
                                    </table>
                                </div>
                                <div class="msg">All orders are processed in USD. While the content of your cart is currently displayed in 
                                    <span>NGN</span>, you will checkout using USD at the most current exchange rate.
                                </div>
                                
                                @php
                                    $jun = session('cart');
                                @endphp
                                
                                @if ((session('cart') != null))
                                    <div class="cart-div">
                                        <div class="grid">
                                        <div class="grid__item text-right small--text-center">
                                            <div>
                                            <span class="cart-subtotal-title"><span id="bk-cart-subtotal-label">Subtotal</span></span>
                                            <span class="cart-subtotal">
                                                    <span>$
                                                        <span class="total" doubly-currency-usd="30000" doubly-currency-ngn="11436025.538932234" 
                                                        doubly-currency="NGN">
                                                        @php
                                                            $subTotal = 0;
                                                            foreach ($jun as  $item) {
                                                                $subTotal += $item['price'];
                                                            }
                                                            echo $subTotal;
                                                        @endphp
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        @else
                                    @endif 
                                        <div class="cart-ship">Shipping &amp; taxes calculated at checkout</div>
                                            <div class="complete">     
                                                <a href="/"><button class="cart-continue btn  btn-secondary btn-small" type="submit">Continue shopping</button></a>
                                                @if (Auth::user() != "user")
                                                    <a href="/pages/login">
                                                        <button type="submit" class="btn btn-info " style="height: 40px;" name="check">
                                                            <span class="cart-check-out">CHECK OUT</span>
                                                        </button>
                                                    </a>
                                                @else
                                                    <a href="/account">
                                                        <button type="submit" class="btn btn-info " style="height: 40px;" name="check">
                                                            <span class="cart-check-out">CHECK OUT</span>
                                                        </button>
                                                    </a>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </footer>   
                        </div>
                    </div>
                </div>
            </section>
        <!-- Cart Area End-->
        @else
        <h3 class="text-center">{{ "No Cart Available!" }}</h3>
        @endif
    </main>
    @include('includes/footer')
    <script>
        setTimeout(function(){
        $('#cartsuccess').alert("close");
    }, 3000);
    
    $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val(), price: ele.parents("tr").find(".price").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>