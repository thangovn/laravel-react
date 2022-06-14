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
            <div class="main-right" style="background-color: #F3F3F3">
                @include('components.info-user')
                <section class="px-4 d-flex justify-content-center">
                    <div class="modal-show-success d-flex justify-content-center"
                        style="box-sizing: border-box; width: 704px;background: #FFFFFF;border: 1px solid #F2F2F2;box-shadow: 0px 4px 4px rgba(51, 51, 51, 0.15);border-radius: 16px;">
                        <div>
                            <p class="d-flex justify-content-center">
                                <img class="py-3" src="{{ asset('images/success-alert.png') }}" alt="">
                            </p>
                            <span class="fw-bolder fs-3">Your information has been saved</span>

                        </div>

                    </div>

                </section>
            </div>
        </div>

    </main>


@endsection
