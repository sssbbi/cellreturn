<header id="header">
  <div class="wrapper">
    <div class="in-bx">
      <div class="logo">
        <a href="../main/main.php">
          <img src="../assets/images/inc/logo_w.png" on-src="../assets/images/inc/logo.png" hover-src="../assets/images/inc/logo_b.png" ori-src="../assets/images/inc/logo_w.png" alt="로고">
        </a>
      </div>
      
      <nav class="gnb-area">
        <? include "../include/gnb.php" ?>
      </nav>

      <div class="util-area">
        <div class="lang-bx">
          <p class="on-txt"><span>KOR</span></p>
          <ul>
            <li><a class="on" href="#none">KOR</a></li>
            <li><a href="#none">ENG</a></li>
            <li><a href="#none">CHN</a></li>
            <li><a href="#none">JPN</a></li>
          </ul>
        </div>
        <a href="#none" class="store-btn" title="STORE"></a>
      </div>

      <div class="nav-btn open-btn">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </div>

  <div class="gnb-bg"></div>
</header>


<div class="nav-bg"></div>

<div class="gnb-mobile">
  <div class="wrapper">
    <div class="m-header">
      <div class="logo">
        <a href="../main/main.php">
          <img src="../assets/images/inc/logo.png" alt="로고">
        </a>
      </div>
      <div class="nav-close-btn">
        <span class="bar"></span>
        <span class="bar"></span>
      </div>

      <a href="#none" class="store-btn" title="STORE"></a>
    </div>
  </div>

  <div class="m-gnb">
    <? include "../include/gnb.php" ?>
  </div>

  <div class="m-util">
    <ul class="language">
      <li><a class="on" href="#none">KOR</a></li>
      <li><a href="#none">ENG</a></li>
      <li><a href="#none">CHN</a></li>
      <li><a href="#none">JPN</a></li>
    </ul>
    <ul class="policy-menu">
      <li><a href="#none">개인정보처리방침</a></li>
      <li><a href="#none">이메일무단수집거부</a></li>
      <li><a href="#none">인재채용</a></li>
      <li><a href="#none">고객문의</a></li>
    </ul>
    <div class="center-tel-bx">
      <span class="center">CS CENTER <a href="tel:<?=$site_tel_cs?>" class="tel"><?=$site_tel_cs?></a></span>
      <span class="center">A/S CENTER <a href="tel:<?=$site_tel_as?>" class="tel"><?=$site_tel_as?></a></span>
    </div>
  </div>
</div>


<? if($dp0!="main" && $dp2!=null){?>
<div class="sub-page-wrap">
  <div class="sub-visu-wrap">
    <div class="sub-visu-bg __<?=$dp1?>"></div>
    <h1 class="visu-title"><?=${nav_.$dp1}?></h1>
  </div>

  <div class="sub-menu-wrap">
    <div class="wrapper2 w-1400">
      <? include "../include/gnb.php" ?>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      if ( $(window).width() < 769 ) {
        menuScroll();
      }
    });
  </script>
  
  <main class="sub-content<?if($pd=="no"){?> pd0<?}?>">
     
  <? if($tit!='hide'){?>
    <div class="wrapper2">
      <h2 class="page-title">
      <? if($dp2==null){?>
        <?=${nav_.$dp1}?>
      <? }?>
        <?=${nav_.$dp1._.$dp2}?>
      </h2>
    </div>
  <? }?>
<? }?>


