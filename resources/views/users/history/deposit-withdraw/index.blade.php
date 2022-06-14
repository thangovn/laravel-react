@extends('users.layout')
@section('main')
<div class="blance-detail">
    <div class="main-admin">
        <div class="main-left">
            @include('users.navbar');
        </div>
        <div class="main-right">
            <div class="content-profile">
                <div class="info-user">
                    <div class="row">
                        <div class="col-sm-12 col-md-1 col-lg-1">
                            <div class="border-image-user">
                                <img src="{{ asset('images/User.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5 user-row">
                            <strong>user*******@gmail.com</strong><br>
                            <span>Last login time: 13:00 - 2022/02/11</span><br>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 user-row ">
                            <span>User ID: ********</span><br>
                            <span>IP Address: AB126537</span><br>
                        </div>
                    </div>
                </div>

            <section class="transaction-table shadow rounded mx-4">
                    <div class="data-table row">
                        <span class="text-transaction ">Transaction History</span>
                        <div class="nav-options ">
                            <ul class="nav nav mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="#" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Crypto</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="#" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fiat</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="#" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Transfer</a>
                                </li>
                            </ul>
                        </div>

                            <div class="row ">
                                <div class="col-3">
                                    <label class="label-select mb-2" for="">Type</label>
                                    <select class="form-select border border-2" aria-label="Default select example">
                                        <option selected>Deposit</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-3 ">
                                    <label class="label-select mb-2" for="">Time</label>
                                    <select class="form-select border border-2" aria-label="Default select example">

                                        <option selected>7 day ago</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                            
                                <div class="col-3">
                                    <label class="label-select mb-2" for="">Asset</label>
                                    
                                    <select class="form-select border border-2 " aria-label="Default select example">
                                        
                                        <option selected><i class="bi bi-funnel"></i>BTC</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="label-select mb-2" for="">Status</label>
                                    <select class="form-select border border-2" aria-label="Default select example">
                                        <option selected>Completed</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="label-select mb-2 mt-4" for="">Search</label>
                                    <select class="form-select border border-2" aria-label="Default select example">
                                        <option selected>Enter TxID</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div class="table-transaction">
                                    <table class="table caption-top mt-4">
                                        <thead class=" border-top border-bottom border-2">
                                            <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Asset</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">TxID</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <!-- <tbody>
                                            <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                        </tbody> -->
                                        </table>
                                </div>
                            </div>
                       
                            <div class="btn-transaction">
                                <button type="button" class="btn-cancel btn btn-light btn-lg">Cancel</button>
                                <button type="button" class="btn-confirm btn btn-lg">Confirm</button>
                            </div>



                        </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>
@endsection