$(document).ready( function (){

 $( "#sidebar-wrapper" ).simpleSidebar({
      settings: {
        opener: "#menu-toggle",
        wrapper: ".site-wrapper",
        animation: {
          easing: "easeOutQuint"
        }
      },
      sidebar: {
        align: "right",
        width: 275,
        closingLinks: '.btn-default',
      }
 });

 $("#menu-close").click(function(e) {
	var snd = new Audio("assets/sounds/button-4.wav");
        snd.play();
 });
 $("#menu-toggle").click(function(e) {
	var snd = new Audio("assets/sounds/button-8.wav");
	snd.play();
 });
$('#secondaryBackgroundColor').iris({
    hide: false,
    palettes: true,
    change: function(event, ui) {
  var submitdata = {
  "backgroundcolor": ui.color.toString(),
  };
  $.post("website/secondaryBackground", submitdata);
    $(".intro").css( 'background-color', ui.color.toString());
    $(".beauty").css( 'background-color', ui.color.toString());
    }
});
$('#secondaryFontColor').iris({
    palettes: true,
    change: function(event, ui) {
      var submitdata = {
       "fontcolor": ui.color.toString(),
      };
      $.post("website/secondaryFontColor", submitdata);
      $(".intro").css( 'color', ui.color.toString());
      $(".beauty").css( 'color', ui.color.toString());
    }
});

});
