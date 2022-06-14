@extends('client.layout')
@section('pageTitle', 'Home')
@section('breadcrumb-first', 'Home')
@section('breadcrumb-second', 'Home')
@section('main')

<!-- Banner -->
<section class="pm-banner">
    <div class="pm-banner-text">
        <h3>The world's most secure P2P trading platform.</h3>
        <p class="my-5">Trade on Payme: Your safest, fastest and easiest peer-to-peer trading platform</p>
        <div class="mt-5"> <a href="#">Buy Now</a></div>
    </div>
</section>
<section class="pm-chart">
    @include('client.coinlist')
</section>
<!-- Payme convert -->
<section class="container convert-lists">
    <div class="convert-lists-text"><span>Payme Convert Lists GMT, APE, SLP. 13 New Cryptocurrencies Available on Pexpay Convert</span><span><a href="#">View more ></a></span></div>
    <div class="row">
        <div class="col-3"><img style="width:100%" src="{{asset('images/slide1.png')}}" alt=""></div>
        <div class="col-3"><img style="width:100%" src="{{asset('images/slide2.png')}}" alt=""></div>
        <div class="col-3"><img style="width:100%" src="{{asset('images/slide3.png')}}" alt=""></div>
        <div class="col-3"><img style="width:100%" src="{{asset('images/slide4.png')}}" alt=""></div>
    </div>
</section>
<!-- safe -->
<section class="container my-5 py-5 safe">
    <div class="text-divider">
        <h4>Safe, Easy & Fast Transactions</h4>
    </div>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col safe-text">
            <h6>Step 1</h6>
            <img class="my-5" src="{{asset('images/complete.svg')}}" alt="">
            <h5>Select an ads</h5>
            <p>You can select any Ads from our list of advertisers. Use the filter function to find ads based on your preferred currency, digital asset, payment methods and your trade amount.</p>
        </div>
        <div class="feature col safe-text">

            <h6>Step 2</h6>
            <img class="my-5" src="{{asset('images/dynamic-gradient.svg')}}" alt="">
            <h5>Place an order</h5>
            <p>Once you have selected a suitable ad, place an order. Payme provides escrow service to secure your digital assets until the payment is completed.</p>
        </div>
        <div class="feature col safe-text">
            <h6>Step 3</h6>
            <img class="my-5" src="{{asset('images/money.svg')}}" alt="">
            <h5>Complete the transaction</h5>
            <p>Follow the payment instructions displayed to you. Once the payment has been completed, notify the counterparty for the release of the digital assets.</p>
        </div>
    </div>
</section>
<!-- Multiples Payment Methods -->
<section class="multiples">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12  col-lg-6 multiples-img d-none d-lg-block">
                <img src="{{asset('images/banner-2.svg')}}" alt="">
            </div>
            <div class="col-sm-12  col-lg-6 d-flex justify-content-center align-self-center flex-column ps-4">
                <h1 class="multiples-h1 mt-3">Multiples
                    Payment Methods</h1>
                <p class="multiples-p my-5">Our vision is to make digital currency accessible to everyone around the world.</p>
            </div>
        </div>

    </div>

</section>
<!-- Advantages of Payme Exchange -->
<section class="container py-5 advantages">
    <h3 class="my-5">Advantages of Payme Exchange</h3>
    <div class="row">
        <div class="col-sm-12  col-lg-5">
            <div class="col d-flex align-items-start my-5">
                <div class="icon-square  text-dark flex-shrink-0 me-3">
                    <img style="width: 100%;" src="{{asset('images/security.svg')}}" alt="">
                </div>
                <div>
                    <h4 class="advantages-h4">Security and safety</h4>
                    <p class="advantages-p">We use best-in-class tools and practices like face recognition and big data analysis to uphold the highest level of security for our users and screen out money laundering and fraud</p>
                </div>
            </div>
            <div class="col d-flex align-items-start my-5">
                <div class="icon-square  text-dark flex-shrink-0 me-3">
                    <img style="width: 100%;" src="{{asset('images/global.svg')}}" alt="">
                </div>
                <div>
                    <h4 class="advantages-h4">Global coverage</h4>
                    <p class="advantages-p">No matter where you are, with the support of more than 50 payment methods and 10 currencies, Payme can provide you with a secured and fast transactions worldwide</p>
                </div>
            </div>
            <div class="col d-flex align-items-start my-5">
                <div class="icon-square  text-dark flex-shrink-0 me-3">
                    <img style="width: 100%;" src="{{asset('images/zero-free.svg')}}" alt="">
                </div>
                <div>
                    <h4 class="advantages-h4">Zero-Fee</h4>
                    <p class="advantages-p">Enjoy zero-fee when you trade with any of the counterparties on Payme, at the price and payment methods you prefer.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12  col-lg-7 advantages-right">
            <img style="width: 100%;" src="{{asset('images/banner-3.svg')}}" alt="">
        </div>
    </div>
</section>
<!-- PMP -->
<section class="pmp" style="">
    <div class="container">
        <h3 class="text-center mb-5">Payme Merchant Program</h3>
        <div class="row row-cols-1 row-cols-md-3 mb-3">
            <div class="col">
                <div class="card pmp-card mb-4 rounded-3 shadow-sm">

                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><img src="{{asset('images/zero-free.png')}}" alt=""></li>
                            <li class="pmp-card-li my-3">
                                <H5>Advertise with 0 fee</H5>
                            </li>
                            <li class="pmp-card-li my-3">Payme merchants enjoy zero handling fees, as well as various regional rebate programs</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card pmp-card mb-4 rounded-3 shadow-sm">

                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><img src="{{asset('images/vip.png')}}" alt=""></li>
                            <li class="pmp-card-li my-3">
                                <H5>VIP privileges</H5>
                            </li>
                            <li class="pmp-card-li my-3">Payme merchants can enjoy VIP upgrades, higher ranking on our peer to peer marketplace and more to expand your business.</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card pmp-card mb-4 rounded-3 shadow-sm">

                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><img src="{{asset('images/support.png')}}" alt=""></li>
                            <li class="pmp-card-li my-3">
                                <H5>24/7 Customer Support</H5>
                            </li>
                            <li class="pmp-card-li my-3">24/7 access to a dedicated support team to help resolve Payme merchants’ enquiries and issues in a timely manner</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- FAQS -->
<section class="faqs container mt-5 pt-5">
    <div class="row">
        <div class="col-sm-12  col-lg-6">
            <h3>FAQS</h3>
            <nav>

                <div class="nav nav-pills my-5 btnpm-gradient" id="nav-tab" role="tablist" aria-orientation="vertical">
                    <button class=" nav-link active me-2" id="faqs-beginner" data-bs-toggle="pill" data-bs-target="#nav-beginner" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Beginner</button>
                    <button class="nav-link me-2" id="faqs-advanced" data-bs-toggle="pill" data-bs-target="#nav-advanced" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Advanced</button>
                    <button class="nav-link me-2" id="faqs-advertisers" data-bs-toggle="pill" data-bs-target="#nav-advertisers" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Advertisers</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-beginner" role="tabpanel" aria-labelledby="faqs-beginner" tabindex="0">


                    <div class="my-5 faqs-text">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>Glossary of Payme trading terms</h6>
                        </span>
                    </div>
                    <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>Payme P2P Trading Guidelines</h6>
                        </span>
                    </div>
                    <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>Payme trading FAQ</h6>
                        </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-advanced" role="tabpanel" aria-labelledby="faqs-advanced" tabindex="0">
                    <div class="my-5 faqs-text">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>Why has my withdrawal/deposit not arrived?</h6>
                        </span>
                    </div>
                    <div class="my-5 faqs-text">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>How to Deposit and Withdraw on Payme?</h6>
                        </span>
                    </div>
                    <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>What Can I Do When I Withdraw to A Wrong Address?</h6>
                        </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-advertisers" role="tabpanel" aria-labelledby="faqs-advertisers" tabindex="0">
                    <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>How to Post P2P Trading Advertisements on Payme?</h6>
                        </span>
                    </div>
                    <div class="my-5 faqs-text" style="align-items: center;display: flex;gap: 1rem;">
                        <img class="faqs-img" src="{{asset('images/faqs2.svg')}}" alt=""><span>
                            <h6>Payme P2P Merchant Policy</h6>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12  col-lg-6 text-center d-flex align-self-end justify-content-center">
            <img style="width:80%" src="{{asset('images/faqs1.svg')}}" alt="">
        </div>
    </div>
</section>
@endsection
