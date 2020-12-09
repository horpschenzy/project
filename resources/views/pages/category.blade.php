<!doctype html>
<html class="no-js" lang="zxx">
   
    @include('includes/header')

        <main>

            <!-- page title area start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/page-title/page-title-2.jpg">
                <div class="container cont">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>{{ $catname }}</h1>
                                <div class="page__title-breadcrumb">                                 
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> {{ $catname }}</li>
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
                <div class="container ">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class="contact__info">
                                
                                <style>
                                </style>

                                <div class="filters-toolbar-wrapper">
                                    <div class="page-width">
                                      <div class="filters-toolbar">
                                        
                                          <div class="filters-1">
                                            <span class="filters-toolbar__product-count"><b>( {{ count($catproduct) }} Products )</b></span>
                                          </div>

                                          <div class="filters">
                                            <select class="form-control" name="SortTags" id="SortTags">
                                              
                                                
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                
                                                <option value="manual">Featured</option>

                                                <option value="title-ascending">Alphabetically, A-Z</option>
                                                
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                
                                                <option value="price-ascending">Price, low to high</option>
                                                
                                                <option value="price-descending">Price, high to low</option>
                                                
                                                <option value="created-descending">Date, new to old</option>
                                                
                                                <option value="created-ascending">Date, old to new</option>
                                              
                                            </select>
                                          </div>                    
                                      </div>
                                    </div>
                                  </div>
                                <div class="img-col">
                                    @foreach ($catproduct as $item)
                                    <div class="col-div col-xl-3 col-md-12 col-lg-3">
                                        <div>
                                        <a href="/collections/{{ $catname }}/{{ $item->id }}/{{ $item->product_slug }}">
                                            <img src="{{ asset("uploads/products") }}/{{ $pics[$loop->index]['image_name'][0] }}" class="col-img col-xl-12 col-md-12 col-lg-12" alt="{{ $item->name }}">

                                            <h3 class="col-h3">{{ $item->name }}</h3>
                                            <p><b>${{ $item->price }}</b> </p>
                                        </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact area end -->
            
        </main>

@include('includes/footer')
        