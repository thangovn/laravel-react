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

                </div>
                <!-- ROLE -->
                <section class="mx-4 mb-5 pb-5 user-form">
                    <div class="bg-white p-4 rounded-4">
                        <h4 class="mb-3 user-title-form">Permissions</h4>
                        <div class="d-flex justify-content-end bd-highlight mb-3">
                            <button type="button" class="btn pm-btn-gradient"><span class="d-flex align-items-center">Add
                                    New
                                    <span class="material-symbols-outlined">
                                        add
                                    </span></span></button>

                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Module</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Add</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Create User</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." checked /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." checked /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." checked /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." checked /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." checked /></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>KYC management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Wallet management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Create User</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>KYC management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Wallet management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Create User</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>KYC management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Wallet management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Create User</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>KYC management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Wallet management</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Create User</td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                            aria-label="..." /></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </section>
                <<<<<<< HEAD=======</div>

                    >>>>>>> main
            </div>
        </div>
    @endsection
