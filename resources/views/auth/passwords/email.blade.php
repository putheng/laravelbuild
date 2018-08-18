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
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container forgot-password">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header"><img class="logo-img" src="{{ asset('images/icons/logo-xx.png') }}" alt="logo" width="102" height="#{conf.logoHeight}"><span class="splash-description">Forgot your password?</span></div>
            <div class="card-body">
              <form method="POST" action="{{ route('password.request') }}">
                @csrf
                <p>Don't worry, we'll send you an email to reset your password.</p>

                <div class="form-group pt-4">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Your Email" autocomplete="off">
                  
                  @if($errors->has('email'))
                      <p class="text-danger">{{ $errors->first('email') }}</p>
                  @endif
                </div>

                <p class="pt-1 pb-4">Don't receive an email? <a href="">Resend</a>.</p>

                <div class="form-group pt-1">
                  <button class="btn btn-block btn-primary btn-xl" type="submit">
                    Send Password Reset Link
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer">© {{ date('Y') }} LaravelBuild Ltd.</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>