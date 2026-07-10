<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="/index.html" class="navbar-brand">
          <img src="{{ asset('images/logo.svg') }}" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item">
              <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="navbar-item">
              <a href="/categories.html" class="nav-link">Categories</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link">Reward</a>
            </li>
          </ul>
          <!-- Destop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                >
                  <img
                    src="/images/user_pc.png "
                    alt=""
                    class="rounded-circle mr-2 profile-picture"
                    style="object-fit: cover"
                  />Hi, Annovcoer</a
                >
                <div class="dropdown-menu">
                  <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                  <a href="/dashboard-account.html" class="dropdown-item"
                    >Setting</a
                  >
                  <div class="dropdown-devider"></div>
                  <a href="/" class="dropdown-item">Logout</a>
                </div>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block mt-2">
                    <img src="/images/icon-cart-empty.svg" alt="">
                  </a>
                </li>
              </li>
          </ul>
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
