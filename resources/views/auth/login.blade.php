{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
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
</div>

--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/color-01.css') }}">
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row" style="box-shadow: 0px 5px 5px 0px rgba(196,196,196,0.45);
                                    -webkit-box-shadow: 0px 5px 5px 0px rgba(196,196,196,0.45);
                                    -moz-box-shadow: 0px 5px 5px 0px rgba(196,196,196,0.45);">

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img src="{{ asset('user/assets/images/gragefarm-logo.png') }}" alt="mercado"></a>
                        </div>

                        <div class="wrap-search center-section">

                        </div>

                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart" style="position: relative; left: 70%;">
                                <a href="#" class="link-direction">
                                    <div class="left-info">
                                        <button type="button" class="btn" style="background-color: #00726c; width: 100px; color: #fff;"><a href="{{route('register')}}" style="color: #fff">Daftar</a></button>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </header>

    <main id="main">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">Masuk</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h2 class="form-title">Log in</h2>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email</label>
                                        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password</label>
                                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                        </label>
                                        <a class="link-function left-position" href="#" title="Forgotten password?">Lupa password?</a>
                                    </fieldset>
                                    <input type="submit" class="btn form-control" value="Masuk" name="submit" style="background-color: #00726c; height: 40px">
                                    <span style="display: flex; justify-content: center; margin-top: 20px;">Atau</span>
                                    <button type="submit" class="btn form-control" style="background-color: #fff; border: 1px solid lightgray; height: 40px; margin-top: 15px;"><a href="#" style="display: flex; justify-content: center; gap: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google">
                                                <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                                                <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                                                <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                                                <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                                            </svg>Google</a></button>
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div>
    </main>

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2020 Gragefarm All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('user/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('user/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('user/assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('user/assets/js/functions.js') }}"></script>
</body>

</html>