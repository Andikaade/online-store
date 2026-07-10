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
            <a href="{{route('dashboard') }}" class="list-group-item list-group-item-action">
              Dashboard
            </a>
            <a href="{{route('dashboard-products') }}" class="list-group-item list-group-item-action">
              My Products
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              My Transactions
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              Store Settings
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              My Account
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              Sign Out
            </a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

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
                      Hi, Annovcoer
                    </a>
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                      <a href="/dashboard-account.html" class="dropdown-item">Setting</a>
                      <div class="dropdown-divider"></div> <!-- Perbaikan: typo devider -> divider -->
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li> <!-- Perbaikan: Penutupan tag li dipindah ke sini agar rapi -->

                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block mt-2">
                      <img src="{{ asset('images/icon-cart.svg') }}" alt="Cart" />
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Hi, Annovcoer</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">Cart</a>
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
