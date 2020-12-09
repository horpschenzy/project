<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')
    <title>B - Confirm Old Password</title>
  <link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
   
  <body>
<div style="width: 700px;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
          <h3>Change Password!</h3>
          <p>Fill in your Old Password below:</p>
          <form action="/admin/confirm-password/" method="POST">
            @csrf
          <input class="col-sm-12 form-control conf-old" type="password" name="password" placeholder="Old Password">
          
          <p class="errors" style="margin: 15px 0 0 -333px;">{{ $errors->first('password') }}</p>
          @if (!empty($msg))
             <p class="errors" style="margin: 15px 0 0 -270px;">The Password does not match our Records</p>
          @endif
          <div class="xs-mt-50"> 
            <a href="/admin"><button type="submit" class="btn btn-space btn-default">Cancel</button></a>
            
                <button type="submit" class="btn btn-space btn-primary">Proceed</button>
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