@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
        <!-- Styles -->
        <style>
            html, body {
                background-image:url("/images/tree_image.jpg");
                background-repeat:no-repeat;
                background-attachment: fixed; 
                background-size: cover;               
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                font-family:"bell MT", sans-serif;
                position: relative;
                color: #f5f5f5;
                
            }
            .form-check{
                color: black;
                margin-top: 3px;
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div class="title m-b-m text-center" style="filter:alpha(opacity=50); opacity:0.5;">
                    E-TURING
                </div>

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}



                
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="images/img-01.png" alt="IMG">
                            </div>
            
                            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <span class="login100-form-title">
                                    Member Login
                                </span>
            
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" >
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="pass" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn">
                                        Login
                                    </button>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
            
                                <div class="text-center p-t-12">
                                    <span class="txt1">
                                        Forgot
                                    </span>
                                    <a class="txt2" href="#">
                                        Username / Password?
                                    </a>
                                </div>
            
                                <div class="text-center p-t-136">
                                    <a class="txt2" href="#">
                                        Create your Account
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            
                
            <!--===============================================================================================-->	
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/tilt/tilt.jquery.min.js"></script>
                <script >
                    $('.js-tilt').tilt({
                        scale: 1.1
                    })
                </script>
            <!--===============================================================================================-->
                <script src="js/main.js"></script>
            
            </div>
        </div>
    </body>
</html>
