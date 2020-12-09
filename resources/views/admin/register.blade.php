<link rel="stylesheet" type="text/css" href="/assets/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
<link rel="stylesheet" type="text/css" href="/assets/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>

<link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
<title>Register</title>
<link rel="shortcut icon" href="/assets/assets/img/logo-fav.png" type="image/x-icon">
<div class="be-wrapper be-login">
    <div class="be-content" style="margin-left: 0px !important;">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading">
                <img src="/assets/assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img">
                <span class="splash-description">Please fill all Fields.</span>
            </div>
            <div class="panel-body">
              <form action="/admin/register" method="POST">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                    <p class="errors">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                    <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                    <p class="errors">{{ $errors->first('email') }}</p>
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                  <p class="errors">{{ $errors->first('password') }}</p>
                </div>
                <div class="form-group row login-tools">
                  <div class="col-xs-6 login-remember">
                    <div class="be-checkbox">
                      <input type="checkbox" name="remember" id="remember">
                      <label for="remember">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
                </div>
                <div class="form-group login-submit">
                  <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Register Me</button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><span>Already have an account? <a href="/admin/login">Sign In</a></span></div>
        </div>
      </div>
    </div>
  </div>

@include('admin/includes/footer')
