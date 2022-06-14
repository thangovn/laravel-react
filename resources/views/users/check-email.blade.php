<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        Payme- @yield('pageTitle')
    </title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styleclient.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nhi.css') }}" rel="stylesheet" />

</head>

<body>
    <div class=" signin-page ">
        <div class="container">
            <!-- container left right -->
            <div class="signin-container col-12 row">
                <!-- left -->
                <div class="signin-modal col-sm-12    col-md-7 col-lg-6 col-xxl-4 ">
                    <div class="back-arrow">
                        <span class="material-symbols-outlined">
                            keyboard_backspace
                        </span>
                        <span>Back</span>
                    </div>
                    <div class="authenticator-text">
                        <div class="bg-inbox">
                            <span class="material-symbols-outlined  inbox-icon">
                                inbox
                            </span>
                        </div>
                        <p class="active">Check Your Email</p>
                        <p class="description">We have sent a password recover
                            instructions to your email.</p>
                    </div>
                    <div class="signin-form " id="signin">
                        <div class="action-wrapper-check-email">
                            <a href="/user/new-password" class="pm-prinary sign-in-button">OPEN EMAIL</a>
                            <p class="description">Skip, I’ll confirm later</p>
                        </div>
                    </div>
                    <div class="bottom-form-check-email row">
                        <div class="link-to">
                            <a href="#">Did not receive the email? Check your spam filter
                                or
                                <span class="active">
                                    try another email address
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="banner-signin col-5 ">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="logo-img col-4 ">
                    <img src="{{ asset('images/banner-login.png') }}" alt="" class="banner-img col-12">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>
