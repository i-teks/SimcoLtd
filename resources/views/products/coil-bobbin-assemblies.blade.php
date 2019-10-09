@extends('layouts.master-sidebar')

@section('title')
  Products - Coil Bobbin Assemblies- Simco Ltd. Specialty Innovation and Manufacturing Company
@endsection

@section('sidebar')
  @include('products.sidebar')
@endsection

@section('content')
<style>
#graybox-wrapper .list-group-item {
    background: url(http://www.simcoltd.com/template/default/images/small_black_arrow.png) no-repeat 0 center;
    border: none;
    line-height: 1rem;
    padding: 0 0 0 .875rem;
    margin-bottom: 3px;
}
</style>
<div class="row">
  <div class="col-12">
    <h1>Coil Bobbin Assemblies</h1>
    <img src="{{ asset('/assets/images/products/simcoltd-coil-bobbins.jpg') }}" class="float-right coil-bobbins">
    <h5>Micro Movement. Sometimes, the best things do come in small packages.</h5>
    <p>Our team has developed several magnetic coil bobbin designs utilized throughout our product line. One such design that we call the “Micro Movement” is a patented device using Micro Air Core (MAC) technology. It not only offers the most accurate and reliable meter movement in the industry, its extremely compact housing enables thinner instrumentation, greater lighting freedom and nearly unlimited gauge design. By soldering directly to printed circuit boards using either front or rear mounting options, our MAC movements take up minimal space while providing pinpoint accuracy under any condition.</p>
    <p>The MAC movement is available for both gauge and cluster manufacturers, and can be easily controlled using standard off-the-shelf circuitry.</p>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-5">
    <img src="{{ asset('/assets/images/products/simcoltd-mac-movement-competitors.jpg') }}" width="100%" alt="">
  </div>
  <div class="col-12 col-md-3">
    <h6><em>"The MAC Movement is as small as a dime yet performs as a giant against its competition."</em></h6>
    <small>U.S. patents: 5,686,832; 6,046,583 & 6,323,637 Japan patent: 4017666</small>
  </div>
  <div id="graybox-wrapper" class="col-12 col-md-4" style="background-color: #ddd; line-height: 1.25rem; font-size: 0.875rem; padding: 1rem;">
      <p>The MAC movement can be found in high profile vehicles such as:</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Dodge SRT-10</li>
        <li class="list-group-item">Ford GT</li>
        <li class="list-group-item">Chevrolet Cobalt</li>
        <li class="list-group-item">Saturn Ion Redline</li>
        <li class="list-group-item">Saleen Specialty OEM</li>
        <li class="list-group-item">NASCAR</li>
        <li class="list-group-item">Harley Davidson Motorcycles</li>
        <li class="list-group-item">Bombardier ATV</li>
      </ul>
  </div>
</div>
@endsection

@section('scripts')
@endsection
