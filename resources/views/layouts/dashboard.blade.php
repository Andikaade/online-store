<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- Style CSS -->
    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    <d class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">

        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/dashboard-store-logo.svg" alt="Store Logo" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a href="{{route('dashboard') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}">
              Dashboard
            </a>
            <a href="{{route('dashboard-products') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }}">
              My Products
            </a>
            <a href="{{ route('dashboard-transactions') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}">
              My Transactions
            </a>
            <a href="{{ route('dashboard-settings-store') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}">
              Store Settings
            </a>
            <a href="{{ route('dashboard-settings-account') }}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">
              My Account
            </a>
            <a
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="list-group-item list-group-item-action"
            >
            Sign Out
            </a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
        </form>

        <!-- Page Content -->
        <div id="page-content-wrapper">

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
              <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                &laquo; Menu
              </button>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                      <img src="/images/user_pc.png" alt="Profile" class="rounded-circle mr-2 profile-picture" style="object-fit: cover" />
                      Hi, {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item"
                            >Settings</a
                        >

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li> <!-- Perbaikan: Penutupan tag li dipindah ke sini agar rapi -->

                  <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                        @php
                            $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                        @endphp
                        @if ($carts > 0)
                            <img src="/images/icon-cart-filled.svg" alt="" />
                            <div class="card-badge">{{ $carts }}</div>
                        @else
                            <img src="/images/icon-cart-empty.svg" alt="" />
                        @endif
                    </a>
                  </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Hi, {{ Auth::user()->name }}</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                        @php
                            $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                        @endphp
                        Cart
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Content -->
              @yield('content')


        </div>
        <!-- /#page-content-wrapper -->

      </div>
      <!-- /#wrapper -->
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JavaScript (Hanya memakai 1 library versi 2.3.4) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>

    <!-- Sidebar Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="/script/navbar-scroll.js"></script>
    @stack('addon-script')
  </body>
</html>
