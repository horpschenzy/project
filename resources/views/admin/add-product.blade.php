<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')

  @include('admin/includes/header')

  @include('admin/includes/sidebar')
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/daterangepicker/css/daterangepicker.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/select2/css/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="/assets/assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
  <link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
</head>
  <body>
  <div class="be-content">
    <div class="page-head">
      <h2 class="page-head-title">Add a Product</h2>
      <ol class="breadcrumb page-head-nav">
        <li><a href="#">Home</a></li>
        <li>Add Product</li>
      </ol>
    </div>
    <div class="main-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading panel-heading-divider">Add Product<span class="panel-subtitle">Different input mask types</span></div>
            <div class="panel-body">
              <form action="/admin/products" method="POST" enctype="multipart/form-data" class="form-horizontal group-border-dashed">
                @csrf
                <div class="form-group">
                  <label class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-6">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                    <p class="errors">{{ $errors->first('name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Description" name="description" value="{{ old('description') }}" class="form-control">
                    <p class="errors">{{ $errors->first('description') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category Title</label>
                  <div class="col-sm-6">
                    <select name="category_id" class="form-control">
                      <option readonly="readonly" disabled>Select a Category</option>
                      @foreach ($getcat as $item)
                          <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                      @endforeach
                    </select>
                    <p class="errors">{{ $errors->first('category_id') }}</p>
                </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Price</label>
                  <div class="col-sm-6">
                    <input type="number" name="price" placeholder="Price" value="{{ old('price') }}" class="form-control">
                    <p class="errors">{{ $errors->first('price') }}</p>
                  </div> 
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">First Image</label>
                  <div class="col-sm-6">
                    <input type="file" multiple required class="form-control" name="image_name[]" value="{{ old('image_name') }}">
                    <p class="errors">{{ $errors->first('image_name') }}</p>
                  </div>
                </div>
                {{-- <div class="form-group">
                  <label class="col-sm-3 control-label">Second Image</label>
                  <div class="col-sm-6">
                    <input type="file"  class="form-control" name="image_name2" value="{{ old('image_name') }}">
                    <p class="errors">{{ $errors->first('image_name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Third Image</label>
                  <div class="col-sm-6">
                    <input type="file"  class="form-control" name="image_name3" value="{{ old('image_name') }}">
                    <p class="errors">{{ $errors->first('image_name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Forth Image</label>
                  <div class="col-sm-6">
                    <input type="file"  class="form-control" name="image_name4" value="{{ old('image_name') }}">
                    <p class="errors">{{ $errors->first('image_name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Fifth Image</label>
                  <div class="col-sm-6">
                    <input type="file"  class="form-control" name="image_name5" value="{{ old('image_name') }}">
                    <p class="errors">{{ $errors->first('image_name') }}</p>
                  </div>
                </div>  --}}
                
                <div class="text-center col-md-12">
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
              </form>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <script src="/assets/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="/assets/assets/js/main.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
  <script src="/assets/assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
  @include('admin/includes/footer')
  @else
  <script>window.location="/admin/login"</script>
  @endif
  <script src="/assets/assets/lib/dropzone/dist/dropzone.js" type="text/javascript"></script>

  </body>
</html>