<!doctype html>
<html class="no-js" lang="zxx">
   
    @include('includes/header')

        <main>
            <p></p>

            <!-- contact area start -->
            <section class="contact__area pb-100 pt-95">
                <div class="container">
                    <div class="row">
                                <div class="col-xl-3 col-md-3 col-lg-3"></div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="contact__info">
                                <h3 class="searchh3">{{ count($post) }} RESULTS FOR "{{ $search }}"</h3>
                                <form action="/search" method="GET">
                                    @csrf
                                    <div class="input-group col-xl-12 col-md-12 col-lg-12" style="flex: 0 0 50%; margin-top: -35px;">  
                                        <input type="text" name="q" value="{{ $search }}" class="form-control sub-in" placeholder="Search" autocorrect="off" autocapitalize="off">
                                        <span>
                                        <button type="submit" class="btn btn-info" style="height: 55px;" name="subscribe">
                                            <span class="newsletter__submit-text--large">Search</span>
                                        </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 col-lg-3"></div>

                    </div>
                </div>
                <p style="border-bottom: 2px solid #eee; margin-top: 100px"></p>
            </section>
            <!-- contact area end -->
            <style>
               
            </style>
                <div class="search-ans page-width">
                    @if ($post != null)
                        
                    
                    @foreach ($post as $item)
                    @foreach ($cat as $cats)
                        
                    @endforeach
                    <a href="/collections/{{ $cats->category_slug }}/{{ $item->id }}/{{ $item->product_slug }}" class="list-view-item" style="height: 100px">
                        <div class="list">
                            <div class="list-wrapper">
                                <img style="width: 150px;" class="list-image" src="{{ asset("uploads/products") }}/{{ $item['image_name'][0] }}" alt="FLAMES SOCKS">
                            </div>
                        </div>
                        <div class="list-column">
                            <div class="list-title">{{ $item->name }}</div>
                        </div>
                        <div class="list-price-column">
                        <!-- snippet/product-price.liquid -->
                            <span class="product-price">
                                <span style="font-size: 1.225em !important;" class="money" doubly-currency-usd="3000" doubly-currency-ngn="{{ $item->price }}" doubly-currency="NGN">₦{{ $item->price }}
                                </span>
                            </span>
                    </div>
                    </a>
                    @endforeach
                    @else 
                        <h2>No Product Found!</h2>
                    @endif
                </div>
    
        </main>

@include('includes/footer')
        