@extends('admin.layout')
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
                    <div class="bg-white p-4 rounded-4 shadow">
                        <h4 class="mb-3 title-add-payment"><img src="{{ asset('images/Line.png') }}" alt="">Add New Credit
                            Card</h4>
                        <form method="post" class="needs-validation" novalidate="">
                            @csrf
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
                                    <label for="lastName" class="form-label user-form-label">Card Number</label>
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

                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label user-form-label">Expiration Day</label>
                                    <input type="text" class="form-control" id="expirationDay"
                                        placeholder="Expiration Day" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid expiration day is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label user-form-label">Security Code (CVV)</label>
                                    <input type="text" class="form-control" id="securityCode"
                                        placeholder="Security Code (CVV)" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid security code (CVV) is required.
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
                                    <button class="w-100 btn btn-primary btn-lg user-form-submit" type="submit"><a
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
