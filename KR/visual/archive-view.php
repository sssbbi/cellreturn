<div class="pop-con archive-view">
	<div class="pop-content">
	    <div class="archive-view-list">
            <button type="button" class="mfp-close"></button>
        </div>
		<div class="archive-view-img">
			<!-- 이미지 사이즈 640x840 -->
			<div class="img-slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="../assets/images/visual/archive_list_img.jpg" alt="이미지 1장">
					</div>
					<div class="swiper-slide">
						<img src="../assets/images/visual/archive_list_img2.jpg" alt="이미지 2장">
					</div>
				</div>

				<div class="swiper-button prev xi-angle-left-thin"></div>
    		<div class="swiper-button next xi-angle-right-thin"></div>
        </div>

        <div class="img-number">
            <span class="now">1</span>
            <span>/</span>
            <span class="total"></span>
        </div>
    </div>
    <div class="archive-view-title">
        No.12 - 2020년 봄/여름 호
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	var total = $('.img-slider .swiper-slide').length;
	$('.img-number .total').text(total);
});

var imgSwiper = new Swiper('.img-slider', {
	effect: 'flip',
  grabCursor: true,
	speed:600,
	loop: false,
	navigation: {
    nextEl: '.img-slider .swiper-button.next',
    prevEl: '.img-slider .swiper-button.prev',
  },
	on: {
		slideChangeTransitionEnd: function () {
			var nowIndex = imgSwiper.activeIndex;
			$('.img-number .now').text(nowIndex+1);
		},
	}
});



var thumbnailSwiper = new Swiper('.thumbnail-slider', {
	slidesPerView: 10,
	spaceBetween: 30,
	speed:600,
	loop: false,
	navigation: {
    nextEl: '.archive-view-list .swiper-button.next',
    prevEl: '.archive-view-list .swiper-button.prev',
	},
	breakpoints: {
		320: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		481: {
			slidesPerView: 5,
			spaceBetween: 10,
		},
		769: {
			slidesPerView: 8,
			spaceBetween: 15,
		},
		1025: {
			slidesPerView: 10,
			spaceBetween: 30,
		}
	}
});
</script>