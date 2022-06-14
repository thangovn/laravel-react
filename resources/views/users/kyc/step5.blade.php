@extends('admin.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<div class="blance-detail">
    <div class="main-admin" >
        <div class="main-left">
            @include('users.navbar');
        </div>
        <div class="main-right">
            <div class="content-profile">
                <div class="info-user">
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <div class="border-image-user">
                                <img src="{{ asset('images/User.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5 user-row">
                            <strong>user*******@gmail.com</strong><br>
                            <span>Last login time: 13:00 - 2022/02/11</span><br>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 user-row ">
                            <span>User ID: ********</span><br>
                            <span>IP Address: AB126537</span><br>

                        </div>
                    </div>
                </div>

                <!--Content-->
                <section class="mx-4 mb-5 user-form">
                    <div class="bg-white p-5 rounded-4 shadow">
                            <a href="step4"><img src="{{ asset('images/arrow_forward_ios_24px.png') }}" alt=""></a><h4 class="mb-3 kyc-title-form p-2">Identity Verification</h4>
                        <h4 class="mb-3 kyc-title-subheaderform p-2">Take a selfie  </h4>
                        <form class="needs-validation" novalidate="" action="step6">
                            <div class="row g-3">
                                <div class="selfie-upload d-flex justify-content-center">
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3 text-center">
                                        <div class="selfie-box text-center">
                                            <img src="{{ asset('images/camera.png') }}" alt="">
                                                <div style="font-weight:800;color:#4C4C4C;font-size:1.2rem;margin-top:1.2rem;">Take a Selfie</div>
                                        </div>
                                        <input type="file" name="" id="selfie-upload-front">
                                        <label for="selfie-upload-front" class="selfie-upload-front">Upload Photo </label>
                                    </div>
                                </div>
                                <div class="col-12 selfie-content">
                                    <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                    Take a selfie of yourself with a neutral expression
                                </div>
                                <div class="col-12 selfie-content">
                                    <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                    Make sure your whole face is visible, centred, and your eyes are open
                                </div>
                                <div class="col-12 selfie-content">
                                    <img src="{{ asset('images/close_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                    Do not crop your ID or use screenshots of your ID
                                </div>
                                <div class="col-12 selfie-content">
                                    <img src="{{ asset('images/close_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                    Do not hide or alter parts of your face (No hats/beauty images/filters/headgear)
                                </div>
                                <button class=" btn-kyc  btn btn-primary btn-lg user-form-submit" type="submit">Continue</button>
                            </div>
                            
                        </form>
                        
                    </div>
                </section>
                <!--End content-->
            </div>
        </div>
    </div>
</div>
@endsection       