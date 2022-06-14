<div class="header-admin row">
    <div class="header-logo">
        {{-- col-xl-2 col-lg-1 col-2 --}}
        <a href="/">
            <img src="{{ asset('images/logo-footer.png') }}">
        </a>
    </div>
    <div class=" row header-menu">
        <ul class="col-4 col-lg-4 row header-menu-left">
            <li class="col-xl-2 col-lg-3 item-menu-left " onclick="handleActiveMenuLeft(event)">
                <a href="#">Buy</a>
            </li>
            <li class="col-xl-2 col-lg-3 item-menu-left" onclick="handleActiveMenuLeft(event)">
                <a href="#">Sell</a>
            </li>
            <li class="col-xl-3 col-lg-3 item-menu-left" onclick="handleActiveMenuLeft(event)">
                <a href="#">My Ads</a>
            </li>
            <li class="col-xl-2 col-lg-3 item-menu-left" onclick="handleActiveMenuLeft(event)">
                <a href="#">Swap</a>
            </li>
        </ul>
        <div class="col-7 col-xl-6 row header-right">
            <ul class="col-7 col-xl-6 row header-menu-right">
                <li class="col-3 col-xl-3 ">
                    <a href="#" class="item-menu-right" onclick="handleActiveMenuRight(event)">Wallet</a>
                </li>
                <li class="col-5">
                    <a href="#" class="item-menu-right" onclick="handleActiveMenuRight(event)">P2P Orders</a>
                </li>
                <li class="col-3 ">
                    <a href="#" class="item-menu-right" onclick="handleActiveMenuRight(event)">Deposit</a>
                </li>
            </ul>
            <div class="col-4 col-lg-6 row header-right">
                <div class="col-12 row header-icon">
                    <div class="col-2 col-xl-2 image-flag">
                        <a href="#">
                            <img src="{{ asset('images/notification.png') }}">
                        </a>
                        {{-- <div class="btn-group">
                            <button class="icon-notification" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <img src="{{ asset('images/notification.png') }}">
                            </button>
                            <ul class="dropdown-menu dropdown-notification" aria-labelledby="dropdownMenuClickableInside">
                                <div class="ribbon-noti"></div>
                              <li><a class="dropdown-item" href="#">Menu item </a></li>
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                              <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                          </div> --}}
                    </div>
    
                    <div class="col-2 col-xl-2 image-flag">
                        <a href="#">
                        <img src="{{ asset('images/download.png') }}">
                        </a>
                    </div>
                    <div class="col-2 col-xl-2 image-flag">
                        <a href="#">
                        <img src="{{ asset('images/account-icon.png') }}">
                        </a>
                    </div>
                    <div class="col-2 col-xl-2 image-flag">
                        <a href="#">
                        <img src="{{ asset('images/flags.png') }}">
                        </a>
                    </div>
                    <div class="col-2 col-xl-2 header-vnd">
                        VND
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <div class="col-1 menu-icon">
        <span class="material-symbols-outlined" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            menu
        </span>
    </div>

</div>


<!-- Modal -->
<div class="offcanvas offcanvas-end menu-modal" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    
    <div class="offcanvas-body modal-body">
        <div data-bs-dismiss="offcanvas" aria-label="Close"><span class="material-symbols-outlined">
            close
        </span></div>
        <div class="menu-moblie">
            <ul class="">
                <li class="item-menu-left " data-bs-dismiss="modal" aria-label="Close">
                    <a href="#"  >Buy</a>
                </li>
                <li class="item-menu-left " data-bs-dismiss="modal" aria-label="Close">
                    <a href="#" >Sell</a>
                </li>
                <li class="item-menu-left " data-bs-dismiss="modal" aria-label="Close">
                    <a href="#" >My Ads</a>
                </li>
                <li class="item-menu-left " data-bs-dismiss="modal" aria-label="Close">
                    <a href="#" >Swap</a>
                </li>
            </ul>
            <ul class="">
                <li class="" data-bs-dismiss="modal" aria-label="Close">
                    <a href="#"  class="item-menu-right"
                        >Wallet</a>
                </li>
                <li class="" data-bs-dismiss="modal" aria-label="Close">
                    <a href="#"  class="item-menu-right"
                        >P2P Orders</a>
                </li>
                <li class="" data-bs-dismiss="modal" aria-label="Close">
                    <a href="#"  class="item-menu-right"
                        >Deposit</a>
                </li>
            </ul>
            <div class="header-right">
                <div class="header-icon">

                    <div class="image-flag">
                        <a href="#">
                        <img data-bs-dismiss="modal" aria-label="Close"
                            src="{{ asset('images/notification.png') }}">
                        </a>
                    </div>

                    <div class="image-flag">
                        <a href="#">
                        <img data-bs-dismiss="modal" aria-label="Close"
                            src="{{ asset('images/download.png') }}">
                        </a>
                    </div>
                    <div class="image-flag">
                        <a href="{{ url('admin') }}">
                        <img data-bs-dismiss="modal" aria-label="Close"
                            src="{{ asset('images/account-icon.png') }}">
                        </a>
                    </div>
                    <div class="image-flag">
                        <a href="#">
                        <img data-bs-dismiss="modal" aria-label="Close" src="{{ asset('images/flags.png') }}">
                        </a>
                    </div>
                </div>
                <div class="header-vnd">
                    VND
                </div>
            </div>
 
        </div>
        <div class="menu-moblie navbar-mobile">
            <ul>
                <li class="py-2">
                    <a href="#" class="item-navbar " >
                        <span class="material-symbols-outlined" >
                            description
                            </span>
                            <label  class="show-navbar">Overview</label>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" class="item-navbar" >
                        <span class="material-symbols-outlined" >
                                credit_card
                            </span>
                            <label class="show-navbar">Payment methods</label>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" class="item-navbar" >
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Security</label>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" class="item-navbar" >
                        <span class="material-symbols-outlined" >
                            person
                            </span>
                            <label class="show-navbar">Personal Verification</label>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" class="item-navbar" >
                        <span class="material-symbols-outlined" >
                            settings
                            </span>
                            <label class="show-navbar">Settings</label>
                    </a>
                </li>
            </ul>
        </div>
      
    </div>
  </div>


