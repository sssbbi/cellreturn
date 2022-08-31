//  mobile smNav
//아코디언 
var navMobile = {
  init: function() {
    this.moAction();
  },
  moAction: function() {
    var depth_1 = $('.gnb-mobile .depth01');
    var depth_2 = $('.gnb-mobile .depth02');
    var nav_bg = $('.nav-bg');
    var logoSrc = $('#header .logo img').attr('on-src');
    var logoSrc_ori = $('#header .logo img').attr('ori-src');

    $(depth_2).hide();
    $(nav_bg).hide();

    $(depth_1).each(function() {
      if ($(this).children("ul").hasClass("depth02")) {
        $(this).children('a').click(function() {
          if ($(this).next('.depth02').css('display') === 'none') {
            $(depth_1).children('a').removeClass('selected1');
            $(this).addClass('selected1');
            $(depth_2).slideUp(200);
            $(this).next().stop().slideDown(200);
          } else {
            $(this).next('.depth02').slideUp(200);
            $(depth_1).children('a').removeClass('selected1');
          }
          return false;
        });
      } else {
        $(this).find('a').addClass('no');
      }
    });

    // 메뉴
    $('.nav-btn').on('click', function() {
      $('.gnb-mobile').fadeIn(400);
      $('html,body').addClass('fix');
    });

    $('.nav-close-btn').on('click', function() {
      $('.gnb-mobile').fadeOut(100);
      $('html,body').removeClass('fix');
      $(depth_2).hide();
    });
  }
};


/*팝업 */
var magnificPop = {
  init: function() {
    this.pop_01(); //ajax 팝업 
  },

  pop_01: function() {
    $('.popup-link').magnificPopup({
      type: 'ajax',
      closeOnBgClick: false,
    }, 500);
  }

}
function closePopup() {
  $.magnificPopup.close();
}

$(document).on('ready', function(){
  /* 파일첨부 */
  function file_upload() {
    var tmp = $(this).val();
    $(this).siblings('p').text(tmp);
  };
  $('.file_box > input').change(file_upload);

  /*메인팝업*/
   function startPoP(){
    var winW = $(window).width();
    if (winW > 1024) {
      $(".start_pop").draggable({
        handle: ".modal-header"
      });
    }
   }startPoP();
     $(window).resize(function() {
startPoP();
  })
})

$(document).ready(function(){
  navMobile.init();
  magnificPop.init();

  $('.lang-bx').mouseenter(function(){
    $(this).addClass('on');
    $(this).find('ul').show();
  });
  $('.lang-bx').mouseleave(function(){
    $(this).removeClass('on');
    $(this).find('ul').hide();
  });
});

$(document).on('click', '#go-top', function(){
  $('body, html').animate({scrollTop:0}, 700);
}); 


/* wow */
var wow = new WOW({
  boxClass:     'wow',      
  animateClass: 'animated', 
  offset:       150,          
  mobile:       true,       
  live:         true,       
  callback:     function(box) {
  },
  scrollContainer: null 
});wow.init();

var wowrap = $('.wowrap');
$(wowrap).each(function() {
  $(this).find('.wow').each(function(index){
    var eq = (index)/8+"s"; 
    $(this).attr('data-wow-delay',eq);
  });
  $(this).find('.animated').each(function(index){
    var eq = (index)*250;
    $(this).attr('data-id','delay-'+eq);
  });
});

$(window).on("load",function(){
  $(".scroll-list").mCustomScrollbar({
    axis:"x",
    theme:"dark-3",
    mouseWheelPixels : 350,
  });
});


$(function(){
  var tabWrap = $('.tab-wrap');
  var tabBtn = $('.tab-wrap .tab li > a');
  var conAll = $('.tab-wrap .tab-content');
  var conActive = $('.tab-wrap .tab li > a.on').attr('href');
  $(conAll).hide();
  $(conActive).show();
  $(tabBtn).not('.no_tab').click(function () {
    tabHref = $(this).attr('href');
    $(this).parents('.tab-wrap').find('.tab-content').hide();
    $(tabHref).show();
    $(this).parents('.tab-wrap').find(".tab li > a").removeClass('on');
    if ( $(this).hasClass('no_tab') ) {
      $(this).removeClass('on');
    } else {
      $(this).addClass('on');
    }
    return false;
  });
});


$(document).on('ready', function(){
  $('.product-visual, .sub-visu-wrap').addClass('on');
});



function menuScroll(){
  var Wid = $(window).width();
  var $subMenu = $('.sub-menu-wrap .depth02');
  var leftPos = $subMenu.scrollLeft();
  var Left = $('.sub-menu-wrap .depth02 > li > a.on').offset().left;   //on 된 항목 위치 찾기
  var ulW = $('.sub-menu-wrap .depth02').children();      //ul 사이즈 재기
  var totalWidth = 0;
  for (var i = 0; i <  ulW.length; i++) {
    totalWidth +=  ulW[i].offsetWidth;
  }     
  if ( $('body').hasClass('sub') ) {
    $subMenu.animate({scrollLeft: Left - 20},1);
  }
}

function subMainF() {
  var scT = $(window).scrollTop();
  if ( scT > 150 && scT < 299 ) {
    $('.product-visual-bg').css({'margin-top' : '-' + scT/100 + '%', 'opacity':0.8});
    $('.product-visual-title').css({'opacity':0.8});
    $('.product-visual-left, .product-visual-right').css('width', scT/100 + '%');
  } else if ( scT > 300 && scT < 449 ) {
    $('.product-visual-bg').css({'margin-top' : '-' + scT/60 + '%', 'opacity':0.6});
    $('.product-visual-title').css({'opacity':0.6});
    $('.product-visual-left, .product-visual-right').css('width', scT/85 + '%');
  } else if ( scT > 450 ) {
    $('.product-visual-bg').css({'margin-top' : '-' + scT/50 + '%', 'opacity':0.4});
    $('.product-visual-title').css({'opacity':0.4});
    $('.product-visual-left, .product-visual-right').css('width', scT/70 + '%');
  } else {
    $('.product-visual-bg').css({'margin-top': 0, 'opacity':1});
    $('.product-visual-title').css({'opacity':1});
    $('.product-visual-left, .product-visual-right').css('width', '0');
  }
}

$(window).on('scroll', function(){
  if ( $(window).width() > 1024 ) {
    subMainF();
  }
});


