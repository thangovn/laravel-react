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
            <div class="signin-container col-12 row">
                <!-- left -->
                <div class="signin-modal col-sm-12 col-md-7 col-lg-6 col-xxl-4 padding-new">
                    <div class="logo-signin"><a href="/"> <img src="{{asset('images/logo.png')}}" alt="" class="logo-img col-4 "></a></div>
                    <div class="back-arrow">
                        <span class="material-symbols-outlined">
                            keyboard_backspace
                        </span>
                        <span>Back</span>
                    </div>
                    <div class="authenticator-text">
                        <p class="active"> Reset Password</p>
                        <p class="description">Enter the email associated with your account and we’ll send an
                            email with instructions to reset your password.</p>
                    </div>
                    <div class="signin-form " id="signin">

                        <div class="input-wrapper">
                            <span class="material-symbols-outlined signnin-icon">
                                mail
                            </span>
                            <input class="input-signin" type="text" id="user" placeholder="Email address....">
                            <label class="label">Email</label>
                        </div>
                        <div class="action-wrapper">

                            <a class="pm-prinary sign-in-button" href="/admin/check-email">Submit</a>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="banner-signin col-6 ">
                    <img src="{{asset('images/banner-signinadmin.png')}}" alt="" class="banner-img-admin ">
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</html>