<script type="text/javascript">
  $(function(){
    var total = $('.history-content-slider').find('.swiper-slide').length;
    $('.slider-controller .total').text(total);
  });

  var hisSwiper = new Swiper('.history-content-slider', {
    slidesPerView: 1,
    speed:600,
    loop: false,
    navigation: {
      nextEl: '.slider-controller .swiper-button.next',
      prevEl: '.slider-controller .swiper-button.prev',
    },
    on: {
      slideChangeTransitionEnd: function () {
        var nowIndex = hisSwiper.activeIndex;
        $('.img-number .now').text(nowIndex+1);
      },
    }
  });
</script>
