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
                    <div class="bg-white p-4 rounded-4 shadow">
                        <a href="step2"><img src="{{ asset('images/arrow_forward_ios_24px.png') }}" alt=""></a>
                        <h4 class="mb-3 kyc-title-form">Identity Verification</h4>
                        <h4 class="mb-3 kyc-title-subheaderform">Additional Information</h4>
                        <form class="needs-validation" novalidate="" action="step4">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Country of Issue</label>
                                    <input type="text" class="form-control kyc-country px-5" id="firstName" placeholder="Vietnam " value="" required="">
                                    
                                    <div class="invalid-feedback">
                                        Valid Country of Issue is required.
                                    </div>
                                </div>
                                <h3 class="kyc-h3">Use a valid government-issued document</h3>
                                <p>
                                    Only the following documents listed below will be accepted, all other documents will be rejected.
                                </p>
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Goverment-Issued ID Card</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Number" name="kyc-id-card-number" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid Goverment-Issued ID Card is required.
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="lastName" class="form-label user-form-label">Passport</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Number" name="kyc-passport" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid passport is required.
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="lastName" class="form-label user-form-label">Driving License</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Number" name="kyc-driving-license" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid Driving License is required.
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