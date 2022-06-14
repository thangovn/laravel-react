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
    <div class=" signin-page">
        <div class="container">
            <!-- container left right -->
            <div class="signin-container col-12 row">
                <!-- left -->
                <div class="signup-modal col-sm-12    col-md-7 col-lg-6 col-xxl-4">

                    <div class="signin-heading">
                        <ul class="ul-list">
                            <li><a href="signin-email" class="deactive"> Sign In</a>
                            </li>
                            <div class="verticalline"> </div>
                            <li><a href="signup-email" class="active">Sign Up</a> </li>
                        </ul>
                    </div>
                    <div class="create-account">
                        <span class="hero-heading">Create your account</span>
                        <p class="title-heading">Mandatory fields are followed by asterisk: *</p>
                    </div>
                    <div class=" method">
                        <div class="method-text">
                            <span><a href="signup-email" class="active">Email</a></span>

                            <span class="deactive"><a href="signup-mobile">Mobile</a></span>
                        </div>
                    </div>

                    <div class="signin-form ">
                        <div class=" create-form">
                            <div class="input-wrapper ">

                                <input class="input-signup" type="text" id="user">
                                <label class="label">First name *</label>
                            </div>
                            <div class="input-wrapper ">

                                <input class="input-signup" type="text" id="user">
                                <label class="label">Name *</label>
                            </div>

                        </div>
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
                        <div class="input-wrapper">
                            <span class="material-symbols-outlined signnin-icon">
                                code
                            </span>
                            <input class="input-signin " type="text" id="user" placeholder="Referral Code">
                            <label class="label">Referral Code</label>
                        </div>
                        <div class="action-wrapper-signup">
                            <div class="checkbox  ">
                                <input type="checkbox" name="" class="">
                                <label class=" label-text" for="">I certify that I am 18 years of age or over and I accept the User Agreement and the Private Policy.</label>
                            </div>
                            <div class="">
                                <button class="pm-prinary sign-in-button">CREATE ACCOUNT</button>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-form row">
                        <div class="link-to">
                            <a href="#">Already registered?</a>
                            <a href="/user/signin">Sign In</a>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="banner-signin col-6">
                    <img src="{{asset('images/logo.png')}}" alt="" class="logo-img col-4 ">
                    <img src="{{asset('images/banner-login.png')}}" alt="" class="banner-img col-12 ">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</html>