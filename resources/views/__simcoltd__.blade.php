<!-- Begin Home Page Content -->
<script type="text/javascript">
$(function() {
  setInterval(Slider, 15000);
  $('.after_title').insertAfter('h1');
});
var imgs =
[
  'http://www.simcoltd.com/template/default/images/img_cluster_2.jpg',
  'http://www.simcoltd.com/template/default/images/img_cluster_3.jpg',
  'http://www.simcoltd.com/template/default/images/img_cluster_1.jpg'
];
</script>
<div style="height:115px; width:196px; margin-right:26px; margin-top:10px; position:relative;" class="left">
  <img alt="" rel="0" class="slide_img" src="http://www.simcoltd.com/template/default/images/img_cluster_1.jpg" style="position:absolute" />
  <img alt="" rel="1" class="slide_img hidden" src="http://www.simcoltd.com/template/default/images/img_cluster_2.jpg" style="position:absolute" />
  <img alt="" rel="2" class="slide_img hidden" src="http://www.simcoltd.com/template/default/images/img_cluster_3.jpg" style="position:absolute" />
</div>
<script type="text/javascript">
var cnt 	= imgs.length;
var currSlide = 0;
var nextSlide = 1;

function Slider() {
  if(nextSlide >= cnt){
    nextSlide = 0;
  }

  $('.slide_img[rel=' + currSlide + ']').fadeOut(1500);
  $('.slide_img[rel=' + nextSlide + ']').fadeIn(2500);

  currSlide = nextSlide;
  nextSlide++;
}
</script>
<div id="main_content">
  <h3 style="padding-top:10px;">Custom design. Cutting-edge engineering.</h3>
  <p>Simco, Ltd. is an industry leader in the design, engineering and manufacturing
    of a wide range of specialty gauges, instrument clusters and driver information
    displays for leading automotive, commercial, military and recreational OEM
    manufacturers worldwide.</p>

  <div class="clear mag_bot_small"><!-- empty --></div>

  <table border="0" cellpadding="0" cellspacing="0" class="grey_table" width="100%">
  <tbody>
    <tr>
      <th class="grey_box">
        <img alt="" class="right" src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311321542-2bf5ad296f-165/320x320" style="border-width: 0pt; border-style: solid; float: right;" />
        <h5><strong>Engineering</strong></h5>
      </th>
      <th style="width:11px">&nbsp;</th>
      <th class="grey_box">
        <img alt="" class="right" src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311321544-1bb59dd827-167/320x320" style="border-width: 0pt; border-style: solid; float: right;" />
        <h5><strong>Manufacturing</strong></h5>
      </th>
      <th style="width:13px">&nbsp;</th>
      <th class="grey_box" valign="top">
        <img alt="" class="right" src="http://www.simcoltd.com/images/profile-admin-administrator-1-time1311321543-5425be5781-166/320x320" style="border-width: 0pt; border-style: solid; float: right;" />
        <h5 style="margin-top:0"><strong>Advanced Prototyping</strong></h5>
      </th>
      <th style="width:11px">&nbsp;</th>
      <th class="red_box text_left" rowspan="3" valign="top">
        WE CREATE GAUGES FOR
        <ul>
          <li><a href="http://www.simcoltd.com/products/specialty-automotive/">Specialty Automotive</a></li>
          <li><a href="http://www.simcoltd.com/products/electric-hybrid/">Electric/Hybrid Vehicles</a></li>
          <li><a href="http://www.simcoltd.com/products/recreational-agricultural/">Recreational &amp; Agricultural<br />Vehicles</a></li>
          <li><a href="http://www.simcoltd.com/products/commercial/">Commercial Vehicles</a></li>
          <li><a href="http://www.simcoltd.com/products/military/">Military Vehicles</a></li>
          <li><a href="http://www.simcoltd.com/products/consumer-aftermarket/">Consumer Aftermarket</a></li>
        </ul>
      </th>
    </tr>
    <tr>
      <td class="grey_box pad_bot">From graphics and lighting to final design and more, Simco offers the engineering capabilities to handle your toughest projects.</td>
      <td>&nbsp;</td>
      <td class="grey_box">Our in-house, state-of-the-art manufacturing facilities provide consistent quality in every instrument we manufacture.</td>
      <td>&nbsp;</td>
      <td class="grey_box">Our advanced prototyping capabilities support early development phases and can help you market new concept vehicles.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="grey_box"><div class="read_more"><a href="http://www.simcoltd.com/capabilities/engineering/">learn More &raquo;</a></div></td>
      <td>&nbsp;</td>
      <td class="grey_box"><div class="read_more"><a href="http://www.simcoltd.com/capabilities/manufacturing/">learn More &raquo;</a></div></td>
      <td>&nbsp;</td>
      <td class="grey_box"><div class="read_more"><a href="http://www.simcoltd.com/capabilities/advanced-prototyping/">learn More &raquo;</a></div></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
  </table>
</div>
<div class="clear"><!-- empty --></div>
<!-- End Home Page Content -->
