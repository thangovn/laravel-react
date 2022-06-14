<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        Payme- @yield('pageTitle')
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleclient.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nhi.css') }}" rel="stylesheet" />

</head>

<body>
    <div class=" signin-page-admin ">
        <div class="container">
            <!-- container left right -->
            <div class="signin-container col-12 d-flex justify-content-between">
                <!-- left -->
                <div class="signin-modal col-sm-12  col-md-7 col-lg-6 col-xxl-4 ">
                <a href="/"><img style="width: 100%;" src="{{asset('images/logo.png')}}" alt="" class="logo-img col-4 "></a>
                    <div class="signin-heading">
                        
                        <ul class="ul-list">
                            <li class=" active"><a href="signin-email" class=" active">Sign In</a>
                            </li>
                        </ul>
                    </div>

                    <div class="signin-form " id="signin">

                        <div class="input-wrapper">
                            <span class="material-symbols-outlined signnin-icon">
                                mail
                            </span>
                            <input class="input-signin" type="text" id="user" placeholder="Email address....">
                            <label class="label">Email</label>
                        </div>
                        <div class="input-wrapper">
                            <span class="material-symbols-outlined signnin-icon">
                                lock
                            </span>
                            <input class="input-signin " type="password" id="user" placeholder="Password.....">
                            <label class="label">Password</label>
                        </div>

                        <div class="action-wrapper">
                            <div class="checkbox ">
                                <input type="checkbox" name="" class="">
                                <label class=" label-text" for="">Keep me Signed in on this computer</label>
                            </div>
                            <div class="">
                                <a href="/admin" class="pm-prinary sign-in-button">SIGN IN</a>
                            </div>
                        </div>
                    </div>
                    <div class=" button-group">
                        <button class="pm-prinary connect">Connect with Binance account</button>
                        <p class="opacity description">Connect with other cryptocurrency trading platform</p>

                    </div>
                    <div class="bottom-form row">
                        <div class="link-to">
                            <a href="/admin/reset-password">Forgot your password?</a>
                            <a href="#">No account yet?</a>
                            <a href="/admin/signin">Privacy Poilicy</a>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="banner-signin col-5  ">
                    <img src="{{asset('images/banner-signinadmin.png')}}" alt="" class="banner-img-admin ">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</html>