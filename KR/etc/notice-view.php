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
					<p class="tit">제목 노출 </p>
					<p class="tbl_detail_span">
						<span class="date">2020-01-01</span>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="board-box">
						에디터 입력
					</div>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="text_center board_view_btn_box">
		<input type="button" value="목록" class="btn-type-01 w-mid">
	</div>

	<div class="border-list-type">
		<ul>
			<li>
				<a href="#none" title="이전">
					<div class="clearfix">
						<div class="left list-up-bg list-title">이전</div>
						<div class="left w-con">
							이전글 입니다. 이전글 입니다. 이전글 입니다. 이전글 입니다. 이전글 입니다. 이전글 입니다. 이전글 입니다.
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#none" title="다음">
					<div class="clearfix">
						<div class="left list-down-bg list-title">다음</div>
						<div class="left w-con">
							다음 글이 없습니다.
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