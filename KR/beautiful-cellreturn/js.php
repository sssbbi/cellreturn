<script type="text/javascript">
  $(window).on('scroll', function(){
    var scrTop = $(this).scrollTop() + $('#header').outerHeight(),
        scrBtm = $(this).scrollTop() + $(this).height(),
        lifeWrapTop = $('.board-wrap').offset().top,
        lifeWrapBtm = $('.board-wrap').offset().top + $('.board-wrap').outerHeight();
    
    if ( scrTop > lifeWrapTop ) {
      if ( scrBtm < lifeWrapBtm ) {
        $('.fix-menu-title').addClass('fix');
      } else {
        $('.fix-menu-title').removeClass('fix').addClass('btm');
      }
    } else {
      $('.fix-menu-title').removeClass('fix btm');
    }
  });
</script>