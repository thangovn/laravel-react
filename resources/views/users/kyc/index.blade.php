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
                        
                        <h4 class="mb-3 kyc-title-form">Personal Information</h4>
                        <h4 class="mb-3 kyc-title-subheaderform">Identity Information</h4>
                        <form class="needs-validation" novalidate="" action="kyc/step2">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Nationality</label>
                                    <input type="text" class="form-control kyc-country px-5" id="firstName" placeholder="Nationality" value="" required="">
                                    
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label user-form-label">First Name*</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label user-form-label">Last Name*</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label user-form-label">Middle Name*</label>
                                    <input type="text" class="form-control" id="position" placeholder="Position" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid Midlle name is required.
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="lastName" class="form-label user-form-label">Date of Birth</label>
                                    <input type="date" name="dob"class="form-control" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2014-12-31">
                                    <div class="invalid-feedback">
                                        Valid date of birth is required.
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