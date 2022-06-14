


<div class="navbar-admin navbar-dashboard">
    
    <ul >
        <li class="py-2 item-li-navbar {{ request()->is('admin') ? 'active-navbar-admin' : ''}}" >
            <a href="#" class="item-navbar " onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined icon-sub-navbar" >
                    dashboard
                    </span>
                    <label  class="show-navbar">Dashboard</label>
            </a>
        </li>

        {{-- User Management --}}
        <li class="py-2 item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)" >
            <div class="d-flex justify-content-between" >
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            group
                    </span>
                    <label class="show-navbar">User Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar" >
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}" >
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="/admin" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined " >
                            shield
                            </span>
                            <label class="show-navbar">User List</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin/role-privilages') ? 'active-navbar' : '' }}">
                    <a href="/admin/role-privilages" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Role & Privilages</label>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Referal System --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            record_voice_over
                        </span>
                        <label class="show-navbar">Referal System</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Commission Rules</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Commission List</label>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Wallet Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            credit_card
                        </span>
                        <label class="show-navbar">Wallet Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Fiat</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Crypto</label>
                    </a>
                </li>
            </ul>
        </li>
        

        {{-- P2P Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            hub
                        </span>
                        <label class="show-navbar">P2P Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Buy</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Sell</label>
                    </a>
                </li>
            </ul>
        </li>


        {{-- Swap Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            swap_horiz
                        </span>
                        <label class="show-navbar">Swap Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            {{-- <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Buy</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Sell</label>
                    </a>
                </li>
            </ul> --}}
        </li>


        {{-- Ads Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            campaign
                        </span>
                        <label class="show-navbar">Ads Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Buy Ads</label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Sell Ads</label>
                    </a>
                </li>
            </ul>
        </li>


        {{-- Customer Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar">
                        manage_accounts
                        </span>
                        <label class="show-navbar">Customer Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Customer List</label>
                    </a>
                </li>
            </ul>
        </li>


        {{-- Transfer Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                           swap_horizontal_circle
                        </span>
                        <label class="show-navbar">Transfer Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            {{-- <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Customer List</label>
                    </a>
                </li>
            </ul> --}}
        </li>

        {{-- Transaction Fee Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            receipt_long
                        </span>
                        <label class="show-navbar label-fee-management">Transaction Fee Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            {{-- <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Customer List</label>
                    </a>
                </li>
            </ul> --}}
        </li>

        {{-- KYC Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            badge
                        </span>
                        <label class="show-navbar">KYC Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">KYC Waiting List </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">KYC Document </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Pending KYC </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Verified </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Declined </label>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Deposit Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            savings
                        </span>
                        <label class="show-navbar">Deposit Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Approved Deposit </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Declined Deposit </label>
                    </a>
                </li>
                
            </ul>
        </li>

        {{-- Withdraw Management --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            payments
                        </span>
                        <label class="show-navbar">Withdraw Management</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Approved Withdraw </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Declined Withdraw </label>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Transaction History --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            history_edu
                        </span>
                        <label class="show-navbar">Transaction History</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            {{-- <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Approved Withdraw </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Declined Withdraw </label>
                    </a>
                </li>
            </ul> --}}
        </li>

        {{-- Ticket & Support --}}
        <li class="py-2  item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            local_activity
                        </span>
                        <label class="show-navbar">Ticket & Support</label>
                    
                </a>
                <span class="material-symbols-outlined arrow-sub-navbar">
                    expand_less
                </span>
            </div>
            {{-- <ul class="sub-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'show-sub-navbar' : ''}}">
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Approved Withdraw </label>
                    </a>
                </li>
                <li class="pt-3 {{ request()->is('admin') ? 'active-navbar ' : '' }}">
                    <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                        <span class="material-symbols-outlined" >
                            shield
                            </span>
                            <label class="show-navbar">Declined Withdraw </label>
                    </a>
                </li>
            </ul> --}}
        </li>

        {{-- Settings --}}
        <li class="py-2 item-li-navbar {{ request()->is('admin') || request()->is('admin/role-privilages') ? 'active-navbar-admin' : ''}}" onclick="handleActiveNavBarAdmin(event)">
            <div class="d-flex justify-content-between">
                <a class="item-navbar" onclick="handleActiveNavbar(event)">
                    <span class="material-symbols-outlined icon-sub-navbar" >
                            settings
                        </span>
                        <label class="show-navbar">Settings</label>
                    
                </a>
                
            </div>
        </li>

    </ul>

</div>



