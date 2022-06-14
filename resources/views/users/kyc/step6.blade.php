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
                        <a href="step5"><img src="{{ asset('images/arrow_forward_ios_24px.png') }}" alt=""></a>
                        <form class="needs-validation"  novalidate="" action=" ">
                            <div class="row g-3">
                                <div class="selfie-upload d-flex justify-content-center">
                                    <div class="col-4 col-sm-4 col-lg-3 text-center">
                                        <img src="{{ asset('images/image122.png') }}" alt="">
                                        <h2>Under Review</h2>
                                        <p>You will receive an email or mobile once verification is complete.</p>
                                        <p>Estimated completion date: 2022-05-08(UTC)</p>
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