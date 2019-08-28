<script>
/* Activate Bootstrap Dropdown Behaviors on Hover and Leave */
function toggleDropdown (e){
  const _d = $(e.target).closest(".dropdown"),
      _m = $(".dropdown-menu", _d);
  setTimeout(function(){
    const shouldOpen = e.type !== "click" && _d.is(":hover");
    _m.toggleClass("show", shouldOpen);
    _d.toggleClass("show", shouldOpen);
    $("[data-toggle='dropdown']", _d).attr("aria-expanded", shouldOpen);
  }, e.type === "mouseleave" ? 30 : 0);
}
$("body")
  .on("mouseenter mouseleave",".dropdown",toggleDropdown)
  .on("click", ".dropdown-menu a", toggleDropdown);
/* Clickable Link Behavior for Parent Element in Dropdown IF Dropdown is Open */
$('.navbar .dropdown > a').click(function() {
  /* if ($('.dropdown-toggle').attr('aria-expanded') === 'true') { */
  if ($(this).attr('aria-expanded') === 'true') {
    location.href = this.href;
  }
});
</script>
