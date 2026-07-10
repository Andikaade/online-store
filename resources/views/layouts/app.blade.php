<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Store - Your Best Marketplace" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- Styles --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>

  <body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Main Content --}}
    <main>
      @yield('content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
