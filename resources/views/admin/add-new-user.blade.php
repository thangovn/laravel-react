@extends('admin.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<div class="blance-detail">
    <div class="main-admin">
        <div class="main-left">
            @include('admin.navbar');
        </div>
        <div class="main-right">
            <div class="content-profile" style="padding-bottom:0px;">
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

            </div>
            <section class="mx-4 mb-5 user-form">
                <div class="bg-white p-4 rounded-4 shadow">
                    <h4 class="mb-3 user-title-form">Add New User</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label user-form-label">Nick Name*</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Nick Name" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label user-form-label">Full Name*</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Full Name" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label user-form-label">Position*</label>
                                <input type="text" class="form-control" id="position" placeholder="Position" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label user-form-label">Role*</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Role" value="" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="username" class="form-label user-form-label">Date of Birth*</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">/</span>
                                    <input type="date" class="form-control" id="username" placeholder="Username" required="">
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        <div class="row g-3 my-5">
                        <h4 class="mb-3 user-title-form-sub">Contact infomation *</h4>
                        <div class="col-6">
                                <label for="email" class="form-label user-form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                                    <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="address" class="form-label user-form-label">Phone Number*</label>
                                <input type="text" class="form-control" id="address" placeholder="Phone Number" required="">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label user-form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address">
                                <span class="text-muted">(Street address, P.O box, Apartment, Floor, Unit, Building, etc)</span>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label user-form-label">City*</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">City</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label user-form-label">District*</label>
                                <select class="form-select" id="state" required="">
                                    <option value="">Disctrict</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label user-form-label">Zipcode*</label>
                                <input type="text" class="form-control" id="zip" placeholder="Zipcode*" required="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                            <div class="col-12">
                            <label for="zip" class="form-label user-form-label">Comments</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                                </div>
                            </div>
                        </div>

                        <button class="w-100 btn btn-primary btn-lg user-form-submit" type="submit">Save</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection