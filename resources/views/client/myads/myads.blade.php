@extends('client.layout')
@section('pageTitle', 'MyAds')
@section('breadcrumb-first', 'MyAds')
@section('breadcrumb-second', 'MyAds')
@section('main')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<section class="container-fluid heading-myads d-flex alignt-items-center">
    <div class="container container-content">
        <div class="heading-text col-3">
            <h2 class="">My Ads</h2>
        </div>
        <div class="d-flex gap-2 gap-md-4 col-md-3 col-12">
            <div class="d-flex align-items-center gap-2 ad-history">
                <span class="material-symbols-outlined">
                    perm_contact_calendar
                </span>
                <span>Ad history</span>
            </div>
            <div class="d-flex gap-3">
                <button class="pm-prinary filter">
                    + Post new Ad
                </button>

            </div>
        </div>
    </div>
</section>
<section class="container wrapper-filter">
    <form action="">
        <div class="container-filter d-flex justify-content-between">
            <div class="input-group-edit d-flex flex-column gap-3 col-md-12 col-lg-2  col-12 ">
                <label for="">Asset/type</label>
                <select class="form-select p-2 " aria-label="Default select example">
                    <option selected>All assets</option>
                    <option value="1">USDC</option>
                    <option value="2">GTM</option>
                    <option value="3">BTC</option>
                    <option value="4">BUSD</option>
                    <option value="5">BNB</option>
                    <option value="6">ETH</option>
                    <option value="7">SLP</option>
                </select>
            </div>
            <div class="input-group-edit d-flex mt-2 mt-md-0 flex-column gap-3 col-md-12 col-lg-2  col-12 ">
                <label for="">Type</label>
                <select class="form-select p-2 " aria-label="Default select example">
                    <option selected>All Status</option>
                    <option value="1">Buy</option>
                    <option value="2">Sell</option>
                </select>
            </div>
            <div class="input-group-edit   mt-2 mt-md-0 d-flex flex-column gap-3 col-md-12 col-lg-2  col-12 ">
                <label for="">Status</label>
                <select class="form-select p-2 " aria-label="Default select example">
                    <option selected>All Status</option>
                    <option value="1">Published</option>
                    <option value="2">Offline</option>
                </select>
            </div>
            <div class="input-group-edit  mt-2 mt-md-0 d-flex flex-column gap-3 col-md-12 col-lg-2  col-12  ">
                <label for="example">Create time</label>
                <input type="text" name="daterange" class="date-picker-border p-2 rounded-1 " value="01/01/2018 - 01/15/2018" readonly />
            </div>
            <div class="input-group-edit  mt-2 mt-md-0 d-flex flex-column gap-3 col-md-2 col-12 ">
                <label for="">Action</label>
                <div class="d-flex gap-3">
                    <button class="pm-prinary filter">Filter</button>
                    <button class="pm-prinary disable">Reset</button>
                </div>
            </div>
        </div>
</section>
<section class="container table-responsive ">
    <table class="table table-borderless ">
        <thead class="table-payme  ">
            <tr class="title-table">
                <th scope="col" class=" col-2">Ad Number Type Asset/Fiat</th>
                <th scope="col" class=" col-2">Total Amount Completed Trade QTY. Limit</th>
                <th scope="col" class=" col-2">Price Exchange Rate</th>
                <th scope="col" class=" col-2">Payment Method</th>
                <th scope="col" class=" col-2">Status</th>
                <th scope="col" class=" col-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="content-table">
                <th scope="row">1</th>
                <td>Example</td>
                <td>Example</td>
                <td>Example</td>
                <td>Example</td>
                <td>Example</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex align-items-center flex-column pt-5 no-result">
        <span class="material-symbols-outlined">
            folder_off
        </span>
        <p>No onlline ad yet</p>
    </div>
    </form>

</section>


@endsection