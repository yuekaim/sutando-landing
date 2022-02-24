// $('.landing-bg').mousemove(function( event ) {
//   var x = event.pageX;
//   var y = event.pageY;
//   $('.landing-bg').css('transform', 'skew(50deg)');
//   $('.landing-bg').css('width', '150vw');
// });

$('.subscribe').first().click(function() {
  $('#mc_embed_signup').show();
});

$('.bg-overlay').first().click(function() {
  $('#mc_embed_signup').hide();
});
