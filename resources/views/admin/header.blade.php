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
                <a href="/myads">My Ads</a>
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
<div class="modal fade menu-tablet" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog menu-modal">
        <div class="modal-content">
            <div data-bs-dismiss="modal" aria-label="Close"><span class="material-symbols-outlined">
                    close
                </span></div>
            <div class="modal-body ">
                <div class="menu-moblie">
                    <ul class="">
                        <li class="item-menu-left" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#">Buy</a>
                        </li>
                        <li class="item-menu-left" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#">Sell</a>
                        </li>
                        <li class="item-menu-left" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#">My Ads</a>
                        </li>
                        <li class="item-menu-left" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#">Swap</a>
                        </li>
                    </ul>
                    <ul class="">
                        <li class="" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#" class="item-menu-right">Wallet</a>
                        </li>
                        <li class="" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#" class="item-menu-right">P2P Orders</a>
                        </li>
                        <li class="" data-bs-dismiss="modal" aria-label="Close">
                            <a href="#" class="item-menu-right">Deposit</a>
                        </li>
                    </ul>
                    <div class="header-right">
                        <div class="header-icon">

                            <div class="image-flag">
                                <a href="#">
                                    <img data-bs-dismiss="modal" aria-label="Close" src="{{ asset('images/notification.png') }}">
                                </a>
                            </div>

                            <div class="image-flag">
                                <a href="#">
                                    <img data-bs-dismiss="modal" aria-label="Close" src="{{ asset('images/download.png') }}">
                                </a>
                            </div>
                            <div class="image-flag">
                                <a href="{{ url('admin') }}">
                                    <img data-bs-dismiss="modal" aria-label="Close" src="{{ asset('images/account-icon.png') }}">
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
            <ul >
                <li class="py-2 item-li-navbar " >
                    <a href="#" class="item-navbar " >
                        <span class="material-symbols-outlined icon-sub-navbar" >
                            dashboard
                            </span>
                            <label  class="show-navbar">Dashboard</label>
                    </a>
                </li>
        
                {{-- User Management --}}
                <li class="py-2 item-li-navbar"  >
                    <div class="d-flex justify-content-between" >
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    group
                            </span>
                            <label class="show-navbar">User Management</label>
                            
                        </a>
                        
                    </div>
                    <ul class="sub-navbar show-sub-navbar" >
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined " >
                                    shield
                                    </span>
                                    <label class="show-navbar">User List</label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Role & Privilages</label>
                            </a>
                        </li>
                    </ul>
                </li>
        
                {{-- Referal System --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    record_voice_over
                                </span>
                                <label class="show-navbar">Referal System</label>
                            
                        </a>
                        
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Commission Rules</label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Commission List</label>
                            </a>
                        </li>
                    </ul>
                </li>
        
                {{-- Wallet Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    credit_card
                                </span>
                                <label class="show-navbar">Wallet Management</label>
                            
                        </a>
                        
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Fiat</label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Crypto</label>
                            </a>
                        </li>
                    </ul>
                </li>
                
        
                {{-- P2P Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    hub
                                </span>
                                <label class="show-navbar">P2P Management</label>
                            
                        </a>
                        
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Buy</label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Sell</label>
                            </a>
                        </li>
                    </ul>
                </li>
        
        
                {{-- Swap Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a href="#" class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    swap_horiz
                                </span>
                                <label class="show-navbar">Swap Management</label>
                            
                        </a>
                        
                    </div>
                    
                </li>
        
        
                {{-- Ads Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    campaign
                                </span>
                                <label class="show-navbar">Ads Management</label>
                            
                        </a>
                       
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Buy Ads</label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Sell Ads</label>
                            </a>
                        </li>
                    </ul>
                </li>
        
        
                {{-- Customer Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar">
                                manage_accounts
                                </span>
                                <label class="show-navbar">Customer Management</label>
                            
                        </a>
                       
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Customer List</label>
                            </a>
                        </li>
                    </ul>
                </li>
        
        
                {{-- Transfer Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a href="#" class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                   swap_horizontal_circle
                                </span>
                                <label class="show-navbar">Transfer Management</label>
                            
                        </a>
                        
                    </div>
                </li>
        
                {{-- Transaction Fee Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a href="#" class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    receipt_long
                                </span>
                                <label class="show-navbar label-fee-management">Transaction Fee Management</label>
                            
                        </a>
                       
                    </div>
                    
                </li>
        
                {{-- KYC Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    badge
                                </span>
                                <label class="show-navbar">KYC Management</label>
                            
                        </a>
                       
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">KYC Waiting List </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">KYC Document </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Pending KYC </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Verified </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Declined </label>
                            </a>
                        </li>
                    </ul>
                </li>
        
                {{-- Deposit Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    savings
                                </span>
                                <label class="show-navbar">Deposit Management</label>
                            
                        </a>
                        
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Approved Deposit </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Declined Deposit </label>
                            </a>
                        </li>
                        
                    </ul>
                </li>
        
                {{-- Withdraw Management --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    payments
                                </span>
                                <label class="show-navbar">Withdraw Management</label>
                            
                        </a>
                       
                    </div>
                    <ul class="sub-navbar show-sub-navbar">
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Approved Withdraw </label>
                            </a>
                        </li>
                        <li class="pt-3">
                            <a href="#" class="item-navbar" >
                                <span class="material-symbols-outlined" >
                                    shield
                                    </span>
                                    <label class="show-navbar">Declined Withdraw </label>
                            </a>
                        </li>
                    </ul>
                </li>
        
                {{-- Transaction History --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    history_edu
                                </span>
                                <label class="show-navbar">Transaction History</label>
                            
                        </a>
                      
                    </div>
                   
                </li>
        
                {{-- Ticket & Support --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    local_activity
                                </span>
                                <label class="show-navbar">Ticket & Support</label>
                            
                        </a>
                       
                    </div>
                    
                </li>
        
                {{-- Settings --}}
                <li class="py-2  item-li-navbar" >
                    <div class="d-flex justify-content-between">
                        <a class="item-navbar" >
                            <span class="material-symbols-outlined icon-sub-navbar" >
                                    settings
                                </span>
                                <label class="show-navbar">Settings</label>
                            
                        </a>
                        
                    </div>
                </li>
        
            </ul>
        </div>
      
    </div>
  </div>
