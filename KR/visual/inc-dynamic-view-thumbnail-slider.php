<div class="thumbnail-slider swiper-container">
    <div class="swiper-wrapper">
        <div data-v="dOLR65FMQLo"
             data-title="CELLRETURN Platinum LED Mask Making"
             class="swiper-slide <?php echo ($thumbnailidx == 1) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/dOLR65FMQLo/0.jpg" alt="썸네일 이미지">
            </a>
        </div>
        <div data-v="noCB8OF-bKE"
             data-title="CELLRETURN Platinum LED Mask 당신만을 위한 완성맞춤"
             class="swiper-slide <?php echo ($thumbnailidx == 2) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/noCB8OF-bKE/0.jpg" alt="썸네일 이미지">
            </a>
        </div>
        <div data-v="9CGm1A72lAs"
             data-title="CELLRETURN PR 7만 시간의 치열함"
             class="swiper-slide <?php echo ($thumbnailidx == 3) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/9CGm1A72lAs/0.jpg" alt="썸네일 이미지">
            </a>
        </div>
        <div data-v="xclai4sVHTI"
             data-title="CELLRETURN Premium LED Mask"
             class="swiper-slide <?php echo ($thumbnailidx == 4) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/xclai4sVHTI/0.jpg" alt="썸네일 이미지">
            </a>
        </div>
        <div data-v="UjxJhgRphSg"
             data-title="CELLRETURN Premium LED Mask Making"
             class="swiper-slide <?php echo ($thumbnailidx == 5) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/UjxJhgRphSg/0.jpg" alt="썸네일 이미지">
            </a>
        </div>

        <div data-v="mLY8CBNkcY4"
             data-title="CELLRETURN Premium LED Mask 차이를 만드는 차이"
             class="swiper-slide <?php echo ($thumbnailidx == 6) ? 'on' : '' ?>">
            <a class="img" href="#none">
                <img src="https://img.youtube.com/vi/mLY8CBNkcY4/0.jpg" alt="썸네일 이미지">
            </a>
        </div>

    </div>
</div>
<div class="swiper-button prev xi-angle-left-thin"></div>
<div class="swiper-button next xi-angle-right-thin"></div>

<script type="text/javascript">
    $('.thumbnail-slider').on('click', '[data-v]', function(e){
        const Url = 'https://www.youtube.com/embed/' + $(this).data('v') + '?autoplay=1';

        $('.thumbnail-slider .swiper-slide').removeClass('on');
        $(this).addClass('on')

        $('[data-id="player"]').attr('src', Url);
        $('.dynamic-view-title').text($(this).data('title'));

        e.preventDefault()
    });

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