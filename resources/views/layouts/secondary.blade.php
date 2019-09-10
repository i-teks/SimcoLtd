<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

@include('layouts.partials.meta')
</head>
<body style="min-height: 100vh; position:relative;">

<div id="secondary">

@include('layouts.partials.header-fluid')

<main>
<div class="d-flex container-fluid page">

<!--
  <section class="hero">
    <div class="row m-0">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="text-white">Innovation</h2>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon class="svg--sm" fill="white" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"></polygon>
    <polygon class="svg--lg" fill="white" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100"></polygon>
    </svg>
  </section>
-->

@yield('sidebar')

  <div class="bg-white px-3" id="page-content-wrapper">
    <div class="row justify-content-centers m-0">
      <div class="col-md-12 pt-4 pb-5">


<!--
        <div class="row">
        <div class="bg-white col-lg-4">
-->
<!--
          <div id="left_sidebar">

            <h4 class="mag_top">Products</h4>
            <ul id="left_side_menu">
              <li class="specialty-automotive "><a href="http://www.simcoltd.com/products/specialty-automotive">Specialty Automotive</a></li>
              <li class="electric-hybrid active"><a href="http://www.simcoltd.com/products/electric-hybrid">Electric / Hybrid Vehicle</a></li>
              <li class="recreational-agricultural "><a href="http://www.simcoltd.com/products/recreational-agricultural">Recreational &amp; Agricultural</a></li>
              <li class="commercial "><a href="http://www.simcoltd.com/products/commercial">Commercial Vehicle</a></li>
              <li class="military "><a href="http://www.simcoltd.com/products/military">Military Vehicle</a></li>
              <li class="consumer-aftermarket "><a href="http://www.simcoltd.com/products/consumer-aftermarket">Consumer Aftermarket</a></li>
            </ul>

            <div class="grey" style="margin-top:30px;">
            	<h4 class="grey">Contact Info</h4>
            	<div style="margin-top:15px;">
            		<strong>Simco, Ltd.</strong><br>
            		<span class="text_small">1 DeMille Rd.<br>
            		Lapeer, MI 48446 USA </span>
              </div>
            	<div style="margin-top:15px;">
            		<strong>Phone Number</strong><br>
            		<span class="text_small">(810) 245-0188 </span>
              </div>
            	<div style="margin-top:15px;">
            		<strong>Office hours</strong><br>
            		<span class="text_small">Monday through Friday<br>
            		8 am - 5 pm EST. </span>
              </div>
            	<div class="read_more text_left" style="margin-top:15px;">
            		<a href="http://www.simcoltd.com/contact">more info »</a>
              </div>
            </div>

          </div>
-->
<!--
        </div>
        <div class="col-lg-8">
-->
        @yield('content')
<!--
        </div>
        </div>
-->
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
