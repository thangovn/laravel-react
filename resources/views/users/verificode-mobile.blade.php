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
    <div class=" signin-page ">
        <div class="container">
            <!-- container left right -->
            <div class="signin-container col-12 row">
                <!-- left -->
                <div class="signin-modal col-sm-12    col-md-7 col-lg-6 col-xxl-4 ">

                    <div class="signin-heading">
                        <ul class="ul-list">
                            <li class=" deactive  authenticator-text">SECURITY VERIFICATION</li>
                        </ul>
                    </div>

                    <div class=" method">
                        <div class="authenticator-text">
                            <p class="active">Authenticator Code</p>
                            <p class="description">Please enter the verification code from your authenticator app below.</p>
                        </div>
                    </div>
                    <div class="signin-email  " id="signin">
                        <div class="contain-input-box">
                            <input type="text" class="input-box">
                            <input type="text" class="input-box">
                            <input type="text" class="input-box">
                            <input type="text" class="input-box">
                            <input type="text" class="input-box">
                            <input type="text" class="input-box">
                        </div>
                        <div class="action-wrapper">
                            <button class="pm-prinary sign-in-button">Submit</button>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="banner-signin col-6 ">
                    <img src="{{asset('images/logo.png')}}" alt="" class="logo-img col-4 ">
                    <img src="{{asset('images/banner-login.png')}}" alt="" class="banner-img col-12">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</html>