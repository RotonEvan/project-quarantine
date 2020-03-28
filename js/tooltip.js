$(description) = $(".description");

$('.enabled').hover(function() {

  $(this).attr("class", "enabled heyo");
  $(description).addClass('active');
  $(description).html($(this).attr('title'));
}, function() {
  $(description).removeClass('active');
});

$(document).on('mousemove', function(e) {

  $(description).css({
    left: e.pageX,
    top: e.pageY
    tooltipSpan.style.top = (y + 20) + 'px';
    tooltipSpan.style.left = (x + 20) + 'px';
  });

});
