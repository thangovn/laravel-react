@extends('admin.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
    <div class="blance-detail">
        <div class="main-admin">
            <div class="main-left">
                @include('admin.navbar')
            </div>
            <div class="main-right">
                <div class="content-profile">
                    @include('components.info-user')
                    <div class="balance-detail-top">
                        <div class="row" style="position: relative">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <h5 class="text-title pt-0">Balance Detail</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 button-balance-detail">
                                <button class="btn-top btn-deposit active">
                                    <span>
                                        Deposit
                                    </span>
                                </button>
                                <button class="btn-top btn-withdraw px-4">
                                    <span>
                                        Withdraw</span>
                                </button>
                            </div>
                            <div class="image-line">
                                <img src="{{ asset('images/Line.png') }}" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="account-balance">
                        <div>
                            <div class="group-text-color">
                                <span class="text-balance group-text-color">Account balance</span>
                                <button class="btn btn-hidden mb-3" onclick="hiddenBalance()">
                                    <span class="material-symbols-outlined symbols-icon">
                                        visibility_off
                                    </span>
                                    Hide
                                    Balance
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="money-amount">
                        <div>
                            <h4 id="myDIV"> <span>0.1267 BTC</span> ~ <span>$ 3,654.12</span></h4>
                        </div>
                    </div>

                    <div class="toggle-button">
                        <button class="small-toggle-crypto">
                            <span>
                                Crypto
                            </span>
                        </button>
                        <button class="big-toggle-fiat">
                            <span>
                                Fiat
                            </span>
                        </button>

                    </div>

                    <div class="chart-bitcoin">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="chart-script" style="position: relative;">
                                    <div class="img-display">
                                    </div>
                                    <div id="chartContainer"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 total-box-cryto">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="card mb-2 detail-box-cryto">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div class="icon">
                                                            <img src="{{ asset('images/USDT.svg') }}" alt="">
                                                        </div>
                                                        <div class="ms-2 c-details">
                                                            <h6 class="mb-0">USDT</h6> <span>Tether</span>
                                                        </div>
                                                    </div>
                                                    <div class="badge name3"> <span>198.22</span> </div>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="heading">$200.12</h4>
                                                    <div class="mt-3">
                                                        <div class="quantity-wallet-box">
                                                            <span><img
                                                                    src="{{ asset('images/account_balance_wallet.png') }}"
                                                                    alt="">
                                                                1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="card mb-2 detail-box-cryto">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div class="icon"><img
                                                                src="{{ asset('images/bitcoin.svg') }}" alt="">
                                                        </div>
                                                        <div class="ms-2 c-details">
                                                            <h6 class="mb-0">BTC</h6> <span>Bitcoin</span>
                                                        </div>
                                                    </div>
                                                    <div class="badge name2"> <span>0.00056</span> </div>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="heading">$800.00</h4>
                                                    <div class="mt-3">
                                                        <div class="quantity-wallet-box">
                                                            <span><img
                                                                    src="{{ asset('images/account_balance_wallet.png') }}"
                                                                    alt="">
                                                                1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="card mb-2 detail-box-cryto">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div class="icon"><img
                                                                src="{{ asset('images/bnb.svg') }}" alt="">
                                                        </div>
                                                        <div class="ms-2 c-details">
                                                            <h6 class="mb-0">BNB</h6> <span>BNB</span>
                                                        </div>
                                                    </div>
                                                    <div class="badge name3"> <span>198.22</span> </div>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="heading">$1,454</h4>
                                                    <div class="mt-3">
                                                        <div class="quantity-wallet-box">
                                                            <span><img
                                                                    src="{{ asset('images/account_balance_wallet.png') }}"
                                                                    alt="">
                                                                1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="card mb-2 detail-box-cryto">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div class="icon"><img
                                                                src="{{ asset('images/Bitmapdoge.svg') }}" alt="">
                                                        </div>
                                                        <div class="ms-2 c-details">
                                                            <h6 class="mb-0">DOGE</h6> <span>Dogecoin</span>
                                                        </div>
                                                    </div>
                                                    <div class="badge name4"> <span>11,234</span> </div>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="heading">$1,200</h4>
                                                    <div class="mt-3">
                                                        <div class="quantity-wallet-box">
                                                            <span><img
                                                                    src="{{ asset('images/account_balance_wallet.png') }}"
                                                                    alt="">
                                                                1</span>
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

                    <div class="statistics">
                        <div class="title-profile">
                            <span class="text-title">Statistics</span>
                            <img class="image-line-profile" src="{{ asset('images/Line.png') }}" alt="">
                        </div>
                        <div class="total-row">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                    <p class="title-statist mb-3 group-text-color">30d Trades</p>
                                    <p class="value-statist">80 Time (s)</p>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                    <p class="title-statist mb-3 group-text-color">Completion Rate</p>
                                    <p class="value-statist">100%</p>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                    <p class="title-statist mb-3 group-text-color">Avg. Release Time</p>
                                    <p class="value-statist">5 mins</p>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                    <p class="title-statist mb-3 group-text-color">Avg. Pay Time</p>
                                    <p class="value-statist">7 mins</p>
                                </div>
                            </div>
                        </div>
                        <div id="show-more"><a href="javascript:void(0)">
                                <img class="image-showmore" src="{{ asset('images/Line.png') }}" alt="">
                            </a></div>

                        <div id="show-more-content">
                            <div class="total-row">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                        <p class="title-statist mb-3 group-text-color">Registered</p>
                                        <p class="value-statist">35 days</p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                        <p class="title-statist mb-3 group-text-color">Positive Feedback</p>
                                        <p class="value-statist">98%</p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                        <p class="title-statist mb-3 group-text-color">Negative Feedback</p>
                                        <p class="value-statist">2%</p>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 text-center">
                                        <p class="title-statist mb-3 group-text-color">All Trades</p>
                                        <p class="value-statist">120 times</p>
                                        <span class="title-statist mb-3 group-text-color">(Buy 100 | Sell 20)</s>
                                    </div>
                                </div>
                            </div>

                            <div id="show-less"><a href="javascript:void(0)"><img class="image-showmore-less"
                                        src="{{ asset('images/Line.png') }}" alt=""></a></div>
                        </div>
                    </div>

                    <div class="referal-program">
                        <div class="title-profile">
                            <span class="text-title">Referral Program</span>
                            <img class="image-line-profile" src="{{ asset('images/Line.png') }}" alt="">
                        </div>
                        <div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-6 col-lg-6 text-content-bold referal-program d-flex align-items-center">
                                    <label class="label-referral" for="">My Referral Link:</label>
                                    <span id="valueText1" value="https://accounts.payme.io/en/register?ref=12231412">
                                        https://accounts.payme.io/en/register?ref=12231412</span>

                                    <span onClick="copyToClipboard('valueText1')"
                                        class="material-symbols-outlined px-3 copy-link">
                                        content_copy
                                    </span>
                                </div>
                                <div
                                    class="col-sm-12 col-sm-3 col-md-6 col-lg-6 text-content-bold referal-program d-flex align-items-center">
                                    <label class="label-referral" for="">My Referral ID:</label>
                                    <span id="valueText2" value="123456487">123456487</span>
                                    <span onclick="copyToClipboard('valueText2')"
                                        class="material-symbols-outlined px-3 copy-link">
                                        content_copy
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="announcement">
                        <div class="title-profile">
                            <span class="text-title">Announcements</span>
                            <img class="image-line-profile" src="{{ asset('images/Line.png') }}" alt="">
                        </div>
                        <div>
                            <span class="text-content-bold my-3">How to protect your Payme Account from Scam</span><br>
                            <p class="my-3">2022-05-08</p>
                        </div>
                    </div>

                    <div class="activity">
                        <div class="title-profile">
                            <span class="text-title">Activity</span>
                            <img class="image-line-profile" src="{{ asset('images/Line.png') }}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-content-bold location">Web</div>
                            <div
                                class="col-6 col-sm-6 col-sm-3 col-md-6 col-lg-6 text-content-bold IPAddress text-right money-cryto">
                                58.186.187.204
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 location">Ho Chi Minh City, Vietnam</div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 IPAddress text-right money-cryto">
                                2022-06-06
                                06:05:56
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.datatable')

@endsection
