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
					<p class="tit">[셀리턴 스토어] 2020년 카드사별 무이자 이벤트</p>
					<p class="tbl_detail_span">
						<span class="date"> </span>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="board-box text_center">
						<img src="../assets/images/board/notice_4_img.png" alt="">
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
				<a href="notice-view3.php" title="이전">
					<div class="clearfix">
						<div class="left list-up-bg list-title">이전</div>
						<div class="left w-con">
						[안내] 셀리턴 LED마스크, 예비안전기준 통과!
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="notice-view5.php" title="다음">
					<div class="clearfix">
						<div class="left list-down-bg list-title">다음</div>
						<div class="left w-con">
						[사이트 리뉴얼] 셀리턴 공식 스토어 리뉴얼에 따른 이용 안내
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