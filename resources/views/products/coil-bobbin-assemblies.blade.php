@extends('layouts.master-sidebar')

@section('title')
  Products - Coil Bobbin Assemblies- Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <h1>Coil Bobbin Assemblies</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-coil-bobbins.jpg') }}" class="float-right coil-bobbins" alt="">
    <h5>Micro Movement. Sometimes, the best things do come in small packages.</h5>
    <p class="pb-2">Our team has developed several magnetic coil bobbin designs utilized throughout our product line. One such design that we call the “Micro Movement” is a patented device using Micro Air Core (MAC) technology. It not only offers the most accurate and reliable meter movement in the industry, its extremely compact housing enables thinner instrumentation, greater lighting freedom and nearly unlimited gauge design. By soldering directly to printed circuit boards using either front or rear mounting options, our MAC movements take up minimal space while providing pinpoint accuracy under any condition.</p>
    <p class="pb-2">The MAC movement is available for both gauge and cluster manufacturers, and can be easily controlled using standard off-the-shelf circuitry.</p>
    <img src="{{ asset('/assets/images/products/simcoltd-mac-movement-competitors.jpg') }}" class="float-left" style="width:40%; margin:10px 0 0 0;" alt="">
    <h5>The Micro Movement is small as a dime yet performs as a giant against its competition.</h5>
    <p class="pb-2">Simco Ltd’s patented Micro Movement is produced in more than 15 different variations for design flexibility and pointer style interface. The MAC movement has been developed in many high profile vehicles such as:</p>
    <img src="{{ asset('/assets/images/products/simcoltd-coil-bobbin-pcb.jpg') }}"  class="float-right" style="width:40%; margin:10px 0 0 10px;" alt="">
    <div id="content-bullet-wrapper">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Dodge SRT-10</li>
        <li class="list-group-item">Ford GT</li>
        <li class="list-group-item">Chevrolet Cobalt</li>
        <li class="list-group-item">Saturn Ion Redline</li>
        <li class="list-group-item">Saleen Specialty OEM</li>
        <li class="list-group-item">NASCAR</li>
        <li class="list-group-item">Harley Davidson Motorcycles</li>
        <li class="list-group-item">Bombardier ATV</li>
        <li class="list-group-item">Mahindra Roxor</li>
      </ul>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@endsection
