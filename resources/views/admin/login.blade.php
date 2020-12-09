<link rel="stylesheet" type="text/css" href="/assets/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
<link rel="stylesheet" type="text/css" href="/assets/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>

<link rel="stylesheet" href="/assets/assets/css/style.css" type="text/css"/>
<title>Login</title>
<div class="be-wrapper be-login">
    <div class="be-content" style="margin-left: 0px !important;">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading">
                <img src="/assets/assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img">
                <span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="panel-body">
              <form action="/admin/login" method="POST">
                @if (session()->has('msg'))
                <div class="btn btn-danger login-error" style="margin-bottom: 30px;">
                    The password or the Email is not Correct
                </div>
            @endif
                @csrf
                <div class="form-group">
                  <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                  <p class="errors">{{ $errors->first('email') }}</p>
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" value="{{ old('email') }}" placeholder="Password" class="form-control">
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
                  <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><span>Don't have an account? <a href="/admin/register">Sign Up</a></span></div>
        </div>
      </div>
    </div>
  </div>

@include('admin/includes/footer')
