<script type="text/javascript">
	$('.sub-product-slider .slick').slick({
		asNavFor: '.shopping-btn-slider .slick',
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: '14%',
		speed: 1000,
		dots: true,
		arrows: true,
		infinite: true,
		//variableWidth: true,
		responsive: [
			{
				breakpoint: 1620,
				settings: {
					centerPadding: '10%',
				}
			},
			{
				breakpoint: 1025,
				settings: {
					centerPadding: '15%',
				}
			},
			{
				breakpoint: 481,
				settings: {
					centerPadding: '50px',
				}
			},
		]
	});
	$('.shopping-btn-slider .slick').slick({
		asNavFor: '.sub-product-slider .slick',
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		speed: 0,
		dots: false,
		arrows: false,
		adaptiveHeight: true
		//infinite: true,
		//variableWidth: true,
	});
</script>