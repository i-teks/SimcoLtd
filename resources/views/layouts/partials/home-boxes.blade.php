<style>
.row.adventure {
    text-align: center;
    margin: 0 -0.5rem;
}
.row.adventure .col-lg-4 {
    max-width: 23%;
    display: inline-block;
}
@media screen and (max-width: 1199px) {
  .row.adventure .col-lg-4 {
    max-width: 49%;
  }
}
@media screen and (max-width: 767px) {
  .row.adventure .col-lg-4 {
    max-width: 100%;
  }
}
.row.adventure .col-lg-4 .btn {
    padding: 5px;
    margin-top: -20px;
}
.row.adventure .col-lg-4 p {
  /*color: #2f2c2c;*/
  font-size: 14px;
  font-weight: 700;
    line-height: 17px;
    margin-bottom: 0.5em;
}
.btn-build {
    /*
    border: 2px solid #e61332;
    background-color: #e61332;
    */
    position: relative;
    z-index: 1;
    border-radius: 4px;
    width: 100%;
    margin-top: -28px;
}
.btn {
    font-size: 12px;
    padding: 10px 30px;
    border-radius: 0;
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
    display: inline-block;
    font-family: 'Montserrat', sans-serif;
}
.btn-build:hover {
    /*
    color: #e61332;
    background-color: #fff;
    border: 2px solid #e61332;
    */
    -webkit-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.btn:active {
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    color: #fff;
}
.btn:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    color: #fff;
}
</style>

<div class="row adventure">
  <div class="container">
    <h4 style="display:block">DISCOVER SIMCO LTD</h4>
    <div class="col-12 col-lg-4">
        <p>&nbsp;<br>PRODUCTS</p>
        <img src="/assets/images/boxes/simcoltd-products.jpg" class="lazy img-fluid content loading" style="width: 100%;" data-was-processed="true">
        <div class="col-10 offset-1"><a href="/products" class="btn btn-build text-uppercase mr-3 mb-3"><span>VIEW PRODUCTS</span></a></div>
    </div>
    <div class="col-12 col-lg-4">
      <p>ADVANCED<br>ENGINEERING</p>
        <img src="/assets/images/boxes/simcoltd-advanced-engineering.jpg" class="lazy img-fluid content loading" style="width: 100%;" data-was-processed="true">
        <div class="col-10 offset-1"><a href="/technology/advanced-engineering/" class="btn btn-build text-uppercase mr-3 mb-3"><span>VIEW EXPERTISE</span></a></div>
    </div>
    <div class="col-12 col-lg-4">
        <p>CLOUD-BASED<br>SOLUTIONS</p>
        <img src="/assets/images/boxes/simcoltd-cloud-based-solutions.jpg" class="lazy img-fluid content loading" style="width: 100%;" data-was-processed="true">
        <div class="col-10 offset-1"><a href="/technology/cloud-based-solutions" class="btn btn-build text-uppercase mr-3 mb-3"><span>VIEW IoT</span></a></div>
    </div>
    <div class="col-12 col-lg-4">
        <p>&nbsp;<br>INDUSTRIES</p>
        <img src="/assets/images/boxes/simcoltd-industries.jpg" class="lazy img-fluid content loading" style="width: 100%;" data-was-processed="true">
        <div class="col-10 offset-1"><a href="/industries" class="btn btn-build text-uppercase mr-3 mb-3"><span>VIEW USE CASES</span></a></div>
    </div>
  </div>
</div>
