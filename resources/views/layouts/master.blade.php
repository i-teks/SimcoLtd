<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

@include('layouts.partials.meta')
</head>
<!--
// make the containing element relative in order to have
// two absolute positioned elements i.e. sticky header and footer.
-->
<body style="min-height: 100vh; position:relative;">

<div id="responsive">

@include('layouts.partials.header')

<main>
<div class="d-flex container main--page-content">

  <div class="bg-white px-3" id="page-content-wrapper">
    <div class="row justify-content-center m-0">
      <div class="col-12 pt-4 pb-4" style="padding-bottom: 30px !important;">

        @yield('content')

      </div>
    </div>
  </div>

</div>
</main>

@include('layouts.partials.footer')

</div>

@include('layouts.partials.scripts')

@yield('scripts')

</body>
</html>
