@extends('users.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
    <main>
        <div class="main-admin">
            <div class="main-left">
                @include('users.navbar')
            </div>
            <div class="main-right">
                @include('components.info-user')
                <section class="px-4">
                    <h4 class="mb-3 user-title-form">Select Payment Method</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="animal" id="credit"
                            value="/payment/add-credit-card" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Debit / Credit Card
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <input class="form-check-input" type="radio" name="nametest" id="blank-credit" value="option2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Bank Transfer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nametest" id="e-wallet" value="option3">
                        <label class="form-check-label" for="flexRadioDefault2">
                            E-Wallet
                        </label>
                    </div>
                    <div class="d-flex justify-content-start bd-highlight pt-2">
                        <a onclick="myFunction()" id="demo" class="btn pm-btn-gradient"><span
                                class="d-flex align-items-center">
                                Next
                            </span>
                        </a>
                    </div>
                </section>
            </div>
        </div>

    </main>
    <input name="animal-test" value="1">

@endsection
