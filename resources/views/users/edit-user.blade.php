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
            <div class="main-right pb-5">
                <div class="content-profile">
                    <div class="info-user">
                        <div class="row">
                            <div class="col-sm-12 col-md-1 col-lg-1">
                                <div class="border-image-user">
                                    <img src="{{ asset('images/User.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-sm-5 user-row">
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
                <div class="content-edit d-flex px-4 gap-5 col-12 ">
                    <div class="container-left d-flex flex-column  gap-5 col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="card-info mb-5 d-flex flex-column justify-content-center align-items-center">
                            <span class="material-symbols-outlined icon-user-edit">
                                account_circle
                            </span>
                            <h4>Supper Admin</h4>
                            <p>admin@gmail.com</p>
                        </div>
                        <div class="edit-password  p-4  ">
                            <form class="d-flex flex-column gap-3  align-items-start">
                                <h4>Edit Password</h4>
                                <div class="input-group-edit d-flex flex-column gap-3 col-12 ">
                                    <label for="">Current Password</label>
                                    <input type="password" class="p-2">
                                </div>
                                <div class="input-group-edit d-flex flex-column gap-3 col-12">
                                    <label for="">New Password</label>
                                    <input type="password" class="p-2">
                                </div>
                                <div class="input-group-edit d-flex flex-column col-12  gap-3">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="p-2">
                                </div>
                                <button class="btn-changepassword pm-prinary  ">Change Password</button>
                        </div>
                        </form>
                    </div>
                    <div class="edit-profile col-sm-12 col-md-12 col-lg-8 p-4 pb-6 ">
                        <form class="d-flex flex-column gap-4">
                            <h4>Edit Profile</h4>
                            <div class="container-group-input row">
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12 ">
                                    <label for="">First Name</label>
                                    <input type="text" class="p-2">
                                </div>
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12 ">
                                    <label for="">Last Name</label>
                                    <input type="text" class="p-2">
                                </div>
                            </div>
                            <div class="container-group-input row ">
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12 ">
                                    <label for="">Email</label>
                                    <div class="d-flex align-items-center gap-3">
                                        <input type="text" class="p-2 col-10">
                                        <span class="material-symbols-outlined col-2 person-search-icon">
                                            person_search
                                        </span>
                                    </div>
                                </div>
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12 ">
                                    <label for="">Access Level</label>
                                    <select class="form-select p-2 " aria-label="Default select example">
                                        <option selected>Adminstrator</option>
                                        <option value="1">Customer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="container-group-input row">
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-12 col-12 ">
                                    <label for="">Department</label>
                                    <select class="form-select p-2" aria-label="Default select example">
                                        <option selected>Adminstrator</option>
                                        <option value="1">Customer</option>
                                    </select>
                                </div>

                            </div>
                            <div class="container-group-input row ">
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12 ">
                                    <label for="">Location</label>
                                    <input type="password" class="p-2 col-8"
                                        placeholder="123 Nguyen Hue Str., Dict. 1, HCMC., Vietnam">
                                </div>
                                <div class="input-group-edit d-flex flex-column gap-3 col-md-6 col-12">
                                    <label for="">Language</label>
                                    <select class="form-select p-2 " aria-label="Default select example">
                                        <option selected>Vietnamese</option>
                                        <option value="1">UnitedState</option>
                                    </select>
                                </div>
                            </div>
                            <div class="container-group-input row ">
                                <div class="input-group-edit col-12 d-flex flex-column gap-3  ">
                                    <label for="">Profile Image</label>
                                    <input type="file" id="upload" class="custom-file-input  col-md-12 col-12"
                                        placeholder="Upload Avatar">
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-end align-items-center gap-3 check-box-group col-md-6 col-12">
                                <label for="">Mobile Access:</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Enable Now</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Disable</label>
                            </div>
                            <div
                                class="d-flex justify-content-end align-items-center gap-3  check-box-group col-md-6 col-12">
                                <label for="">Browser Extension Access:</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Enable Now</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Disable</label>
                            </div>

                            <div class="mt-2">
                                <button class="pm-prinary sign-in-button-save-changes">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
