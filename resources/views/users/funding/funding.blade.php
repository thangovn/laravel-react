@extends('users.layout')
@section('pageTitle', 'Funding')
@section('breadcrumb-first', 'Funding')
@section('breadcrumb-second', 'Funding')
@section('main')
<div class="blance-detail">
    <div class="main-admin">
        <div class="main-left">
            @include('users.navbar');
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
                <div class="box-funding p-4 bg-light d-flex flex-column justify-space-between align-items-start gap-4 funding-header">
                    <h1 class="fs-2">Funding </h1>

                    <div class="box-funding-text nav nav-tabs">
                        <a class="active-funding-text nav-link active " data-bs-toggle="pill" data-bs-target="#funding-t-c" role="tab" aria-controls="funding-t-c" aria-selected="true">Crypto</a>
                        <a class="active-funding-text nav-link" data-bs-toggle="pill" data-bs-target="#funding-t-f" type="button" role="tab" aria-controls="funding-t-f" aria-selected="true">Fiat</a>
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
                        <div>
                            <strong class="fs-2 fw-extrabold">0.00023218</strong>
                            <span class="fw-extrabold fs-5 ms-2">BTC</span>
                            <span class="fw-extrabold fs-5 ms-2">~ đ 162,124.32</span>
                        </div>

                    </div>

                </div>
            </section>
            <section class="p-3 mb-5">

            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="funding-t-c" role="tabpanel" aria-labelledby="funding-t-c">
            <table class="table table-striped table-borderless border-0 table-funding">
                    <thead>
                        <tr>
                            <th>Coin</th>
                            <th>Balance</th>
                            <th>BTC Value</th>
                            <th>
                                <div class="row">
                                    <div class="col-6">Action</div>
                                    <div class="col-6 text-right">  <input class="form-check-input mx-2" type="checkbox" id="hide-balances" name="option1" value="something" >Hide 0 Balances</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/BTC.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">BTC</p>
                                        <p class="text-muted mb-0">Bitcoin</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                    <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/ETH.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">ETH</p>
                                        <p class="text-muted mb-0">Ethereum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/BNB.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">BNB</p>
                                        <p class="text-muted mb-0">BNB</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/BCH.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">BCH</p>
                                        <p class="text-muted mb-0">Bitcoin Dash</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/LTC.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">LTC</p>
                                        <p class="text-muted mb-0">Litecoin</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/USDT.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">USDT</p>
                                        <p class="text-muted mb-0">TetherUS</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/BTC.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">DOGE</p>
                                        <p class="text-muted mb-0">Dogecoin</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/DASH.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">DASH</p>
                                        <p class="text-muted mb-0">Dash</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-crypto" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-crypto" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-crypto" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="funding-t-f" role="tabpanel" aria-labelledby="funding-t-f">
            <table class="table table-striped table-borderless border-0 table-funding">
                    <thead>
                        <tr>
                            <th>Fiat</th>
                            <th>Balance</th>
                            <th>BTC Value</th>
                            <th>
                                <div class="row">
                                    <div class="col-6">Action</div>
                                    <div class="col-6 text-right">  <input class="form-check-input mx-2" type="checkbox" id="hide-balances" name="option1" value="something" >Hide 0 Balances</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/VND.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">VND</p>
                                        <p class="text-muted mb-0">Vietnam Dong</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-fiat" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                    <a href="/user/withdraw-fiat" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-fiat" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('images/coins/USD.png')}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">USD</p>
                                        <p class="text-muted mb-0">US Dollar</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="p-bold">162,124</p>
                            </td>
                            <td>
                                <p class="p-bold">0.00023218</p>
                                <p class="p-muted">~ 7.011244555</p>
                            </td>

                            <td>
                                <div class="row">
                                    <a href="/user/deposit-fiat" class="btn-sm btn-rounded col-4">
                                        Deposit
                                    </a>
                                   <a href="/user/withdraw-fiat" class="btn-sm btn-rounded col-4">
                                        Withdraw
                                    </a>
                                   <a href="/user/transfer-fiat" class="btn-sm btn-rounded col-4">
                                        Transfer
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
                
            </section>
        </div>
    </div>
</div>
@endsection