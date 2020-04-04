$(function() {
 $('#toAbout').click(function(){
  $doc = $('body');
  var scrTop = $('#about-keigen').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
  $('#js-sp-nav-menu').removeClass('active');
 });
 $('#toBook').click(function(){
  $doc = $('body');
  var scrTop = $('#book').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
  $('#js-sp-nav-menu').removeClass('active');
 });
 $('#toImformation').click(function(){
  $doc = $('body');
  var scrTop = $('#imformation').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
  $('#js-sp-nav-menu').removeClass('active');
 });
  //フッターを最下部に固定
  var $ftr = $('#footer');
  if (window.innerHeight > $ftr.offset().top + $ftr.outerHeight())   {
      $ftr.attr({
          'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) + 'px;'
      });
    }
  //spメニュー
  $('.js-toggle-sp-menu').click(function(){
    $(this).toggleClass('active');
    $('.js-toggle-sp-menu-target').toggleClass('active');
  });

  $(window).outerWidth(function(){
      var x = $(window).outerWidth();
      var y = 767;
      if (x <= y) {
          $('#js-classtaget').addClass('js-toggle-sp-menu-target');
      }else{
          $('#js-classtaget').removeClass('js-toggle-sp-menu-target');
      }
  });
});