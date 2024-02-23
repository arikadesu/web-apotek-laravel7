<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Silent Hill Pharmacy</title>
<!-- Custom fonts for this template-->
<link href="{{ asset('asset/vendor/fontawesomefree/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{ asset('asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
<style>
    .form-group {
        margin-bottom: 10px; /* Adjust the spacing here */
    }
    .logo-container {
        text-align: center;
        margin-top: 10px; /* Adjust the margin-top for the image */
    }
    .login-form {
        margin-top: 5px; /* Adjust the margin-top for the login form */
    }
</style>
</head>
<body style="background-color: #1e3148;">
<div class="container">
    <!-- Logo BSI di tengah dengan ukuran yang lebih besar -->
    <div class="logo-container">
        <img src="{{ asset('asset/img/logo_bsi.png')}}" width="450px" height="450px">
    </div>

    <!-- Login Form -->
    <div class="row justify-content-center login-form">
        <div class="col-xl-5 col-lg-12 col-md-9">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-light-900 mb-4">Sistem Informasi Apotek</h1>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="currentpassword">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 offset-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-12 offset-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('asset/js/sb-admin-2.min.js')}}"></script>
</body>
</html>