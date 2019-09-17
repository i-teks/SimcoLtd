<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

@include('layouts.partials.meta')
</head>
<!--
// make the containing element relative in order to have
// two absolute positioned elements i.e. sticky header and footer.
-->
<body style="min-height: 100vh; position:relative;">

<div id="fluid-sidebar">

@include('layouts.partials.header-fluid')

<main>
<div class="d-flex container-fluid content">

@yield('sidebar')

  <div class="bg-white px-3 border-left" id="page-content-wrapper">
    <div class="row justify-content-centers m-0">
      <div class="col-md-12 pt-4 pb-5">

        @yield('content')

      </div>
    </div>
  </div>

</div>
</main>

@include('layouts.partials.footer-fluid')

</div>

@include('layouts.partials.scripts')

@yield('scripts')

</body>
</html>
