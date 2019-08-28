<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

@include('layouts.partials.meta')
</head>
<body class="bg-light">
<div id="master">

@include('layouts.partials.header')

<main>
<div class="container page">

  <div class="container bg-white">
    <div class="row justify-content-centers m-0">
      <div class="col-md-12 pt-4 pb-5">

        <div class="row">
        <div class="col-lg-8">

        @yield('content')

        </div>
        <div class="bg-white col-lg-4">

          @include('layouts.partials.sidebar-right')

        </div>
        </div>

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
