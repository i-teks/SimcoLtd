@extends('layouts.master-sidebar')

@section('title')
  Products - Instrument Clusters & Gauges - Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
  <h1>Instrument Clusters & Gauges</h1>
  <h5>Custom design. Cutting-edge engineering.</h5>
  <img src="{{ asset('/assets/images/engineering-cluster.png') }}" class="float-right engineering-cluster">
  <p>Simco, Ltd. is an industry leader in the design, engineering and manufacturing of a wide range of specialty gauges, instrument clusters and driver information displays for leading automotive, commercial, military and recreational OEM manufacturers worldwide.</p>
  <h5>Gauged to meet your toughest demand.</h5>
  <p>From high end supercars to the latest fully-electric vehicles, Simco works with a wide range of specialty OEM manufacturers and customizers to develop gauges and instrument clusters that not only enhance the styling and functionality of their vehicles, but also meet the heightened performance demands required by their customers.</p>
  <h5>As many options as there are cars on the road.</h5>
  <p>To meet practically any vehicle need, we offer custom circuits, software, gauges and lighting, as well as custom graphics, injected molded trim, custom finishing and a wide array of assembly options, either utilizing the original instrument cluster or by developing new custom instruments and components.</p>
@endsection

@section('scripts')
@endsection
