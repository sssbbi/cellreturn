<? $dp1 = "6";
$dp2 = "2";
$wide = "show";
include "../include/head.php" ?>
<link href="../assets/css/board.css" rel="stylesheet" type="text/css">
</head>
<body class="sub">
<? include "../include/header.php" ?>

<div class="wrapper2 w-1400">
	<p class="page-text">
		창의적인 사고와 혁신적인 도전으로 건강한 아름다움으로의 쉼 없는 여정을 함께할<br>
		열정적인 CELLRETURNer를 기다리고 있습니다.
	</p>

	<table class="table_board_for type_a">
		<caption><span class="hidden">일반 게시판  입니다.</span></caption>
		<colgroup>
			<col width="8%">
			<col width="*%">
			<col width="18%">
			<col width="13%">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">번호</th>
				<th scope="col">제목</th>
				<th scope="col">모집기간</th>
				<th scope="col">진행상태</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2</td>
				<td class="text_left">
					<a href="recruiting-view2.php">2020년 각 부문별 경력 채용</a>
				</td>
				<td>2020-10-30 ~ 2020-11-15</td>
				<td><span class="status ing">진행중</span></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<td>1</td>
				<td class="text_left">
					<a href="recruiting-view1.php">2020년 하반기 부문별 정규직 채용</a>
				</td>
				<td>2020-09-23 ~ 2020-10-11</td>
				<td><span class="status ing">진행완료</span></td>
			</tr>
		</tbody>
	</table>

	<!-- <div class="paging-area">
		<ul>
			<li><a href="javascript:;" class="prev-first"><span>맨앞으로</span></a></li>
			<li><a href="javascript:;" class="prev"><span>이전으로</span></a></li>
			<li><a href="javascript:;" class="active">1<span></span></a></li>
			<li><a href="javascript:;">2<span></span></a></li>
			<li><a href="javascript:;">3<span></span></a></li>
			<li><a href="javascript:;" class="next"><span>다음으로</span></a></li>
			<li><a href="javascript:;" class="next-last"><span>맨뒤로</span></a></li>
		</ul>
	</div>

	<div class="paging text_center mt">
		<button type="button" class="paging-button prev"></button>
		<div class="paging-txt">
			<span class="now">1</span> <span>/</span> <span class="total">24</span>
		</div>
		<button type="button" class="paging-button next"></button>
	</div>

	<div class="board-search-01">
		<form method="POST" action="?" id="searchForm">
			<fieldset>
				<legend class="hidden">검색</legend>
				<select name="find_field" title="search" class="select-type-01">
					<option value="title">제목</option>
					<option value="content">내용</option>
				</select>
				<input type="text" title="검색어" class="input-type-01" name="find_word" value="">
				<input type="submit" value="검색" class="btn btn-color-01">
			</fieldset>
		</form>
	</div> -->

</div>

<? include "../include/footer.php" ?>
</body>
</html>