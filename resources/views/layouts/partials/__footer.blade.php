<footer class="footer">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

<div class="container">
<div class="pt-5 pb-5">

  <div class="row mb-5">

    <div class="col-lg-4 col-xs-12 text-light d-none d-lg-block">
      <h3 class="text-white mt-lg-0 mt-sm-4">Contact Us</h3>
      <p>Simco Ltd is an innovative engineering and manufacturing company dedicated
      to producing a wide range of instrument gauges, electronic assemblies, wireless
      products, and fabricated parts for a worldwide clientele.</p>
      <p class="mb-0"><i class="fa fa-map-marker-alt mr-3" aria-hidden="true"></i>&nbsp;1 DeMille Road, Lapeer MI 48446</p>
      <p class="mb-0"><i class="fa fa-phone mr-3" aria-hidden="true"></i>(810) 245-0188</p>
      <p><i class="fa fa-envelope mr-3" aria-hidden="true"></i>info@simcoltd.com</p>
    </div>

    <div class="text-uppercase col-lg-3 col-xs-12 d-none d-lg-block">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="/products" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">Products</a>
        </li>
        <li class="nav-item">
          <a href="/industries" class="nav-link {{ Request::is('industries*') ? 'active' : '' }}">Industries</a>
        </li>
        <li class="nav-item">
          <a href="/technology" class="nav-link {{ Request::is('technology*') ? 'active' : '' }}">Technology</a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link {{ Request::is('about*') ? 'active' : '' }}">About</a>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
        </li>
      </ul>
    </div>

    <div class="text-center text-lg-right col-lg-5 col-xs-12 about-company">
      <a href="{{ url('/') }}">
        <img src="{{{ asset('assets/images/simco_logo_reverse.png') }}}" height="50" alt="SimcoLtd">
      </a>
      <p class="text-light mt-3">
        Based in Lapeer, Michigan U.S.A, our ISO-9001 certified facility offers OEM engineering experience,
        exciting new product designs and flexible manufacturing capabilities to meet our customer’s unique needs.
      </p>
    </div>

  </div>

  <div class="row">
    <div class="col copyright text-center text-lg-left">
      <p style="line-height: 1rem;">
        <small class="text-white-50">
          © 2019 Simco Ltd. All Rights Reserved.<br>
          Powered by i-TekSystems Interactive
        </small>
      </p>
    </div>
  </div>

</div>
</div>

</nav>
</footer>
