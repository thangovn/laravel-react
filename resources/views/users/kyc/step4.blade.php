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
                        <a href="step3"><img src="{{ asset('images/arrow_forward_ios_24px.png') }}" alt=""></a>
                        <h4 class="mb-3 kyc-title-form p-2">Identity Verification</h4>
                        <h4 class="mb-3 kyc-title-subheaderform p-2">Take a Photo of ID Card</h4>
                        <form class="needs-validation"  novalidate="" action="step5">
                            <div class="row g-3">

                                <div class="col-lg-6 col-sm-12 d-flex">
                                    <div class="col-3">
                                        <div class="identity-photo-quality">
                                            <img src="{{ asset('images/image121.png') }}" alt="">
                                            <p class="text-center">Good</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="identity-photo-quality">
                                            <img src="{{ asset('images/image245.png') }}" alt="">
                                            <p class="text-center">Not cropped</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="identity-photo-quality">
                                            <img src="{{ asset('images/image246.png') }}" alt="">
                                            <p class="text-center">Not blur</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="identity-photo-quality">
                                            <img src="{{ asset('images/image247.png') }}" alt="">
                                            <p class="text-center">Not reflective</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 ">
                                    <div class="d-flex">
                                        <div class="col-6 identity-content p-1 ">
                                            <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            Government-issued
                                            
                                        </div>
                                        <div class="col-6 identity-content p-1">
                                            <img src="{{ asset('images/close_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            No black and white images
                                        </div>
                                    </div> 
                                    <div class="d-flex">
                                        <div class="col-6 identity-content p-1">
                                            <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            Original full-size, unedited documents
                                        </div>
                                        <div class="col-6 identity-content p-1">
                                            <img src="{{ asset('images/close_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            No edited or expired documents
                                        </div>
                                    </div> 
                                    <div >
                                        <div class="col-12 identity-content p-1">
                                            <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            Readable, well-lit, coloured images
                                        </div>
                                    </div> 
                                    <div>
                                        <div class="col-12 identity-content p-1">
                                            <img src="{{ asset('images/done_24px.png') }}" alt="" style="padding-right: 0.6rem">
                                            Place documents against a single-coloured background
                                        </div>
                                    </div> 
                                </div>
                                <div class="identity-upload col-lg-10 col-sm-12 col-md-12 d-flex">
                                    <div class="col-6">
                                        <input type="file" name="" id="identity-upload-front" >
                                        <label for="identity-upload-front"><img src="{{ asset('images/done_24px.png') }}" alt=""></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="file" name="" id="identity-upload-back">
                                        <label for="identity-upload-back"><img src="{{ asset('images/close_24px.png') }}" alt=""></label>
                                    </div>
                                </div>
                                <button class="btn-kyc  btn btn-primary btn-lg user-form-submit" type="submit">Continue</button>
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