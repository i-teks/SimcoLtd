<!-- Welcome Popup -->
<div id="welcome_popup">
  <img src="http://www.simcoltd.com/template/default/images/lightbox_btn.png" alt="" border="0" class="right"  id="popup" rel="popup_content" />
  <div id="popup_content_holder">
    <h3 class="mag_bot">We've moved our Aftermarket website</h3>
    <h3 class="right"><a href="javascript:;" onclick="triggerPopupBig()">learn more</a></h3>
  </div>
</div>

<!-- Big Popup - Aftermarket -->
<div style="display:none">
  <div id="popup_big_content">
    <div class="popup_big_content_holder">
      <div style="margin-bottom:20px;"><img src="http://www.simcoltd.com/template/default/images/lightbox_logo_small.png" alt="" border="0" /></div>
      <h3>LOOKING FOR OUR AFTERMARKET CLUSTERS?</h3>
      <div class="right"><img src="http://www.simcoltd.com/template/default/images/lightbox_img.jpg" alt="" border="0" /></div>
      <div>
        You've come to the right company. However we've moved our consumer aftermarket website to
        <a href="http://www.simcoaftermarket.com/" target="_blank">SimcoAftermarket.com</a>,
        which features our full line of aftermarket instrument clusters, gauges and vehicle displays.
        <br/><br/>
        <div style="width:250px;" class="mag_top">
          <div class="arrow_popup_link"><a target="_blank" href="http://www.simcoaftermarket.com/">VISIT SimcoAftermarket.com</a></div>
          <div class="grey_text" style="margin:5px;">or</div>
          <div class="arrow_popup_link"><a href="#" id="close_welcomepopup">CONTINUE into our new website</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* -------------------------------------------------------------------------
* index welcome popup
* ------------------------------------------------------------------------- */
#welcome_popup 	{ position:absolute; top:310px; left:-303px; z-index:99; width:369px; }
#popup 			{ /*position:fixed; left:0; top:310px;*/ cursor:pointer; position:relative; z-index:10; }

#popup_content_holder
{ background:#3b3b3b; background-color:rgba(66,66,66,0.95); background-color:#fff; border-right:1px solid #e7e7e7; position:relative; top:2px; left:0; /*text-shadow:1px 1px 1px #000;*/ width:300px;
padding: 34px 40px 15px 45px; width:218px; text-align:right; height:90px; float:left;
box-shadow:0px 3px 3px rgba(0,0,0,0.2); }

#popup_content_holder h3
{ font-family:Arial, sans-serif; font-weight:bold; color:#7f7c79; font-size:22px; margin:0; line-height:24px; }
#popup_content_holder a
{ font-weight:bold; color:#de2b35; }
#popup_content_holder a:hover
{ color:#7f7c79; }

.popup_big_content_holder
{ padding:30px 0 30px 38px; color:#7f7c79; line-height:17px; text-align:left !important; font-size:14px; }
.popup_big_content_holder a
{ font-weight:bold; color:#cd3d4a; }
.popup_big_content_holder a:hover
{ color:#7f7c79; }
.popup_big_content_holder h3
{ margin-bottom:25px; font-family:Arial, sans-serif; font-weight:bold; font-size:20px; color:#9a9a9a; }
.popup_big_content_holder .arrow_popup_link a
{ background:url('http://www.simcoltd.com/template/default/images/lightbox_arrow.png') no-repeat left 2px; padding-left:15px; }
.popup_big_content_holder .grey_text
{ font-size:16px; font-weight:bold; font-style:italic; color:#a9a9a9; text-align:center; padding-right:40px; }
</style>

<script type="text/javascript">
var SlideOutAfter = 6000;
var settimeoutActive = "";

function slidePopup (callback){
  var $lefty = $('#welcome_popup');
  $lefty.animate({
    left: parseInt($lefty.css('left'),10) == 0 ? (-$lefty.outerWidth() + parseInt(65)) : 0
  });
}

$(document).ready(function() {
  $("#popup2").click(function(){
    if($('#welcome_popup').css('left').replace('px','') < 0){
    window.clearTimeout(settimeoutActive)
    window.settimeoutActive = setTimeout("slidePopup()", SlideOutAfter );
  }
  slidePopup();
});

$("#popup").click(function(){
  triggerPopupBig();
});

$('#close_welcomepopup').live('click',function(el){
  $.fancybox.close();
  el.preventDefault();
})

});

window.onload = function(){
  if(!$.cookie('popup')){
    slidePopup();
    $.cookie('popup', '1');
    window.clearTimeout(settimeoutActive);
    window.settimeoutActive = setTimeout("slidePopup()", SlideOutAfter );
  }
}

function triggerPopupBig (){
  $.fancybox(
  $('#popup_big_content').html(),
  {
    'autoDimensions'	: false,
    'width'         	: 600,
    'height'        	: 340,
    'transitionIn'		: 'fade',
    'transitionOut'		: 'none',
    'overlayColor'		: '#000000',
    'overlayOpacity'	: 0.8,
    'padding'			:0,
    'showCloseButton'	: false
  }
  )
}
</script>
