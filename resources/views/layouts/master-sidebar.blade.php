<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

@include('layouts.partials.meta')
</head>
<body><!-- class="bg-light" -->

<div id="master">

@include('layouts.partials.header')

<main>
<div class="d-flex container page content">

  @yield('sidebar')

  <div class="bg-white px-3 border-left" id="page-content-wrapper" style="margin:0; padding:0;">
    <div class="row justify-content-centers m-0">
      <div class="col-md-12 pt-4 pb-4">

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
