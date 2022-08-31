<? $dp1 = "2";
$dp2 = "4";
$tit = "hide";
include "../include/head.php" ?>
<link href="../assets/css/product.css" rel="stylesheet" type="text/css">
<link href="../assets/css/board.css" rel="stylesheet" type="text/css">
</head>
<body class="sub">
<? include "../include/header.php" ?>

<div class="wrapper2">
	<h2 class="page-title">BEAUTY DAY 2</h2>
	<p class="page-text">오직 효과만을 고집하는 셀리턴, 그 아름다움을 위한 두번째 스토리</p>
</div>

<div class="sub-product-slider">
	<ul class="slick">
		<li>
			<div class="product-name">
				<h3>비디투<br> 핑거클렌저</h3>
				<div class="btn-area mt">
					<a href="http://www.cellreturn.com/product/bd2-%ED%95%91%EA%B1%B0%ED%81%B4%EB%A0%8C%EC%A0%80/176/category/72/display/1/ " target="_blank" class="btn-type-01">상세보기</a>
					<a href="#buyzone" class="btn-type-01 js-buy">구매하기</a>
				</div>
			</div>
			<div class="product-img">
				<img src="../assets/images/product/bd2_slide.jpg" alt="비디투 핑거클렌저">
			</div>
		</li>
	</ul>
</div>

<div class="wrapper2">
	<div class="wow fadeInUp text_center">
		<div>
			<img src="../assets/images/product/bd2_img_01.jpg" alt="beauty day2">
		</div>
		<div>
			<img src="../assets/images/product/bd2_img_02.jpg" alt="beauty day2">
		</div>
		<div>
			<a href="#buyzone">
				<img src="../assets/images/product/bd2_img_03.jpg" alt="beauty day2">
			</a>
		</div>
		<div class="text_center">
			<div class="editor-title editor-title--type2">
				<p class="txt">손만 대면 작동하는 신개념 실리콘 진동 클렌저</p>
			</div>
			<img src="../assets/images/product/finger_on.gif" alt="">
		</div>
		<div>
			<img src="../assets/images/product/bd2_img_05.jpg" alt="">
		</div>
		<div>
			<img src="../assets/images/product/bd2_img_04.jpg" alt="beauty day2">
		</div>
		

		<a name="buyzone"></a>

		<div class="flag" style="margin-top:70px;">
			<ul class="size2">
				<li>
					<a href="http://www.cellreturn.com/product/bd2-%ED%95%91%EA%B1%B0%ED%81%B4%EB%A0%8C%EC%A0%80/176/category/72/display/1/" target="_blank">
						<img title="korea" alt="korea" src="../assets/images/product/flag_kr.jpg" />
						<span class="tt">Korea</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<? include "../include/footer.php" ?>
<script>
	$('.js-buy').on("click",function(e) {
		e.preventDefault();
		const anchor = $(this).attr('href').replace('#', '');
		const offset = $('[name="'+anchor+'"]').offset();

		$('html').animate({scrollTop : offset.top - $('#header').height()}, 400);
	});

	$('.sub-product-slider .slick').slick({
		// asNavFor: '.shopping-btn-slider .slick',
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: '14%',
		speed: 1000,
		dots: true,
		arrows: true,
		infinite: false,
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
</script>
</body>
</html>