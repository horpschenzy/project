<!doctype html>
<html class="no-js" lang="zxx">
   
    @include('includes/header')  
    
        <main>
            <style>
                .cart-ul{
                    margin-top: 30px;
                    list-style: none;
    margin: 0;
    padding: 0;
    margin-left: -30px;
                }
                .cart-img{
                    display: block;
    margin: -2px 0px 8px;
    height: 130px;
    width: 25%;
    cursor: pointer; 
                    float: left;

                }
                .cart-other-div{
                    margin-left: 30px;
                    margin-top: 80px;
                }
            </style>

            <!-- contact area start -->
            <section class="contact__area pb-100 pt-95">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="contact__info"  style="margin-top: 200px;">
                                @foreach ($prod as $item)
                                <div class="order col-sm-12 col-md-7 col-lg-7"  style="float: left">
                                   <div>
                                       <img src="{{ asset("uploads/products") }}/{{ $item->image_name[0] }}" class="pro-img order col-sm-12 col-md-12 col-lg-12" style="height: 400px;" alt="{{ $item->name }}">
                                   </div><br>
                                   <div class="cart-other-div other">
                                       <ul class="cart-ul">
                                           
                                        <li class="cart-li active" onclick="changeImage(this)">
                                            <img src="{{ asset("uploads/products") }}/{{ $item->image_name[0] }}" alt="{{ $item->name }}"  class="cart-img col-sm-4 col-md-4 col-lg-4">
                                        </li>
                                        <li class="cart-li" onclick="changeImage(this)">
                                            <img src="{{ asset("uploads/products") }}/{{ $item->image_name[1] }}" alt="{{ $item->name }}"  class="cart-img col-sm-4 col-md-4 col-lg-4">
                                        </li>
                                        <li class="cart-li" onclick="changeImage(this)">
                                            <img src="{{ asset("uploads/products") }}/{{ $item->image_name[2] }}" alt="{{ $item->name }}"  class="cart-img col-sm-4 col-md-4 col-lg-4">
                                        </li>
                                        
                                       </ul>
                                   </div>
                                </div>
                                <div class="order col-sm-12 col-md-5 col-lg-5" style="float: left">
                                    <h1 class="order-h1" style="text-transform: uppercase">{{ $item->name }}</h1>
                                    <span><p class="t-amount">$
                                        {{ $item->price }} 
                                   </p></span>
                                    <style>
     
                                    </style>
                                    <div class="add-cart-div">
                                        <label>Size</label>
                                        <select class="form-control select-size" name="size">
                    
                                            <option value="S">S</option>
                                          
                                            <option value="M">M</option>
                                          
                                            <option value="L">L</option>
                                          
                                            <option value="XL">XL</option>
                                          
                                            <option value="XXL">XXL</option>
                                          
                                        </select>
                                    </div>
                                    <div>
                                        <a href="/pages/add-to-cart/{{  $item->id}}">
                                            <button type="submit" name="add" class="btn btn-info add-cart-button">
                                                <span>
                                                    Add to cart
                                                </span>
                                          </button>
                                        </a>
                                        </div>
                                    </div>
                                @endforeach 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact area end -->
            <style>
                .return-link-wrapper {
    margin: 82.5px 0;
}
            </style>
            {{-- @foreach ($catname as $jun) --}}
                <div class="text-center return-link-wrapper">
                    <a href="https://ashluxemerch.com/collections/t-shirts" class="btn btn-secondary btn-has-icon-before return-link">
                        <svg aria-hidden="true" focusable="false" role="presentation" style="height: 10px;" class="icon icon--wide icon-arrow-left" viewBox="0 0 20 8"><path d="M4.814 7.555C3.95 6.61 3.2 5.893 2.568 5.4 1.937 4.91 1.341 4.544.781 4.303v-.44a9.933 9.933 0 0 0 1.875-1.196c.606-.485 1.328-1.196 2.168-2.134h.752c-.612 1.309-1.253 2.315-1.924 3.018H19.23v.986H3.652c.495.632.84 1.1 1.036 1.406.195.306.485.843.869 1.612h-.743z" fill="#000" fill-rule="evenodd"></path></svg>
                        <b style="text-transform: uppercase">  Back to {{ $catname }}</b>
                     </a>
              </div>
            {{-- @endforeach --}}
            
        </main>
        <script>
            const thumbs = document.querySelector(".other").children;
            function changeImage(event){
            document.querySelector('.pro-img').src = event.children[0].src

            for (let i = 0; i < thumbs.length; i++) {
                thumbs[i].classList.remove("active");
            }
            event.classList.add("active");
            }
        </script>
@include('includes/footer')
        