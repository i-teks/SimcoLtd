@extends('layouts.master-sidebar')

@section('title')
  Products - Instrument Clusters & Gauges - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Instrument Clusters & Gauges</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-cluster.png') }}" class="float-right cluster" alt="">
    <h5>Custom design. Cutting-edge engineering.</h5>
    <p class="pb-2">Simco, Ltd. is an industry leader in the design, engineering and manufacturing of a wide range of specialty gauges, instrument clusters and driver information displays for leading automotive, commercial, military and recreational OEM manufacturers worldwide.</p>
    <h5>Gauged to meet your toughest demand.</h5>
    <p class="pb-2">From high end supercars to the latest fully-electric vehicles, Simco works with a wide range of specialty OEM manufacturers and customizers to develop gauges and instrument clusters that not only enhance the styling and functionality of their vehicles, but also meet the heightened performance demands required by their customers.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-gauge-mahindra.jpg') }}" class="float-left" style="width:25%; margin: 10px 10px 0 10px;" alt="">
    <h5>As many options as there are cars on the road.</h5>
    <p class="pb-2">To meet practically any vehicle need, we offer custom circuits, software, gauges and lighting, as well as custom graphics, injected molded trim, custom finishing and a wide array of assembly options, either utilizing the original instrument cluster or by developing new custom instruments and components.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-gauge-f150-harley-edition.jpg') }}" class="float-right" style="width:40%; margin:10px 0 10px 10px;" alt="">
    <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis commodo odio aenean sed. Enim nunc faucibus a pellentesque sit amet. Nisl nisi scelerisque eu ultrices vitae auctor eu. Tellus at urna condimentum mattis pellentesque. Arcu risus quis varius quam. Consectetur adipiscing elit ut aliquam purus. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices.</p>
  </div>
</div>
@endsection

@section('scripts')
@endsection
