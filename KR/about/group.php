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
		세계 최고의 기술과 품질을 갖춘 글로벌 뷰티&amp;헬스케어 리더로 성장하고 있습니다.
	</p>
</div>

<div class="group-list-wrap row_0 wow fadeInUp">
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop1.php" class="inner on popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img1.jpg" alt="셀리턴홀딩스 이미지"> -->
			<!-- <img class="lg-show" src="../assets/images/about/group_list_img1_m.jpg" alt="셀리턴홀딩스 이미지"> -->
			<div class="txt-wrap">
				<div class="icon">
					<img src="../assets/images/sub/cellreturner_talent_i1.png" alt="아이콘">
				</div>
				<p class="group-title">(주)셀리턴홀딩스</p>
				<div class="plus-i">
					<img src="../assets/images/icon/plus_i_w.png" alt="플러스 아이콘">
				</div>
				<div class="hide-txt">
					<p class="txt">
					최상의 서비스를 제공하기 위해<br>
					뷰티 디바이스를 전문적으로<br> 
					렌탈 운영 및 관리하는<br> 
					고객맞춤형 렌탈 서비스 기업입니다.
					</p>
				</div>
			</div>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop2.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img2.jpg" alt="셀리턴코스메틱 이미지"> -->
			<!-- <img class="lg-show" src="../assets/images/about/group_list_img2_m.jpg" alt="셀리턴코스메틱 이미지"> -->
			<div class="txt-wrap">
				<div class="icon">
					<img src="../assets/images/sub/cellreturner_talent_i1.png" alt="아이콘">
				</div>
				<p class="group-title">(주)셀리턴코스메틱</p>
				<div class="plus-i">
					<img src="../assets/images/icon/plus_i_w.png" alt="플러스 아이콘">
				</div>
				<div class="hide-txt">
					<p class="txt">
					단순한 화장품이 아닌 피부 건강과<br> 
					아름다움에 대해 고민하고<br> 
					더 높은 가치를 이끌어내는 기업입니다.
					</p>
				</div>
			</div>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop3.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img3.jpg" alt="스페클립스 주식회사 이미지"> -->
			<!-- <img class="lg-show" src="../assets/images/about/group_list_img3_m.jpg" alt="스페클립스 주식회사 이미지"> -->
			<div class="txt-wrap">
				<div class="icon">
					<img src="../assets/images/sub/cellreturner_talent_i1.png" alt="아이콘">
				</div>
				<p class="group-title">스페클립스 주식회사<br> (speclipse)</p>
				<div class="plus-i">
					<img src="../assets/images/icon/plus_i_w.png" alt="플러스 아이콘">
				</div>
				<div class="hide-txt">
					<p class="txt">
					레이저 유도 플라즈마 분광 기술과<br>
					딥러닝 기반으로 조직 손상 없이<br>
					피부암 진단분석이 가능한<br>
					의료기기 개발 기업입니다.
					</p>
				</div>
			</div>
		</a>
	</div>
	<div class="list col-grid-3 col-lg-12">
		<a href="group-pop4.php" class="inner popup-link">
			<!-- <img class="lg-hide" src="../assets/images/about/group_list_img4.jpg" alt="리치플랫폼 이미지"> -->
			<!-- <img class="lg-show" src="../assets/images/about/group_list_img4_m.jpg" alt="리치플랫폼 이미지"> -->
			<div class="txt-wrap">
				<div class="icon">
					<img src="../assets/images/sub/cellreturner_talent_i1.png" alt="아이콘">
				</div>
				<p class="group-title">(유)리치플랫폼</p>
				<div class="plus-i">
					<img src="../assets/images/icon/plus_i_w.png" alt="플러스 아이콘">
				</div>
				<div class="hide-txt">
					<p class="txt">
					고객의 아름다움과 건강을 위한<br>
					1:1 맞춤형 케어로 고객 만족의<br>
					극대화를 추구하는 기업입니다.
					</p>
				</div>
			</div>
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
		if ( $(window).width() > 1024 ) {
			groupBg();
		}
	});
	$(window).resize(function(){
		if ( $(window).width() > 1024 ) {
			groupBg();
		}
	});
</script>
</body>
</html>