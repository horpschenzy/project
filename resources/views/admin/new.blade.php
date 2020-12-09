<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')
    <title>N - New Password</title>
  <link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
   <link rel="shortcut icon" href="/assets/assets/img/logo-fav.png" type="image/x-icon">
  <body>
<div style="width: 700px;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
          <h3>New Password!</h3>
          <p>Fill in your New Password below:</p>

          <form action="/admin/new-password" method="POST">
            @csrf
            @method('PATCH')
          <input type="password" class="col-sm-12 form-control" style="margin-bottom: 20px;" name="password" placeholder="New Password">
          <p class="errors" style="margin: 15px 0 0 -333px;">{{ $errors->first('password') }}</p>
          
          <input type="password" class="col-sm-12 form-control conf-old" name="confPass" placeholder="Confirm Password">

          <p class="errors" style="margin: 15px 0 0 -333px;">{{ $errors->first('confPass') }}</p>

          <div class="xs-mt-50"> 
            <a href="/admin"><button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button></a>

            <button type="submit" data-dismiss="modal" class="btn btn-space btn-success">Proceed</button>
          </form>
          </div>
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
  
  @include('admin/includes/footer')
    
  @include('admin/includes/footer')
  @else
  <script>window.location="/admin/login"</script>
  @endif
  </body>
</html>