<header class="header--sticky-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
<div class="container align-middle">

  <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{{ asset('assets/images/simco_logo_reverse.png') }}}" height="50" alt="SimcoLtd">
    <!-- {{ config('app.name', 'SimcoLtd') }} -->
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ Request::is('products*') ? 'active' : '' }}" href="/products" id="navbarProductsDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarProductsDropdownMenuLink">
          <a class="dropdown-item" href="/products/electronic-modules">Electronic Modules</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/products/wire-harness-assemblies">Wire Harness Assemblies</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/products/instrument-clusters">Instrument Clusters</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/products/graphic-overlays">Graphic Overlays</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/products/coil-bobbin-assemblies">Coil Bobbin Assemblies</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="/industries" class="nav-link {{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ Request::is('technology*') ? 'active' : '' }}" href="/technology" id="navbarTechnologyDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Technology
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarTechnologyDropdownMenuLink">
          <a class="dropdown-item" href="/technology/advanced-engineering">Advanced Engineering</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/technology/manufacturing">State-of-the-Art Manufacturing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/technology/cloud-based-solutions">Cloud-Based Solutions</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="/about" class="nav-link {{ Request::is('about*') ? 'active' : '' }}">About</a>
      </li>
      <li class="nav-item">
        <a href="/contact" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
      </li>
    </ul>
  </div>

</div>
</nav>
</header>
