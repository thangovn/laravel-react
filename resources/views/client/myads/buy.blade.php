@extends('client.layout')
@section('pageTitle', 'MyAds')
@section('breadcrumb-first', 'MyAds')
@section('breadcrumb-second', 'MyAds')
@section('main')

<!-- Tabs content -->
<section class="container-fluid heading-myads d-flex alignt-items-center">
    <div class="container container-content">
        <div class="heading-text col-9">
            <h2 class="">Post Normal Ad</h2>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="nav-step " id="nav-tab" role="tablist">
            <div class=" my-5 contain-step d-flex justify-content-around align-items-center">
                <div class="d-flex flex-column align-items-center gap-3">
                    <a href="" class=" active " id="set-type-price" data-bs-toggle="pill" data-bs-target="#nav-set-type-price" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <div class="d-flex align-items-center gap-2  position-relative">
                            <div id='step1' class="box-step">
                                1
                            </div>
                            <div class="line-step position-absolute"></div>
                        </div>
                    </a>
                    <p class="step-active">Set Type & Price</p>
                </div>

                <div class="d-flex flex-column align-items-center gap-3">
                    <a href="" class="" id="set-total-amount" data-bs-toggle="pill" data-bs-target="#nav-set-total-amount" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                        <div class="d-flex align-items-center gap-2  position-relative">
                            <div id='step2' class="box-step disable-step">
                                2
                            </div>
                            <div class="line-step position-absolute"></div>
                        </div>
                    </a>
                    <p class="step-deactive ">Set Remarks & Automatic Response</p>

                </div>

                <div class="d-flex flex-column align-items-center gap-3">
                    <a href="" id="set-remarks" data-bs-toggle="pill" data-bs-target="#nav-set-remarks" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                        <div id='step3' class="box-step disable-step"> 3</div>
                    </a>
                    <p class="step-deactive ">Set Type & Price</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <form action="">
            <div class="tab-content mb-tab" id="nav-tabContent">
                <div class="tab-pane fade show active col-12" id="nav-set-type-price" role="tabpanel" aria-labelledby="set-type-price" tabindex="0">
                    <div class="d-flex col-12">
                        <div class="col-6">
                            <button class="col-12 p-2 iwantobuy">
                                I want to buy
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="col-12 p-2 iwantobuy tosell">I want to sell</button>
                        </div>
                    </div>
                    <div class=" row col-12 coin-select method-buy-sell">
                        <div class="col-md-6 col-12 d-flex flex-column gap-2 gap-md-3 mt-4">
                            <div class="col-2">
                                <h5 class="fs18-fw-700">Asset</h5>
                            </div>
                            <div class="col-md-6 col-12 d-flex align-items-center  gap-4 radio-coin">
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="BTC">
                                     <label for="html" class="fs18-fw-700">BTC</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="ETH">
                                     <label for="html" class="fs18-fw-700">ETH</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="BNB">
                                     <label for="html" class="fs18-fw-700">BNB</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="BCH">
                                     <label for="html" class="fs18-fw-700">BCH</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-between radio-coin">
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="LCT">
                                     <label for="html" class="fs18-fw-700">LCT</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="USDT">
                                     <label for="html" class="fs18-fw-700">USDT</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="GOGE">
                                     <label for="html" class="fs18-fw-700">GOGE</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="DASH">
                                     <label for="html" class="fs18-fw-700">DASH</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex flex-column gap-2 gap-md-3 mt-4">
                            <div class="">
                                <h5 class="fs18-fw-700">with Cash
                                    <span class=" material-symbols-outlined">
                                        error
                                    </span>
                                </h5>
                            </div>
                            <div class="col-6 d-flex align-items-center gap-4 radio-coin">
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="USD">
                                     <label for="html" class="fs18-fw-700">USD</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="VND">
                                     <label for="html" class="fs18-fw-700">VND</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row col-12">
                        <div class="col-12 col-md-6">
                            <div class=" d-flex flex-column flex-md-row gap-1 gap-md-4 ">
                                <div class="col-12 col-md-4 d-flex flex-row flex-md-column align-items-center align-items-md-start gap-2 gap-md-0">
                                    <h6 class="fs18-fw-700">Your Price</h6>
                                    <h5 class="fs-26px-fw-800">$1.000</h5>
                                </div>
                                <div class="col-12 col-md-5 d-flex flex-row flex-md-column align-items-center align-items-md-start gap-2 gap-md-0">
                                    <h6 class="fs18-fw-700">
                                        Highest order Price

                                        <span class=" material-symbols-outlined">
                                            error
                                        </span>
                                    </h6>
                                    <h5 class="fs-26px-fw-800"> $1.000</h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex  flex-column">
                                <div class="col-2 ">
                                    <h6 class="fs18-fw-700">Fixed</h6>
                                </div>
                                <div class="col-8 col-md-6 d-flex ">
                                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"><span class="material-symbols-outlined">
                                            remove
                                        </span></div>
                                    <input type="number" id="number" value="0" />
                                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"><span class="material-symbols-outlined">
                                            add
                                        </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4 mt-md-0">
                            <div class="col-12">
                                <h6 class="fs18-fw-700">Price Type</h6>
                            </div>

                            <div class=" col-12 col-md-6 d-flex align-items-center gap-4 radio-coin">
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="fixed">
                                     <label for="html" class="fs18-fw-700">Fixed</label>
                                </div>
                                <div>
                                    <input type="radio" id="html" name="fav_language" value="floating">
                                     <label for="html" class="fs18-fw-700">Floating</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="pm-prinary" onclick="nextTab(event, '2')">Next</button>
                    </div>
                </div>
                <div class="tab-pane fade gap-5 tab-2" id="nav-set-total-amount" role="tabpanel" aria-labelledby="faqs-advanced" tabindex="0">
                    <!-- content step-2 -->
                    <div class="container row d-flex flex-column flex-md-row gap-2  col-12">
                        <div class="col-12 col-md-6">
                            <div class="input-amount-waraper d-flex flex-column gap-2 gap-md-4">
                                <label for="" class="fs18-fw-700">Total Amount</label>
                                <input type="text" placeholder="100" class="col-12 rounded-1">
                                <label for="" class="coin-text">USDT</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 d-flex align-items-center gap-2">
                            <div class="col-6">
                                <div class="input-amount-waraper d-flex flex-column gap-2">
                                    <label for="" class="fs18-fw-700">Order Limit</label>
                                    <input type="text" placeholder="100" class="col-12   rounded-1">
                                    <label for="" class="coin-text">USDT</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-amount-waraper d-flex flex-column gap-4">
                                    <label for="" class="fs18-fw-700"></label>
                                    <input type="text" placeholder="100" class="col-12 padding-2-4   rounded-1">
                                    <label for="" class="coin-text">USDT</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container coin-select mt-5 d-flex flex-md-row flex-column col-12">
                        <div class="col-md-6 col-12">
                            <div class="input-amount-waraper d-flex flex-column gap-3 ">
                                <label for="" class="fs18-fw-700">Payment Method</label>
                                <button class="pm-primary-payme  col-md-3 col-12">+ Add</button>
                                <p for="" class="fs18-fw-700">Select up to 5 methods</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-amount-warape row d-flex flex-column col-md-4 col-12 gap-3">
                                <label for="" class="fs18-fw-700">Payment Time Limit</label>
                                <select class=" form-select padding-2-4" aria-label=" Default select example">
                                    <option selected>15 min</option>
                                    <option value="1">30 min</option>
                                    <option value="2">1 hour</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-8">
                            <span class="fs18-fw-700">
                                Highest order Price

                                <span class=" material-symbols-outlined fs18-fw-700">
                                    error
                                </span>
                            </span>
                            <span class="fs18-fw-700">0,00 USDT</span>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
                            <button class="pm-primary-payme disable">Previous</button>
                            <button class="pm-primary-payme" onclick="nextTab(event, '3')">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
                <div class=" tab-pane fade gap-5 tab-3" id="nav-set-remarks" role="tabpanel" aria-labelledby="faqs-advanced" tabindex="0">
                    <!-- content step-3 -->
                    <div class="container row d-flex flex-column gap-3 col-12">
                        <div class="input-amount-waraper d-flex flex-column gap-4 col-12">
                            <label for="" class=" fs18-fw-700">Remark (Optional)</label>
                            <textarea id="w3review" name="w3review" rows="4" cols="50" class="rounded-2 p-2 position-relative  text-area-payme  " placeholder="Please do not include any cryto-related words, such as crypto, P2P, C2C, BTC, USDT, ETH ect.">
                            </textarea>
                            <span class="material-symbols-outlined coin-text-refresh">
                                refresh
                            </span>
                            <span class="text-count-absolute">
                                0/1000
                            </span>
                        </div>
                        <div class="input-amount-waraper coin-select d-flex flex-column gap-4 col-12">
                            <label for="" class="fs18-fw-700">Auto Reply (Optional)</label>
                            <textarea id="w3review" name="w3review" rows="4" cols="50" class="rounded-2 p-2 position-relative text-area-payme " placeholder="Auto reply message will be sent to the counterparty once the order is created">
                            </textarea>
                            <span class="text-count-absolute">

                        </div>
                    </div>
                    <div class="container mt-5 d-flex flex-column gap-3 col-12">
                        <div class="col-md-6 col-12">
                            <div class=" d-flex flex-column gap-md-4 gap-2">
                                <label for="" class="fs18-fw-700">Counterparty Conditions</label>
                                <div class="d-flex gap-md-4 gap-2 align-items-center">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1" class="fs18-fw-700">Completed KYC</label>
                                </div>
                                <div class="d-flex gap-md-4 gap-2 align-items-center">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1" class="fs18-fw-700">Registed</label>
                                    <input type="number" class="input-number-step3">
                                    <span class="fs18-fw-700">day(s) ago</span>
                                </div>
                                <div class="d-flex gap-md-4 gap-2 align-items-center">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1" class="fs18-fw-700">Holding more than</label>
                                    <input type="number" class="input-number-step3">
                                    <span class="fs18-fw-700">BTC</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="input-amount-warape row d-flex flex-column col-12 gap-1 ">
                                <p class="fs18-fw-700">Status</p>
                                <div class=" d-flex align-items-center gap-md-4 gap-2 ">
                                    <div class="d-flex align-items-center gap-md-3 gap-1">
                                        <input type="radio" id="html" name="fav_language" value="fixed">
                                         <label for="html" class="fs18-fw-700">Online right now</label>
                                    </div>
                                    <div class="d-flex align-items-center gap-md-3 gap-1">
                                        <input type="radio" id="html" name="fav_language" value="floating">
                                         <label for="html" class="fs18-fw-700">Offline, manually later</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="d-flex justify-content-start gap-3">
                            <button class="pm-primary-payme disable">Previous</button>
                            <button class="pm-primary-payme">Post</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
@endsection