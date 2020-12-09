<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')

  @include('admin/includes/header')

  @include('admin/includes/sidebar')
   
  <body>
  <div class="be-content">
    <div class="page-head">
      <h2 class="page-head-title">My Profile</h2>
      <ol class="breadcrumb page-head-nav">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ol>
    </div>
    <div class="main-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="create-cat" style="margin: 20px;">
              <a href="/admin/confirm-password">
                  <button class="btn btn-info">
                      <b><i class="icon mdi mdi-plus"></i></b> Change Password
                  </button>
              </a>
          </div>
            <div class="panel-heading panel-heading-divider">Your Information<span class="panel-subtitle">To change your Password. Click the button beside</span></div>
            <div class="panel-body">
                @foreach ($user as $item) 
              <form action="#" novalidate="" class="form-horizontal group-border-dashed">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-6">
                    <input type="text" data-mask="date" name="name" value="{{ $item->name }}" placeholder="Name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Description"  value="{{ $item->email }}" name="description" class="form-control">
                  </div>
                </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  @include('admin/includes/footer')
    
  @include('admin/includes/footer')
  @else
  <script>window.location="/admin/login"</script>
  @endif
  </body>
</html>