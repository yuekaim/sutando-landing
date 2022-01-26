$('.landing-bg').mousemove(function( event ) {
  alert('hello');
  var x = event.pageX;
  var y = event.pageY;
  $('.landing-bg').css('transform', 'skew(50deg)');
  $('.landing-bg').css('width', '150vw');
});
