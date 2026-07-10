<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ asset('images/logo.svg') }}" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
              <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ (request()->is('category')) ? 'active' : '' }}">
              <a href="{{ route('categories') }}" class="nav-link">Categories</a>
            </li>
            <li class="nav-item {{ (request()->is('rewards')) ? 'active' : '' }}">
              <a href="#" class="nav-link">Reward</a>
            </li>
            <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
              <a href="#" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
              <a href="#" class="btn btn-success px-4 text-white">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
