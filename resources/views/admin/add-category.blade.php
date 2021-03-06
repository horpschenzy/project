<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')

  @include('admin/includes/header')

  @include('admin/includes/sidebar')
   
  <body>
  <div class="be-content">
    <div class="page-head">
      <h2 class="page-head-title">Add Category</h2>
      <ol class="breadcrumb page-head-nav">
        <li><a href="#">Home</a></li>
        <li>Add Category</li>
      </ol>     
    </div>
    <div class="main-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading panel-heading-divider">Masks Types<span class="panel-subtitle">Different input mask types</span></div>
            <div class="panel-body">
              <form action="/admin/add-category" method="POST" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category Name</label>
                  <div class="col-sm-6">
                    <input type="text" data-mask="date" name="category_name" placeholder="Category Name" value="{{ old('category_name') }}" class="form-control">
                    <p class="errors">{{ $errors->first('category_name') }}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category Image</label>
                  <div class="col-sm-6">
                    <input type="file" name="category_image"  value="{{ old('category_image') }}" class="form-control">
                    <p class="errors">{{ $errors->first('category_image') }}</p>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Category Description</label>
                    <div class="col-sm-6">
                      <textarea type="text" placeholder="Category Description"  cols="10" name="category_description"  value="{{ old('category_description') }}" class="form-control"></textarea>
                      <p class="errors">{{ $errors->first('category_description') }}</p>
                    </div>
                </div>
                <div class="category-button">
                    <button class="btn btn-success category" type="submit">Add Category</button>
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

 
    
    
  @include('admin/includes/footer')
  @else
  <script>window.location="/admin/login"</script>
  @endif
  <script src="/assets/assets/lib/dropzone/dist/dropzone.js" type="text/javascript"></script>

  </body>
</html>