<? $dp1 = "7";
$dp2 = "1";
$wide = "show";
include "../include/head.php" ?>
<link href="../assets/css/board.css" rel="stylesheet" type="text/css">
</head>
<body class="sub">
<? include "../include/header.php" ?>

<div class="wrapper2 w-1400">

	<table class="table_board_for type_a">
		<caption><span class="hidden">공지사항 게시판</span></caption>
		<colgroup>
			<col width="8%">
			<col width="*%">
			<col width="13%">
		</colgroup>
		<thead>
			<tr>
				<th scope="col">번호</th>
				<th scope="col">제목</th>
				<th scope="col">등록일</th>
			</tr>
		</thead>
		<tbody>
      <tr>
        <td>7</td>
        <td class="text_left">
          <a href="notice-view7.php">[셀리턴 R&amp;D] 대한의학레이저 학회, 셀리턴 LED마스크 연구결과 공개</a>
        </td>
        <td>2020-11-06</td>
      </tr>
      <tr>
        <td>6</td>
        <td class="text_left">
          <a href="notice-view6.php">[셀리턴 R&amp;D] 셀리턴 넥클레이MD 식약처 3등급 의료기기 허가 획득</a>
        </td>
        <td>2020-11-03</td>
      </tr>
      <tr>
        <td>5</td>
        <td class="text_left">
          <a href="notice-view5.php">[셀리턴 스토어] 셀리턴 공식 스토어 리뉴얼에 따른 이용 안내</a>
        </td>
        <td>2020-09-22</td>
      </tr>
			<tr>
				<td>4</td>
				<td class="text_left">
					<a href="notice-view4.php">[셀리턴 스토어] 2020년 카드사별 무이자 이벤트</a>
				</td>
				<td>2020-08-31</td>
			</tr>
			<tr>
				<td>3</td>
				<td class="text_left">
					<a href="notice-view3.php">[안내] 셀리턴 LED마스크, 예비안전기준 통과!</a>
				</td>
				<td>2020-08-31</td>
			</tr>
			<tr>
				<td>2</td>
				<td class="text_left">
					<a href="notice-view2.php">[안내] 고객님께 드리는 글</a>
				</td>
				<td>2020-08-11</td>
			</tr>
			<tr>
				<td>1</td>
				<td class="text_left">
					<a href="notice-view1.php">[안내] LED마스크 예비안전기준에 대한 고객님의 궁금증을 풀어드립니다</a>
				</td>
				<td>2020-06-23</td>
			</tr>
		</tbody>
	</table>

	<!-- <div class="paging text_center mt">
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