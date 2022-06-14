@extends('users.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
    <div class="blance-detail">
        <div class="main-admin">
            <div class="main-left">
                @include('users.navbar')
            </div>
            <div class="main-right bg-grey">
                <section class="ps-3">
                    <div class="info-user">
                        <div class="d-flex flex-column flex-lg-row">
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
               
                </section>
                <section class="px-3">
                    <div class="box-funding p-4 bg-light d-flex flex-column justify-space-between align-items-start gap-4">
                        <h1 class="fs-2">Funding </h1>

                        <div class="box-funding-text">
                            <span class="active-funding-text">Crypto</span>
                            <span>Fiat</span>
                        </div>

                        <div class="d-flex flex-row justify-content-start align-items-center gap-4 ">
                            <span class="fs-4 fw-extrabold">Funding balance</span>
                            <div data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn-eye-hidden border-grey bg-light d-flex flex-row rounded-1 justify-content-around align-items-center gap-2 py-1 px-3">
                                <span class="material-symbols-outlined ">
                                    visibility_off
                                </span>
                                <span class="fs-6 fw-bolder">   
                                    Hide
                                    Balance
                                </span>
                                
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div >
                                <strong class="fs-2 fw-extrabold">0.00023218</strong>
                                <span class="fw-extrabold fs-5 ms-2">BTC</span>
                                <span class="fw-extrabold fs-5 ms-2">~ đ 162,124.32</span>
                            </div>
                            
                          </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
