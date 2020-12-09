@if (Auth::user()->user_type == 'admin')
@include('admin/includes/header')
@include('admin/includes/sidebar')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Products
           
        </h2>
        <ol class="breadcrumb page-head-nav">
          <li><a href="#">Home</a></li>
          <li class="active">Products</li>
        </ol>
      </div>
       <style>
           
       </style>
        <div class="main-content container-fluid">
            <div class="create-cat">
                <a href="/admin/add-products">
                    <button class="btn btn-info">
                        <b><i class="icon mdi mdi-plus"></i></b> Create Products
                    </button>
                </a>
            </div>
            @if (session()->has('msg'))
            <div id="catAdded" class="gritter-main-wrapper success-alert alert">
                <div id="gritter-item-1" class="gritter-item-wrapper color success" style="" role="alert">
                <div class="gritter-item"><div class="gritter-content gritter-without-image">
                    <a class="gritter-close"  id="catAdded" tabindex="1">Close Notification</a>
                    <span class="gritter-title">Success</span>
                    <p>Category Added Successfully</p>
                    </div>
                </div>
                </div>
            </div>
            @endif
            @if (session()->has('mssg'))
            <div id="catDeleted" class="gritter-main-wrapper success-alert alert">
                <div id="gritter-item-1" class="gritter-item-wrapper color success" style="" role="alert">
                <div class="gritter-item"><div class="gritter-content gritter-without-image">
                    <a class="gritter-close"  id="catDeleted" tabindex="1">Close Notification</a>
                    <span class="gritter-title">Success</span>
                    <p>Category Deleted Successfully</p>
                    </div>
                </div>
                </div>
            </div>
            @endif
            @if (session()->has('msag'))
                <div id="catUpdated" class="gritter-main-wrapper success-alert alert">
                    <div id="gritter-item-1" class="gritter-item-wrapper color success" style="" role="alert">
                    <div class="gritter-item"><div class="gritter-content gritter-without-image">
                        <a class="gritter-close"  id="catUpdated" tabindex="1">Close Notification</a>
                        <span class="gritter-title">Success</span>
                        <p>Category Updated Successfully</p>
                        </div>
                    </div>
                    </div>
                </div>
            @endif
            
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="widget widget-tile" style="padding: 0px !important; background-color: #eee !important">
                        {{-- @foreach ($pics as $p) --}}
                        @foreach ($product as $item)
                            <div class="col-xs-12 col-md-3 col-lg-3">
                                <div class="tools dropdown drop"> 
                                    <a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle" style="color: #7b7b7b" aria-expanded="false">
                                        <span class="icon mdi mdi-more-vert"></span></a>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <div class="cat-action">
                                            <li><a href="/admin/edit-category/{{ $item->id }}">
                                                 <button class="btn btn-success cat-but">
                                                     <b><i class="icon mdi mdi-edit"></i></b>Edit
                                                 </button>
                                             </a>
                                            </li>

                                            <li><form action="/admin/category/{{ $item->id }}" method="POST" style="float: right" class="cat-but">
                                                @csrf
                                                 <button class="btn btn-danger cat-but">
                                                     <b><i class="icon mdi mdi-delete"></i></b>Delete
                                                 </button>
                                             </form></li>
                                         </div>
                                    </ul>
                                  </div>
                                  {{-- {{ dd($pics)}} --}}
                                       {{-- @foreach($p['image_name'] as $value) --}}
                                        <img src="{{ asset('/uploads/products/') }}/{{ $pics[$loop->index]['image_name'][0] }}" class="col-xs-12 col-md-3 col-lg-3 cat-img" alt="">  
                                       {{-- {{ dd($p) }} --}}
                                        {{-- @endforeach --}}
                                  
                                 
                                {{-- <h3 class="cat-title">{{ $item->category_name }}</h3> --}}
                                
                            </div>
                        @endforeach
                    {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
</div>

@include('admin/includes/footer')
@else
<script>window.location="/admin/login"</script>
@endif