<script src="../assets/js/lib/jquery-ui.js"></script>
<!-- 팝업 ================modal -->
<script type="text/javascript">
<!--

function setCookie(cName,cValue,m_i) {
	var expire = new Date();
	expire.setDate(expire.getDate() + 1);
	cookies = cName+"="+escape(cValue)+"; path=/ ; expires="+expire.toGMTString()+";";
	document.cookie = cookies;
	$("#modal"+m_i).css("display","none");
}
//-->
</script> 
<?	
	$temp_pop_up=(isset($_COOKIE["pop1"]))?$_COOKIE["pop1"]:"";
	if ($temp_pop_up!="ok") {
?>
<div class="modal fade in start_pop ui-draggable" id="modal1" aria-hidden="false" style="display:block; left:30px; top:20px;"> 
	<div class="modal_standard">
		<div class="modal_wrap">
			<div class="modal-dialog">
				<div class="modal-content">
          <div class="modal-header">
            <div class="close" style="cursor:pointer;" onclick="parent.modal1.style.display='none';"></div>
          </div>
					<!-- body -->
					<div class="modal-body">
						<div class="inner">
							<img src="../assets/images/main/brand_main_popup01_01.jpg">
						</div>
						<div class="inner">
							<a href="https://brand.cellreturn.com/KR/about/story.php" target="_blank">
								<img src="../assets/images/main/brand_main_popup01_02.jpg">
							</a>
						</div>
						<div class="inner">
							<img src="../assets/images/main/brand_main_popup01_03.jpg">
						</div>
						<div class="inner">
							<a href="https://store.cellreturn.com/KR/index.php" target="_blank">
								<img src="../assets/images/main/brand_main_popup01_04.png">
							</a>
						</div>
					</div>
					<!-- Footer -->
					<div class="modal-footer">
						<div class="check-area" >
							<input type="checkbox" id="pop1" onClick="setCookie('pop1','ok','1');"  style="cursor:pointer">
							<label for="pop1" class="ml_05">오늘 열지 않기</label>
						</div>
						<div class="pop-close" style="cursor:pointer" onclick="parent.modal1.style.display='none';" >닫기</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<? } ?>
<!-- END 팝업 ================modal -->

 

<SCRIPT LANGUAGE="JavaScript">
<!--
function closeWin(lay,val) { 
	setCookie( lay, "done" , 1,val); 
   // alert(val);
	//document.getElementById(lay).style.display='none';
}


function getCookie( name ){
  var nameOfCookie = name + "=";
  var x = 0;
  while ( x <= document.cookie.length )
  {
    var y = (x+nameOfCookie.length);
    if ( document.cookie.substring( x, y ) == nameOfCookie ) {
      if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
        endOfCookie = document.cookie.length;
      return unescape( document.cookie.substring( y, endOfCookie ) );
    }
    x = document.cookie.indexOf( " ", x ) + 1;
    if ( x == 0 )
      break;
  }
  return "";
}
//-->
</SCRIPT>
