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
            <div class="main-right bg-grey mb-4">
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
                    <div class="box-funding p-4 d-flex flex-column justify-space-between align-items-start gap-3 gap-md-4">
                        <h1 class="fs-2">Deposit Fiat </h1>

                        <div class="credit-card-fw">
                            <label for=""  class="col-12 col-sm-4 col-lg-2 text-credit-card">Transfer time:</label>
                            <strong class="col-12 col-sm-3 text-credit-card">00:15:00</strong>    
                        </div> 

                        <div class="credit-card-fw">
                            <label for="" class="col-12 col-sm-4 col-lg-2 text-credit-card">Deposit code</label>
                            <div class="col-12 col-sm-6 col-lg-5 col-xl-4 border-black border-1 icon-copy position-relative">
                                <input readonly="readonly" onfocus="handleCopyClipboard(event)" type="text" class="text-credit-card rounded-2 value-copy" name="" id="" value="#21se8w8812139210912312321" >
                                 <span onclick="handleCopyClipboard(event)" class="material-symbols-outlined position-absolute top-0 end-0 ">
                                     content_copy
                                 </span>
                             </div>
                        </div>   
                        
                        <div class="credit-card-fw">
                            <label for="" class="col-12 col-sm-4 col-lg-2 text-credit-card">You are topping up:</label>
                            <strong class="col-12 col-sm-3 text-credit-card">100,000,000 VND</strong>
                        </div>

                        {{-- box --}}
                        <div class="col-12 d-flex flex-column ">
                            <label for="" class="text-credit-card">Please transfer money using the information below</label>

                            <div class="row gap-3 box-credit-card py-2 py-md-4" >

                                <div class="col-12 d-flex flex-column flex-md-row justify-content-md-between align-items-md-center gap-2 gap-md-0 ">
                                    <label  class="fw-normal col-md-3">Transfer money to account number:</label>

                                    <div class="input-pw-credit-card col-md-4 col-lg-2 position-relative mt-2 mt-md-0">
                                        <input class="" type="password" name="" id="">
                                        <span onclick="toggleTypeInputPassword(event)" class="material-symbols-outlined position-absolute ">
                                            visibility
                                        </span>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Beneficiary's Name:</label>
                                    <span>Payme’s bank</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Beneficiary’s bank:</label>
                                    <span>Bank 1</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Amount:</label>
                                    <span>100,000,000 VND</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Detail of Payment:</label>
                                    <span>Deposit code</span>
                                </div>

                            </div>
                        </div>

                        <div class="credit-card-fw">
                            <label for="" class="col-12 col-sm-4 col-lg-2  text-credit-card">Time left to transfer: </label>
                            <strong class="col-12 col-sm-3 text-credit-card">00:12:55</strong>
                        </div>
                        <div class="btn-credit-card justify-content-center justify-content-md-end align-items-center gap-md-4 gap-2">
                                <a href="/user/deposit-fiat" class="pm-prinary px-5 btn-previous-credit-card">Previous</a>
                                <a href="/user/transfer-fiat" class="pm-prinary px-5"> Confirm</a>
                        </div>
                    </div>

                    

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
