<footer class="footer footer--sticky-bottom">
<div class="container-fluid">

  <div class="row footer-navbar">

    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="collapse navbar-collapse text-uppercase justify-content-center">
      <ul class="nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Home</a>
        </li>
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
      </div>
      </ul>
    </nav>
    </div>

  </div>
  <div class="row bg-dark">

    <div class="col-12 copyright text-center">
      <p style="line-height: 1rem;">
          © 2019 Simco Ltd. All Rights Reserved.<br>
    			<a href="https://goo.gl/maps/7wv2Sr2hXj4AKFXz5" target="_blank" style="color:#6d6d6d">1 DeMille Rd. Lapeer, MI 48446 USA</a><br>
          Phone: <a href="tel:1-810-245-0188" style="color:#6d6d6d">(810) 245-0188</a>
      </p>
    </div>

  </div>

</div>
</footer>
