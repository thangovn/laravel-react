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
                        <h4 class="mb-3 title-add-payment"><img src="{{ asset('images/Line.png') }}" alt=""> Add E-Wallet
                            Account</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label user-form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Full Name" value=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid full name is required.
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="lastName" class="form-label user-form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid mobile number is required.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="state" class="form-label user-form-label">E-Wallet</label>
                                    <select class="form-select" id="ewallet" required="">
                                        <option value=""></option>
                                        <option>Bank 1</option>
                                        <option>Bank 2</option>
                                        <option>Bank 3</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid E-Wallet.
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
                                    <button class="w-100 btn btn-primary btn-lg user-form-submit" data-bs-toggle="modal"
                                        data-bs-target="#myModal">Save</button>
                                </div>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <h4 class="text-center py-1 fs-3 fw-bold text-modal">
                                                Security
                                                verification
                                            </h4>
                                            <p class="py-4">To ensure the safety of your account, please
                                                complete
                                                the following
                                                verification procedure. You can also use <a href="#"
                                                    class="fw-bold text-decoration-underline text-muted">Google
                                                    Authenticator.</a>
                                            </p>
                                            <form action="">
                                                <label for="lastName"
                                                    class="form-label user-form-label fw-bold text-dark">Phone
                                                    Verification
                                                    Code</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        aria-label="Recipient's username" aria-describedby="button-addon2"
                                                        style="border-right: none;">
                                                    <span
                                                        class="input-group-text                
                                                        text-modal">
                                                        <a href="">Get Code</a></span>
                                                </div>

                                                <span class="d-flex align-items-start" style="font-size: 0.7rem">Enter
                                                    the 6
                                                    digit code sent to
                                                    955
                                                    **5556</span>
                                                <button class="w-100 my-3 btn btn-primary btn-lg user-form-submit"><a
                                                        class="text-light text-decoration-none"
                                                        href="/payment/success-alert">
                                                        Submit</a></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Modal body..
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a
                                            class="text-light" href="/payment/success-alert"> Save</a></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </main>


@endsection
