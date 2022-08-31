<script src="../assets/js/lib/jquery.waypoints.min.js"></script>
<script src="../assets/js/lib/jquery-ui.min.js"></script>
<script src="../assets/js/lib/jquery.magnific-popup.js"></script>
<script src="../assets/js/lib/wow.min.js"></script>
<script src="../assets/js/lib/slick.min.js"></script>
<script src="../assets/js/lib/swiper.min.js"></script>
<!-- <script src="../assets/js/lib/smooth-scrollbar.js"></script> -->
<script src="../assets/js/lib/jquery.mCustomScrollbar.js"></script>
<script src="../assets/js/common.js"></script>

<script type="text/javascript">
  var Dp1On = $('.depth li.m_<?=$dp1?> > a');
  var Dp2On = $('.depth li.m_<?=$dp1?> .sm_<?=$dp2?> > a');

  Dp1On.addClass("on");
  Dp2On.addClass("on");

  
  $(window).scroll(function(){
    HeaderF();
  });

  $(document).ready(function(){
    HeaderF();
    gnbDiv();
  });

  function HeaderF() {
    var logoSrc = $('#header .logo img').attr('on-src');
    var logoSrc_ori = $('#header .logo img').attr('ori-src');
    if ( $(window).scrollTop() > 1 ) {
      $('.sub #header').addClass('scroll');
      $('.sub #header .logo img').attr('src', logoSrc);
    } else {
      $('.sub #header').removeClass('scroll');
      $('.sub #header .logo img').attr('src', logoSrc_ori);
    }
  }

  function gnbDiv() {   
    var header = $('#header');
    var gnb_box = $('#header .gnb-area');
    var gnbDp1 = $('#header .gnb-area .depth01');
    var gnbDp1On = $('#header .gnb-area .depth li.m_<?=$dp1?> > a');
    var gnbDp2 = $('#header .gnb-area .depth .depth02');
    var gnbDp2On = $('#header .gnb-area .depth li.m_<?=$dp1?> .sm_<?=$dp2?> > a');
    var gnbDp2H = $('#header .gnb-area .m_3 .depth02').outerHeight();
    var gnbBg = $('#header .gnb-bg');
    var logoSrc = $('#header .logo img').attr('on-src');
    var logoSrc_ori = $('#header .logo img').attr('ori-src');
    var logoSrc_hover = $('#header .logo img').attr('hover-src');

    gnbDp2.css("height",gnbDp2H);
    gnbBg.css('height', gnbDp2H);

    gnbDp1.mouseenter(function(){
      header.addClass('on');
      //gnbBg.fadeIn(250);
      gnbBg.addClass('on');
      //gnbDp2.fadeIn(250);
      $('.gnb-area .depth02, .gnb-bg').stop().slideDown(300);
      $('#header .gnb-area .depth01 a').removeClass("active");
      $(this).children('a').addClass("active");
    });
    header.mouseenter(function(){
      if ( $(window).width() > 1024 ) {
        header.addClass('on');
        $('#header .logo img').attr('src', logoSrc_hover);
      }
    });
    gnb_box.mouseleave(function(){
      header.removeClass('on');
      //gnbBg.stop().hide();
      gnbBg.removeClass('on');
      //gnbDp2.stop().hide();
      $('.gnb-area .depth02, .gnb-bg').stop().slideUp(300);
      $('#header .logo img').attr('src', logoSrc_ori);
      $('#header .gnb-area .depth01 > a').removeClass("active");
      if ( $('#header').hasClass('scroll') ) {
        $('#header .logo img').attr('src', logoSrc);
      }
      if ( $('.gnb-mobile').hasClass('on') ) {
        $('#header .logo img').attr('src', logoSrc);
        header.addClass('on');
      }
    });
  };

  /* pc 서브메뉴 */
  $('.sub-menu-wrap .depth01.m_<?=$dp1?> .depth02').css('display','flex');

  //Scrollbar.initAll();

</script>