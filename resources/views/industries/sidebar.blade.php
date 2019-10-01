<!-- Sidebar -->
<div class="sidebar" id="sidebar-wrapper">
  <div class="sidebar-heading"><h6 class="mb-0">Industries</h6></div>
  <ul class="list-group list-group-flush text-uppercase">
    <li class="align-middle {{ Request::is('industries/specialty*') ? 'active' : '' }}">
      <a href="/industries/specialty" class="list-group-item list-group-item-action {{ Request::is('industries/specialty*') ? 'active' : '' }}">
        Specialty OEM
      </a>
    </li>
    <li class="align-middle {{ Request::is('industries/electric-hybrid*') ? 'active' : '' }}">
      <a href="/industries/electric-hybrid" class="list-group-item list-group-item-action {{ Request::is('industries/electric-hybrid*') ? 'active' : '' }}">
        Electric / Hybrid
      </a>
    </li>
    <li class="align-middle {{ Request::is('industries/recreational-military*') ? 'active' : '' }}">
      <a href="/industries/recreational-military" class="list-group-item double-line list-group-item-action {{ Request::is('industries/recreational-military*') ? 'active' : '' }}">
        Recreational & <br>Military
      </a>
    </li>
    <li class="align-middle {{ Request::is('industries/consumer-products*') ? 'active' : '' }}">
      <a href="/industries/consumer-products" class="list-group-item list-group-item-action {{ Request::is('industries/consumer-products*') ? 'active' : '' }}">
        Consumer Products
      </a>
    </li>
  </ul>
</div>
<!-- End Sidebar -->
