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
                        <div class="d-flex flex-row align-items-center gap-3">
                            <span class="material-symbols-outlined text-success">
                                check_circle
                                </span>
                            <h1 class="fs-2">Deposit has been finished </h1>
                        </div>

                        <div class="credit-card-fw">
                            <label for="" class="col-12 col-sm-4 col-lg-2 text-credit-card">Deposit code</label>
                            <div class="col-12 col-sm-6 col-lg-5 col-xl-4 border-black border-1 icon-copy position-relative">
                                <input readonly="readonly" onfocus="handleCopyClipboard(event)" type="text" class="value-copy text-credit-card rounded-2 " name="" id="" value="#21se8w8812139210912312321" >
                                 <span onclick="handleCopyClipboard(event)" class="material-symbols-outlined position-absolute top-0 end-0 ">
                                     content_copy
                                 </span>
                             </div>
                        </div>   
                        
                        <div class="credit-card-fw">
                            <label for="" class="text-credit-card me-md-4">Your trade of:</label>
                            <div class="col-12 col-sm-3 col-lg-3 col-xl-2 border-black border-1 icon-copy position-relative">
                                <input readonly="readonly" type="text" class="text-credit-card p-2 rounded-2 value-copy text-md-center " name="" id="" value="100,00,000" >
                             </div>
                            <strong class="col-12 col-sm-1 text-credit-card text-md-center">with</strong>
                            <div class="col-12 col-sm-3 col-lg-3 col-xl-2 border-black border-1 icon-copy position-relative">
                                <input readonly="readonly" type="text" class="text-credit-card p-2 rounded-2 value-copy text-md-center" name="" id="" value="Payme’s Bank" >
                             </div>
                            <strong class="col-12 col-sm-3 col-lg-3 text-credit-card text-md-center">has been finished</strong>
                        </div>

                        {{-- box --}}
                        <div class="col-12 d-flex flex-column ">
                            <label for="" class="text-credit-card">Please transfer money using the information below</label>

                            <div class="row gap-3 box-credit-card py-2 py-md-4" >
                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Status:</label>
                                    <span>Finished</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Amount to be paid:</label>
                                    <span>100,000,000VND</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Deatil of Payment:</label>
                                    <span>Deposit Code</span>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Payment Method:</label>
                                    <span>Bank Transfer</span>
                                </div>

                            </div>

                            <div class="row gap-3 box-credit-card py-2 py-md-4" >
                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Time:</label>
                                    <div class="d-flex gap-5 col-lg-6 justify-content-between">
                                        <span>YYYY/MM/DD</span>
                                        <span>00:00:00</span>
                                        <span>+0700</span>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-md-row justify-content-md-between gap-1 align-items-center">
                                    <label for="">Last seen:</label>
                                    <span>a few seconds ago</span>
                                </div>


                            </div>
                        </div>

                        <div class="btn-credit-card justify-content-center justify-content-md-end align-items-center gap-md-4 gap-2">
                                <a href="/user/withdraw-fiat" class="pm-prinary px-5 btn-previous-credit-card">Previous</a>
                                <a href="/user/transfer-fiat" class="pm-prinary px-5"> Confirm</a>
                        </div>
                    </div>

                    

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
