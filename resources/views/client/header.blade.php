<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid p-3">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img src="{{asset('images/logo.png')}}" width="150" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
      <span class="material-symbols-outlined">
        menu
      </span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-lg-auto mb-2 justify-content-center mx-5 pm-menu"">
        <li><a href=" #" class="nav-link px-2 text-secondary active-menu">Buy</a></li>
        <li><a href="#" class="nav-link px-2">Sell</a></li>
        <li><a href="/myads" class="nav-link px-2">My Ads</a></li>
        <li><a href="#" class="nav-link px-2">SWAP</a></li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 justify-content-center">
          <li class=" me-4">
            <a href="/user/signin-email" class="btn btn-log-in">Sign In</a>
          </li>
          <li class=" me-4">
            <div class="btn-boxed">
              <div class="btn-boxed-child"><a href="/user/signup-email">Sign Up</a></div>
            </div>
          </li>
          <li class=" me-4">
            <a class="btn btn-h-i  px-3 " href="" role="button" style=""><span style="font-size: 16px;" class="material-symbols-outlined">file_download</span></a>
          </li>

          <li>
            <div class="dropdown me-4">

              <a href="" id="dropdownMenuOffset" data-bs-toggle="dropdown"><img src="{{asset('images/en.png')}}" alt=""></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <li><a class="dropdown-item" href="#"><img src="{{asset('images/en.png')}}" alt=""></a></li>
              </ul>
            </div>
          </li>
          <!-- <li class=" me-2"> <select class="form-select form-select-sm form-select-language" aria-label=".form-select-sm example">
          <option selected>English</option>
          <option value="1">VietNam</option>
          <option value="2">Lao</option>
          <option value="3">Campuchia</option>
        </select></li> -->
          <li><select class="form-select form-select-sm form-select-money" aria-label=".form-select-sm example">
              <option selected>USD</option>
              <option value="1">VND</option>
            </select></li>
        </ul>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- Menu modal -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel"><img src="{{asset('images/logo.png')}}" width="150" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" /></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <ul class="nav  flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active-menu" aria-current="page">
          Buy
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          Sell
        </a>
      </li>
      <li>
        <a href="/myads" class="nav-link link-dark">
          My Ads
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          Swap
        </a>
      </li>
      <li class=" my-2"><select class="form-select form-select-sm form-select-money" aria-label=".form-select-sm example">
          <option selected>USD</option>
          <option value="1">VND</option>
        </select></li>
      <li class=" my-2"> <select class="form-select form-select-sm form-select-language" aria-label=".form-select-sm example">
          <option selected>English</option>
          <option value="1">VietNam</option>
        </select></li>
      <a href="/user/signin-email" class="btn btn-log-in my-2">Log In</a>
      <a href="/user/signup-email" class="btn btn-log-in my-2">Sign Up</a>
    </ul>
  </div>
</div>