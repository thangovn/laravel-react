<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.index');
});
// EMAIL
Route::get('/user/signin-email', function () {
    return view('users.signin-email');
});
Route::get('/user/signup-email', function () {
    return view('users.signup-email');
});

Route::get('/user/reset-password', function () {
    return view('users.reset-password');
});
Route::get('/user/verificode-email', function () {
    return view('users.verificode-email');
});
Route::get('/user/check-email', function () {
    return view('users.check-email');
});
Route::get('/user/new-password', function () {
    return view('users.new-password');
});
// MOBILE
Route::get('/user/signin-mobile', function () {
    return view('users.signin-mobile');
});
Route::get('/user/signup-mobile', function () {
    return view('users.signup-mobile');
});
Route::get('/user/verificode-mobile', function () {
    return view('users.verificode-mobile');
});

Route::get('/user/history/deposit-withdraw', function () {
    return view('users.history.deposit-withdraw.index');
});

Route::get('/user', function () {
    return view('users.profile-overview');
});
Route::get('/payment', function () {
    return view('users.payment.btn-add-payment');
});
Route::get('/payment/select-payment', function () {
    return view('users.payment.select-payment');
});
Route::get('/payment/add-blank', function () {
    return view('users.payment.add-bank-account');
})->name('payment.add-blank');
Route::get('/payment/success-alert', function () {
    return view('users.payment.success-alert');
});
Route::get('/payment/add-credit-card', function () {
    return view('users.payment.add-credit-card');
})->name('payment.add-credit-card');
Route::get('/payment/add-ewallet-account', function () {
    return view('users.payment.add-ewallet-account');
})->name('payment.add-ewallet-account');



Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Wind
Route::get('/user/funding-fiat', function () {
    return view('users.fiat.funding-fiat');
});

Route::get('/user/deposit-fiat', function () {
    return view('users.fiat.deposit-fiat');
});

Route::get('/user/withdraw-fiat', function () {
    return view('users.fiat.deposit-fiat-credit-card');
});

Route::get('/user/transfer-fiat', function () {
    return view('users.fiat.deposit-fiat-transfer');
});

//Alex
Route::get('/admin/add-new-user', function () {
    return view('admin.add-new-user');
});
Route::get('/admin/role-privilages', function () {
    return view('admin.role-privilages');
});
Route::get('/admin/role-privilages/permission', function () {
    return view('admin.permission');
});
Route::get('/user/wallet-fiat', function () {
    return view('users.Deposit-Crypto.overview');
});
Route::get('/user/funding', function () {
    return view('users.funding.funding');
});
// ADMIN
Route::get('/admin/signin-email', function () {
    return view('admin.signin-email');
});
Route::get('/admin/reset-password', function () {
    return view('admin.reset-password');
});
Route::get('/admin/check-email', function () {
    return view('admin.check-email');
});
Route::get('/admin/new-password', function () {
    return view('admin.new-password');
});
Route::get('/admin/edit', function () {
    return view('users.edit-user');
});
//KYC
Route::group(['prefix' => 'kyc'], function () {
    Route::get('/', function () {
        return view('users.kyc.index');
    });
    Route::get('/step2', function () {
        return view('users.kyc.step2');
    });
    Route::get('/step3', function () {
        return view('users.kyc.step3');
    });
    Route::get('/step4', function () {
        return view('users.kyc.step4');
    });
    Route::get('/step5', function () {
        return view('users.kyc.step5');
    });
    Route::get('/step6', function () {
        return view('users.kyc.step6');
    });
});

// MY ADS
Route::get('/myads', function () {
    return view('client.myads.myads');
});
Route::get('/myads/buy', function () {
    return view('client.myads.buy');
});
