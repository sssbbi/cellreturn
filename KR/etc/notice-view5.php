<? $dp1 = "7";
$dp2 = "1";
$wide = "show";
include "../include/head.php" ?>
<link href="../assets/css/board.css" rel="stylesheet" type="text/css">
</head>
<body class="sub">
<? include "../include/header.php" ?>

<div class="wrapper2 w-1400">
	<table class="table-view-01">
		<caption><span class="hidden">상세 입니다.</span></caption>
			<colgroup>
			<col width="90px">
			<col width="*">
		</colgroup>
		<tbody>
			<tr>
				<td colspan="2" class="clearfix tit_box">
					<p class="tit">[셀리턴 스토어] 셀리턴 공식 스토어 리뉴얼에 따른 이용 안내</p>
					<p class="tbl_detail_span">
						<span class="date">2020.09.22</span>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="board-box text_center">
						<p align="center"><img src="https://cellreturn.s3.ap-northeast-2.amazonaws.com/store/KR/admin/notice/notice00_renewal01.png ">
                        <a href="https://brand.cellreturn.com/KR/main/main.php" target="_blank"><img src="https://cellreturn.s3.ap-northeast-2.amazonaws.com/store/KR/admin/notice/notice00_renewal02.png "></a><a></a>
                        <a href="https://store.cellreturn.com/KR/index.php" target="_blank"><img src="https://cellreturn.s3.ap-northeast-2.amazonaws.com/store/KR/admin/notice/notice00_renewal03.png "></a><a></a>
                        <img src="https://cellreturn.s3.ap-northeast-2.amazonaws.com/store/KR/admin/notice/notice00_renewal04.png "></p>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="text_center board_view_btn_box">
		<input type="button" value="목록" class="btn-type-01 w-mid" onclick="location.href='notice.php'">
	</div>

	<div class="border-list-type">
		<ul>
			<li>
				<a href="notice-view4.php" title="이전">
					<div class="clearfix">
						<div class="left list-up-bg list-title">이전</div>
						<div class="left w-con">
							2020년 카드사별 무이자 이벤트!
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="notice-view6.php" title="다음">
					<div class="clearfix">
						<div class="left list-down-bg list-title">다음</div>
						<div class="left w-con">
							[인증] 셀리턴, 넥클레이MD 식약처 3등급 의료기기 허가 획득
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>

</div>

<? include "../include/footer.php" ?>
</body>
</html>