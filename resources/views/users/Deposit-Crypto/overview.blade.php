@extends('users.layout')
@section('pageTitle', 'Deposit Crypto')
@section('breadcrumb-first', 'Deposit Crypto')
@section('breadcrumb-second', 'Deposit Crypto')
@section('main')
<div class="blance-detail">
    <div class="main-admin">
        <div class="main-left">
            @include('users.navbar');
        </div>
        <div class="main-right bg-grey">
            <section class="px-3">
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
            </section>
            <section class="px-3">
                <div class="box-pm">
                    <h4 class="text-livear-blue">
                        Funding
                    </h4>
                    <nav>

                        <div class="nav nav-pills mt-3 btnpm-gradient" id="nav-tab" role="tablist" aria-orientation="vertical">
                            <button class=" nav-link active me-2" id="faqs-beginner" data-bs-toggle="pill" data-bs-target="#nav-beginner" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Beginner</button>
                            <button class="nav-link me-2" id="faqs-advanced" data-bs-toggle="pill" data-bs-target="#nav-advanced" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Advanced</button>
                            <button class="nav-link me-2" id="faqs-advertisers" data-bs-toggle="pill" data-bs-target="#nav-advertisers" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Advertisers</button>
                        </div>
                    </nav>


                </div>
            </section>
            <section class="px-3 pt-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active row" id="nav-beginner" role="tabpanel" aria-labelledby="faqs-beginner" tabindex="0">
                        <div class="row">
                            <div class="col-3 my-3">
                                <div class="box-pm">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <img src="http://localhost:8000/images/USDT.svg" alt="">
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                            </div>
                                        </div>
                                        <div class="badge name3"> <span>198.22</span> </div>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="heading">$200.12</h4>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <div class="quantity-wallet-box">
                                                <span><img src="http://localhost:8000/images/account_balance_wallet.png" alt="">
                                                    1</span>0
                                            </div>
                                            <div> <a class="text-black cursor-pointer" ><span class="material-symbols-outlined" data-bs-toggle="offcanvas" data-bs-target="#walletRight" aria-controls="offcanvasRight">
                                                        more_vert
                                                    </span> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 my-3">
                                <div class="box-pm">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <img src="http://localhost:8000/images/USDT.svg" alt="">
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                            </div>
                                        </div>
                                        <div class="badge name3"> <span>198.22</span> </div>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="heading">$200.12</h4>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <div class="quantity-wallet-box">
                                                <span><img src="http://localhost:8000/images/account_balance_wallet.png" alt="">
                                                    1</span>0
                                            </div>
                                            <div> <a class="text-black cursor-pointer " ><span class="material-symbols-outlined" data-bs-toggle="offcanvas" data-bs-target="#walletRight" aria-controls="offcanvasRight">
                                                        more_vert
                                                    </span> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 my-3">
                                <div class="box-pm">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <img src="http://localhost:8000/images/USDT.svg" alt="">
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                            </div>
                                        </div>
                                        <div class="badge name3"> <span>198.22</span> </div>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="heading">$200.12</h4>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <div class="quantity-wallet-box">
                                                <span><img src="http://localhost:8000/images/account_balance_wallet.png" alt="">
                                                    1</span>0
                                            </div>
                                            <div> <a class="text-black cursor-pointer"><span class="material-symbols-outlined" data-bs-toggle="offcanvas" data-bs-target="#walletRight" aria-controls="offcanvasRight">
                                                        more_vert
                                                    </span> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 my-3">
                                <div class="box-pm">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <img src="http://localhost:8000/images/USDT.svg" alt="">
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                            </div>
                                        </div>
                                        <div class="badge name3"> <span>198.22</span> </div>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="heading">$200.12</h4>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <div class="quantity-wallet-box">
                                                <span><img src="http://localhost:8000/images/account_balance_wallet.png" alt="">
                                                    1</span>0
                                            </div>
                                            <div> <a class="text-black cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#walletRight" aria-controls="offcanvasRight" ><span class="material-symbols-outlined">
                                                        more_vert
                                                    </span> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 my-3">
                                <div class="box-pm">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="icon">
                                                <img src="http://localhost:8000/images/USDT.svg" alt="">
                                            </div>
                                            <div class="ms-2 c-details">
                                                <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                            </div>
                                        </div>
                                        <div class="badge name3"> <span>198.22</span> </div>
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="heading">$200.12</h4>
                                        <div class="mt-3 d-flex justify-content-between">
                                            <div class="quantity-wallet-box">
                                                <span><img src="http://localhost:8000/images/account_balance_wallet.png" alt="">
                                                    1</span>0
                                            </div>
                                            <div> <a class="text-black cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#walletRight" aria-controls="offcanvasRight"><span class="material-symbols-outlined">
                                                        more_vert
                                                    </span> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-advanced" role="tabpanel" aria-labelledby="faqs-advanced" tabindex="0">
                        <div class="my-5 faqs-text">
                            <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                                <h6>Why has my withdrawal/deposit not arrived?</h6>
                            </span>
                        </div>
                        <div class="my-5 faqs-text">
                            <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                                <h6>How to Deposit and Withdraw on Payme?</h6>
                            </span>
                        </div>
                        <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                            <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                                <h6>What Can I Do When I Withdraw to A Wrong Address?</h6>
                            </span>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-advertisers" role="tabpanel" aria-labelledby="faqs-advertisers" tabindex="0">
                        <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                            <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                                <h6>How to Post P2P Trading Advertisements on Payme?</h6>
                            </span>
                        </div>
                        <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                            <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                                <h6>Payme P2P Merchant Policy</h6>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="offcanvas offcanvas-end wallet-offcanvas" tabindex="-1" data-bs-backdrop="false" id="walletRight" aria-labelledby="offcanvasRightLabel" style="visibility: visible;" aria-modal="true" role="dialog">
                    <div class="offcanvas-header mt-4">
                        <button type="button" class="btn-close text-reset btn-close-wallet" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column gap-2 ">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="avt-wallet bg-danger d-flex justify-content-center align-items-center text-light">
                                đ
                            </div>
                            <strong class="fw-extrabold fs-4 mt-2">
                                5,500,000
                            </strong>
                            <span class="fs-9 fw-light">
                                $200.12
                            </span>
                        </div>
                        <div class="row text-center justify-content-center mt-3">
                            <div class="col-3">
                                <button class="btn btn-light ripple-surface-dark border-dark text-center mb-2">
                                    <span class="material-symbols-outlined">
                                        arrow_upward
                                    </span>
                                </button>
                                <span class="fs-9">Withdraw</span>
                            </div>
                            
                            <div class="col-3">
                                <button class="btn btn-light ripple-surface-dark border-dark text-center mb-2">
                                    <span class="material-symbols-outlined">
                                        sync_alt
                                    </span>
                                </button>
                                <span class="fs-9">Transfer</span>
                            </div>
                            <div class="col-3 ">
                                <button class="btn btn-light ripple-surface-dark border-dark text-center mb-2">
                                    <span class="material-symbols-outlined">
                                        arrow_downward
                                    </span>
                                </button>   
                                <span class="fs-9">Deposit</span>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <ul class="nav nav-pills mb-3 nav-pills-wallet" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active fw-bolder fs-6" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Wallet 1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link fw-bolder fs-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Wallet 2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link fw-bolder fs-6" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Wallet 3</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                {{-- Wallet 1 --}}
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="p-3 d-flex flex-column gap-0">
                                        <label class="fs-4 fw-bold d-inline">Address</label>
                                        <div class="border-black border-1 icon-copy position-relative">
                                           <input readonly="readonly" onfocus="handleCopyClipboard(event)" type="text" class="rounded-2 value-copy" name="" id="" value="ASdsdvs123124963214Sgfsdrg2155654" >
                                            <span onclick="handleCopyClipboard(event)" class="material-symbols-outlined position-absolute top-0 end-0 ">
                                                content_copy
                                            </span>
                                        </div>
                                        <span class="fs-9 text-end mt-1">Wallet 1 Amount: $100 - 2,300,00 vnd</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center mt-2 gap-2">
                                        <img src="{{asset('/images/qr-wallet.png')}}" class="image-qr-wallet" alt="">
                                        <span class="fs-9 fw-700">QR Code</span>
                                    </div>

                                    <div class="p-3">
                                        <span class="fw-bold fs-3">Activity Log</span>
                                        <div class="scroll-wallet d-flex flex-column gap-3 mt-3 ">
                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_upward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-up">+ 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                {{-- Wallet 2 --}}
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="p-3 d-flex flex-column gap-0">
                                        <label class="fs-4 fw-bold d-inline">Address</label>
                                        <div class="border-black border-1 icon-copy position-relative">
                                           <input readonly="readonly" onfocus="handleCopyClipboard(event)" type="text" class="rounded-2 " name="" id="" value="ASdsdvs123124963214Sgfsdrg2155654" >
                                            <span onclick="handleCopyClipboard(event)" class="material-symbols-outlined position-absolute top-0 end-0 ">
                                                content_copy
                                            </span>
                                        </div>
                                        <span class="fs-9 text-end mt-1">Wallet 1 Amount: $100 - 2,300,00 vnd</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center mt-2 gap-2">
                                        <img src="{{asset('/images/qr-wallet.png')}}" class="image-qr-wallet" alt="">
                                        <span class="fs-9 fw-700">QR Code</span>
                                    </div>

                                    <div class="p-3">
                                        <span class="fw-bold fs-3">Activity Log</span>
                                        <div class="scroll-wallet d-flex flex-column gap-3 mt-3 ">
                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_upward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-up">+ 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                {{-- Wallet 3 --}}
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="p-3 d-flex flex-column gap-0">
                                        <label class="fs-4 fw-bold d-inline">Address</label>
                                        <div class="border-black border-1 icon-copy position-relative">
                                           <input readonly="readonly" onfocus="handleCopyClipboard(event)" type="text" class="rounded-2 " name="" id="" value="ASdsdvs123124963214Sgfsdrg2155654" >
                                            <span onclick="handleCopyClipboard(event)" class="material-symbols-outlined position-absolute top-0 end-0 ">
                                                content_copy
                                            </span>
                                        </div>
                                        <span class="fs-9 text-end mt-1">Wallet 1 Amount: $100 - 2,300,00 vnd</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center mt-2 gap-2">
                                        <img src="{{asset('/images/qr-wallet.png')}}" class="image-qr-wallet" alt="">
                                        <span class="fs-9 fw-700">QR Code</span>
                                    </div>

                                    <div class="p-3">
                                        <span class="fw-bold fs-3">Activity Log</span>
                                        <div class="scroll-wallet d-flex flex-column gap-3 mt-3 ">
                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_upward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-up">+ 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>

                                            <div class="d-flex flex-row gap-2 justify-content-between align-items-center">
                                                <div class=" rounded-circle icon-transfer d-flex justify-content-center align-items-center">
                                                    <span class="material-symbols-outlined">
                                                        arrow_downward
                                                    </span>
                                                </div>
                                                <div class="col-10 d-flex flex-column ">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9 fw-bold">Transfer</span>
                                                        <strong class="fs-9 fw-bold text-down">- 2,300,000</strong>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="fs-9">To: kzkhjs23nzcjxshfjsf...</span>
                                                        <span class="fs-9">Feb 24, 2022</span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                        </div>
                                        
                                    </div>

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