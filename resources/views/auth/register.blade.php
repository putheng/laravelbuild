<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register | Laravel Build</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}?v={{ time() }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}" type="text/css"/>
  </head>
<body class="be-splash-screen">
    <div class="be-wrapper be-login be-signup">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container sign-up">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="{{ asset('images/icons/logo-xx.png') }}" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                  {{ csrf_field() }}
                  <span class="splash-title pb-4">Sign Up</span>
                  <div class="form-group">
                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Username" autocomplete="off">

                    @if($errors->has('name'))
                      <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                  </div>

                  <div class="form-group">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="E-mail" autocomplete="off">
                    
                    @if($errors->has('email'))
                      <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>

                  <div class="form-group">
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="password" autocomplete="off">
                    
                    @if($errors->has('password'))
                      <p class="text-danger">{{ $errors->first('password') }}</p>
                    @endif
                  </div>

                  <div class="form-group">
                    <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
                    
                    @if($errors->has('password_confirmation'))
                      <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                  </div>
                  
                  <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary btn-xl" type="submit">Sign Up</button>
                  </div>

                  <div class="title"><span class="splash-title pb-3">Or</span></div>

                  <div class="form-group row social-signup pt-0">
                    <div class="col-6">
                      <button class="btn btn-lg btn-block btn-social btn-facebook btn-color" type="button"><i class="mdi mdi-facebook icon icon-left"></i>Facebook</button>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-block btn-social btn-google-plus btn-color" type="button"><i class="mdi mdi-google icon icon-left"></i>Google</button>
                    </div>
                  </div>

                  <div class="form-group pt-3 mb-3">
                    <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a>.</span>
                    </label>
                  </div>

                </form>
              </div>
            </div>
            <div class="splash-footer"><span>Already have an account? <a href="{{ route('login') }}">Sign In</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>