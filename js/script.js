
// init

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
  $('select').styler();
  var owl = $("#owl_carousel");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [450, 1],
        [600, 2],
        [700, 3],
      ],
      navigation : true
  });

 });
$(function(){
  $('.scroll-pane').jScrollPane();
});