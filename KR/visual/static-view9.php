<div class="pop-con archive-view">
	<div class="pop-content">
		<div class="archive-view-img">
			<!-- 이미지 사이즈 640x840 -->
			<div class="img-slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="../assets/images/visual/static_list_img9_1.jpg" alt="이미지 1장">
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
		연말 럭셔리 선물 추천, 셀리턴 플래티넘
		</div>
		<div class="archive-view-list">
			<!-- 모든 게시물의 썸네일이 노출됨. 
			클릭 시 해당 게시물의 뷰페이지(팝업) 노출.
			해당 게시물에 class 'on' 추가. -->
			<?php $thumbnailidx = 9; ?>
			<? include "./inc-static-view-thumbnail-slider.php" ?>
			<button type="button" class="mfp-close"></button>
		</div>
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



</script>