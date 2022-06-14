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
                <section class="px-4">
                    <div class="d-flex justify-content-start bd-highlight">
                        <a href="/payment/select-payment" type="button" class="btn pm-btn-gradient"><span
                                class="d-flex align-items-center"><span class="material-symbols-outlined">
                                    add
                                </span> Add a Payment Method
                            </span>
                        </a>
                    </div>
                </section>
            </div>
        </div>

    </main>


@endsection
