$(function() {
 $('#toAbout').click(function(){
  $doc = $('body');
  var scrTop = $('#about-keigen').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
 });
 $('#toBook').click(function(){
  $doc = $('body');
  var scrTop = $('#book').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
 });
 $('#toImformation').click(function(){
  $doc = $('body');
  var scrTop = $('#imformation').offset().top;
  $doc.animate({ scrollTop: scrTop -100 }, 'slow', 'swing');
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
});