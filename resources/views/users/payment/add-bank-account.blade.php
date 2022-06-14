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
                <section class="mx-4 mb-5 user-form">
                    <div class="bg-white p-4 rounded-4 shadow" href="javascript:hide('hide');" id="hideLink">
                        <h4 class="mb-3 title-add-payment"><img src="{{ asset('images/Line.png') }}" alt=""> Add
                            Bank Account</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" value=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="lastName" class="form-label user-form-label">Bank Account Number</label>
                                    <input type="text" class="form-control" id="bankAccountNumber"
                                        placeholder="Bank Account Number" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid bank account number is required.
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Bank Name</label>
                                    <input type="text" class="form-control" id="bankName" placeholder="Bank Name" value=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid bank name is required.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="state" class="form-label user-form-label">Bank Name</label>
                                    <select class="form-select" id="bankName" required="">
                                        <option value=""></option>
                                        <option>Bank 1</option>
                                        <option>Bank 2</option>
                                        <option>Bank 3</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid bank name.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading"> <img class="pb-2 px-2"
                                                src="{{ asset('images/warning_24pxwarning.png') }}" alt="">Warning!</h4>
                                        <p class="px-5">Please make sure you add your bank card number for instant
                                            payments. Do not
                                            include details of other banks or patment methods. You must add the payment
                                            details of the selected bank.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="alert" role="alert">
                                        <h4 class="alert-heading"> <img class="pb-2 px-2"
                                                src="{{ asset('images/info.png') }}" alt="">Tips!</h4>
                                        <p class="px-5">With the payment method you are currently using, the buyer
                                            has the ability to revoke payment after it has been submitted. Please be aware
                                            of the risk of this type of fraud when selling cryptocurrencies. Payme is not
                                            liable for any loss of funds incurred as a result of a revoked payment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 my-2 d-flex justify-content-end">
                                <div class="col-md-2">
                                    <button class="w-100 btn btn-light btn-lg" type="submit"> <a
                                            class="text-dark text-decoration-none" href="/payment/select-payment">
                                            Cancel</a></button>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="w-100 btn btn-primary btn-lg user-form-submit"> <a
                                            class="text-light text-decoration-none" href="/payment/success-alert">
                                            Save</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>

    </main>


@endsection
