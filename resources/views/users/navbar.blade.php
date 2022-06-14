<div class="navbar-admin">
    <div class="navbar-icon">
        <span class="material-symbols-outlined navbar-icon-reverse" onclick="toggleNavbar()">
            keyboard_double_arrow_left
        </span>
    </div>
    <ul>
        <li class="py-2">
            <a href="#" class="item-navbar active-navbar" onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined" onclick="showNavbar()">
                    description
                </span>
                <label class="show-navbar">Overview</label>
            </a>
        </li>
        <li class="py-2">
            <a href="/user/history/deposit-withdraw" class="item-navbar" onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined" onclick="showNavbar()">
                    credit_card
                </span>
                <label class="show-navbar">Payment methods</label>
            </a>
        </li>
        <li class="py-2">
            <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined" onclick="showNavbar()">
                    shield
                </span>
                <label class="show-navbar">Security</label>
            </a>
        </li>
        <li class="py-2">
            <a href="/kyc" class="item-navbar" onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined" onclick="showNavbar()">
                    person
                </span>
                <label class="show-navbar">Personal Verification</label>
            </a>
        </li>
        <li class="py-2">
            <a href="#" class="item-navbar" onclick="handleActiveNavbar(event)">
                <span class="material-symbols-outlined" onclick="showNavbar()">
                    settings
                </span>
                <label class="show-navbar">Settings</label>
            </a>
        </li>
    </ul>

</div>
