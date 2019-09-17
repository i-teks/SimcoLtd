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
<div class="container page content">

  <!--
  <section class="hero">
    <div class="row m-0">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="text-white">Innovation</h2>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon class="svg--sm" fill="white" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
    <polygon class="svg--lg" fill="white" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
    </svg>
  </section>
  -->

  <div class="container bg-white">
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
