<div class="pop-con dynamic-view">
	<div class="pop-content">
		<div class="video-wrapper">
			<iframe src="https://www.youtube.com/embed/S2jFno7wkK4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="dynamic-view-title">
			CELLRETURN Premium LED Mask 차이를 만드는 차이
		</div>
		<div class="dynamic-view-list">
			<!-- 모든 게시물의 썸네일이 노출됨.
			클릭 시 해당 게시물의 뷰페이지(팝업) 노출.
			해당 게시물에 class 'on' 추가. -->
			<div class="thumbnail-slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide on">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
					<div class="swiper-slide">
						<a class="img" href="#none">
							<img src="../assets/images/board/no_img.jpg" alt="썸네일 이미지">
						</a>
					</div>
				</div>
			</div>
			<div class="swiper-button prev xi-angle-left-thin"></div>
    	<div class="swiper-button next xi-angle-right-thin"></div>
			<button type="button" class="mfp-close"></button>
		</div>
	</div>
</div>

<script type="text/javascript">
function getUrlParams() {
  var params = {};
  window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str, key, value) { params[key] = value; });
  return params;
}

const param = getUrlParams();

console.log('param',window.location, param)
var thumbnailSwiper = new Swiper('.thumbnail-slider', {
	slidesPerView: 10,
	spaceBetween: 30,
	speed:600,
	loop: false,
	navigation: {
    nextEl: '.swiper-button.next',
    prevEl: '.swiper-button.prev',
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