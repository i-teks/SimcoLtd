<!-- Sidebar -->
<div class="sidebar" id="sidebar-wrapper">
  <div class="sidebar-heading"><h6 class="mb-0">Technology</h6></div>
  <ul class="list-group list-group-flush text-uppercase">
    <li class="align-middle {{ Request::is('technology/advanced-engineering*') ? 'active' : '' }}">
      <a href="/technology/advanced-engineering" class="list-group-item list-group-item-action {{ Request::is('technology/advanced-engineering*') ? 'active' : '' }}">
        Advanced Engineering
      </a>
    </li>
    <li class="align-middle {{ Request::is('technology/manufacturing*') ? 'active' : '' }}">
      <a href="/technology/manufacturing" class="list-group-item double-line list-group-item-action {{ Request::is('technology/manufacturing*') ? 'active' : '' }}">
        State-of-the-Art Manufacturing
      </a>
    </li>
    <li class="align-middle {{ Request::is('technology/cloud-based-solutions*') ? 'active' : '' }}">
      <a href="/technology/cloud-based-solutions" class="list-group-item list-group-item-action {{ Request::is('technology/cloud-based-solutions*') ? 'active' : '' }}">
        Cloud-based Solutions
      </a>
    </li>
  </ul>

  @include('layouts.partials.sidebar-contact-info')

</div>
<!-- End Sidebar -->
