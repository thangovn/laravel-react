@extends('admin.layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
    <main>
        <div class="main-admin">

            <div class="main-left">
                @include('admin.navbar')
            </div>
            <div class="main-right">

            </div>
        </div>

    </main>


@endsection
