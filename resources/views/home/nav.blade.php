<nav class="navbar navbar-expand-lg py-1 d-flex justify-content-between text-light fixed-top z-5 shadow-sm"
        id="nav">
        <div class="container container-nav">
          <a class="navbar-brand fw-bolder text-light" href="{{ url('/') }}"><img src="home/images/Rectangle.png" class="w-90"
              alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars menu"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav text-end">
              <li class="nav-item me-1">
                <a class="nav-link text-white" href= "{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ url('/about-us') }}">About</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ url('/pricing') }}">Packages</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-white" href="{{ url('/service') }}">Services</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-white" href="{{ url('/product/printgen') }}">Products</a>
              </li>

              <li class="nav-item me-1">
                <a class="nav-link text-white" href="{{ url('/aiimage') }}">AI</a>
              </li>

              <li class="nav-item me-1">
                <a class="nav-link text-white" href="{{ url('/contact-us') }}">Contact Us</a>
              </li>
            </ul>
          </div>

          <!-- header icon -->

          <div class="iconHeader d-flex justify-content-center align-items-center gap-2">
           <div class="dropdown">
    <button class="btn fs-6 text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="text-white">{{ strtoupper(app()->getLocale()) }}</span>
    </button>
    <ul class="dropdown-menu">
        <li><button class="dropdown-item" type="button" onclick="window.location.href='{{ route('lang.switch', 'en') }}'">EN</button></li>
        <li><button class="dropdown-item" type="button" onclick="window.location.href='{{ route('lang.switch', 'ar') }}'">AR</button></li>
    </ul>
</div>
            @if (Route::has('login'))

            @auth
            <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping" style="width: 50px; color: white"></i></a>
            <a class="btn btn-primary" href="profile">Profile</a>
            @else
                <a class="btn btn-primary" href="{{ route('login') }}">login</a>

                @endauth
            @endif


          </div>
        </div>
      </nav>
