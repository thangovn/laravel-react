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
                    <div class="box-funding deposit-fiat-mh p-4 d-flex flex-column justify-space-between align-items-start gap-4">
                        <h1 class="fs-2">Deposit Fiat </h1>
                        <div class="form-deposit-fiat d-flex flex-column gap-4">
                            <div class="d-flex flex-column gap-2">
                                <label class="fs-3 fw-bold d-inline">Amount</label>
                                <input type="text" class="p-2" id="formGroupExampleInput" placeholder="100.000.000">
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <label class="fs-3 fw-bold d-inline">Amount</label>
                                <div id="dropdownCurrency" data-bs-toggle="dropdown" aria-expanded="false" class="p-2 select-custom d-flex justify-content-between align-items-center" >
                                    <span class="value-option">VND</span>
                                    <span class="material-symbols-outlined">
                                        arrow_drop_down
                                    </span>
                                    <ul class="dropdown-menu option-custom" aria-labelledby="dropdownCurrency">
                                        <li class="dropdown-item" onclick="getValueOption(event)">VND</a></li>
                                        <li class="dropdown-item" onclick="getValueOption(event)">USD</a></li>
                                      </ul>
                                </div> 
                                
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <label class="fs-3 fw-bold d-inline">Deposit with:</label>
                                <div class="deposit-with-fiat me-0 ms-0 row justify-content-start align-items-center gap-4">
                                        <div class="col-lg-3 col-xl-2 position-relative p-2 select-custom ">
                                            <div id="dropdownEWallet" data-bs-toggle="dropdown" aria-expanded="false" class="d-flex justify-content-center align-items-center">
                                                <span  class="value-option py-1 fw-bold ">E.Wallet</span>
                                                <span class="material-symbols-outlined position-absolute top-0 end-0 icon-arrow-select">
                                                    arrow_drop_down
                                                </span>
                                            </div>
                                            
                                            <ul class="dropdown-menu option-custom gap-2" aria-labelledby="dropdownEWallet">
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 1</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 2</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 3</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 4</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 5</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 6</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 7</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 8</a></li>
                                                <li class="py-2 dropdown-item" onclick="getValueOption(event)">E-Wallet 9</a></li>
                                            </ul>
                                        </div> 
                                    
                                    <div class="col-lg-3 col-xl-2 position-relative p-2 select-custom d-flex justify-content-center align-items-center">
                                        <div id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" class="d-flex justify-content-center align-items-center">
                                            <span class="value-option py-1 fw-bold ">Bank Transfer</span>
                                            <span class="material-symbols-outlined position-absolute top-0 end-0 icon-arrow-select">
                                                arrow_drop_down
                                            </span>
                                        </div>
                                        <ul class="dropdown-menu option-custom" aria-labelledby="dropdownMenuLink">
                                            <li class="py-2 dropdown-item" onclick="getValueOption(event)">Bank 1</a></li>
                                            <li class="py-2 dropdown-item" onclick="getValueOption(event)">Bank 2</a></li>
                                            <li class="py-2 dropdown-item" onclick="getValueOption(event)">Bank 3</a></li>
                                            <li class="py-2 dropdown-item" onclick="getValueOption(event)">Bank 4</a></li>
                                          </ul>
                                    </div>
                                    
                                    <div class="col-lg-3 col-xl-2 p-2 select-custom d-flex justify-content-center align-items-center" >
                                        <a href="/user/withdraw-fiat" class="value-option py-1 fw-bold text-decoration-none text-dark">Credit Card</a>
                                    </div>  
                                </div>
                                
                                
                            </div>
                        </div>
                        
                       
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
