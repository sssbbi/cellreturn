<? $dp1 = "1";
$dp2 = "6";
$pd = "no";
include "../include/head.php" ?>
<link href="../assets/css/about.css" rel="stylesheet" type="text/css">
</head>
<body class="sub">
<? include "../include/header.php" ?>

<div class="wrapper2">
	<p class="page-text">
		셀리턴은 지속적인 기업 경쟁력 강화와 경영혁신을 통해<br>
		세계 최고의 기술과 품질을 갖춘 글로벌 뷰티 디바이스 리더로 성장하고 있습니다.
	</p>
</div>

<div class="group-list-wrap row_0 wow fadeInUp">
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop1.php" class="inner on popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img1.jpg" alt="셀리턴홀딩스 이미지"> -->
			<img class="lg-show" src="../assets/images/about/group_list_img1_m.jpg" alt="셀리턴홀딩스 이미지">
			<p class="group-title">(주)셀리턴홀딩스</p>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop2.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img2.jpg" alt="셀리턴코스메틱 이미지"> -->
			<img class="lg-show" src="../assets/images/about/group_list_img2_m.jpg" alt="셀리턴코스메틱 이미지">
			<p class="group-title">(주)셀리턴코스메틱</p>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop3.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img3.jpg" alt="스페클립스 주식회사 이미지"> -->
			<img class="lg-show" src="../assets/images/about/group_list_img3_m.jpg" alt="스페클립스 주식회사 이미지">
			<p class="group-title">스페클립스 주식회사<br> (speclipse)</p>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop4.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img4.jpg" alt="리치플랫폼 이미지"> -->
			<img class="lg-show" src="../assets/images/about/group_list_img4_m.jpg" alt="리치플랫폼 이미지">
			<p class="group-title">(유)리치플랫폼</p>
		</a>
	</div>
</div>

<? include "../include/footer.php" ?>
<script type="text/javascript">
	function groupBg() {
		$('.group-list-wrap .list').on('mouseenter',function(){
			var str = '../assets/images/about/group_list_img'+($(this).index()+1)+'.jpg';

			$('.group-list-wrap').css({'background-image':'url('+str+')'});
			$('.group-list-wrap .list .inner').removeClass('on');
			$(this).children('a').addClass('on');
		});
	}
	$(document).ready(function(){
		if ( $(window).width() > 768 ) {
			groupBg();
		}
	});
	$(window).resize(function(){
		if ( $(window).width() > 768 ) {
			groupBg();
		}
	});
</script>
</body>
</html>