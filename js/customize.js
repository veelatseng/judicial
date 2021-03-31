// 自行加入的JS請寫在這裡
$(function() {
    // lazyload  
    //可以指定你想要的元素做lazyload
    $("img").lazyload({ effect: "fadeIn" });
    $('.mpSlider').slick({
      dots: true,
      arrows: false,
      draggable: true, 
      infinite: true,
      lazyLoaded: true,
      lazyLoad: 'ondemand',
      customPaging: function(slider, i) {
        return $('<button type="button" />').text($(slider.$slides[i]).find('img').attr('alt').trim());
      },
      responsive: [{
        breakpoint: 575,
        settings: {
          dots: false,  
          arrows: true
        }
      }]
    });
    $('.course>ul').slick({
      centerMode: false,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
      ]
    });
    $('.serviceSlider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      arrow: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: false,
          arrows: true
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: true
        }
      }, {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: true
        }
      }]
    });
    $('.statistics_slider').slick({
      dots: false,  
      arrows: true,
      draggable: true,
      infinite: true
    });
    //燈箱slick+lightBox組合
    $('.cp_slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1500,
      pauseOnHover: true,
      pauseOnFocus: true,
      focusOnSelect: true,
      accessibility: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      }, {
        breakpoint: 545,
        settings: {
          arrows: true,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 480,
        settings: {
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }]
    });
    $('.cp_slider').slickLightbox({
      caption: 'caption',
      useHistoryApi: 'true',
      lazy: true
    });
    
    // cp_photo
    // $('.Slider-for').on('init reInit afterChange', function(event, slick, currentSlide) {
    //     var i = (currentSlide ? currentSlide : 0) + 1;
    //     $('.controls').html(i + '/' + slick.slideCount);
    // });
    $('.Slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.Slider-nav',
      autoplay: false,
        // autoplaySpeed: 2000,
        infinite: true
      });
    $('.Slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.Slider-for',
      dots: false,
      arrows: true,
      autoplay: false,
      focusOnSelect: true,
      infinite: true,
    });
  });
$(function(){
  var weblang = $('html').attr('lang');
  if (weblang.substring(0,2) == 'zh') {
        // console.log("中文");
        $('.slick-prev').attr('title', '前一則');
        $('.slick-next').attr('title', '後一則');
      } else if (weblang.substring(0,2) == 'en') {
        // console.log("英文");
        $('.slick-prev').attr('title', 'previous');
        $('.slick-next').attr('title', 'next');
      } else if (weblang.substring(0,2) == 'vi') {
        // console.log("越南");
        $('.slick-prev').attr('title', 'Trước');
        $('.slick-next').attr('title', 'kế tiếp');
      } else if (weblang.substring(0,2) == 'id') {
        // console.log("印尼");
        $('.slick-prev').attr('title', 'sebelumnya');
        $('.slick-next').attr('title', 'berikutnya');
      } else if (weblang.substring(0,2) == 'km') {
        // console.log("柬埔寨");
        $('.slick-prev').attr('title', 'មុន');
        $('.slick-next').attr('title', 'បន្ទាប់');
      } else if (weblang.substring(0,2) == 'th') {
        // console.log("泰文");
        $('.slick-prev').attr('title', 'ก่อน');
        $('.slick-next').attr('title', 'ต่อไป');
      } else{
        // console.log("沒有判斷");
        $('.slick-prev').attr('title', 'previous');
        $('.slick-next').attr('title', 'next');
      }
    });
$(function(){
  $('.left_block nav ul>li>a').each(function() {
    $(".left_block nav ul ul").hide();
    $(".left_block nav ul ul li a.active").parent('li').parent('ul').show();
    function leftnav(e) {
      $(this).parent('li').siblings().children('a').removeClass('active');
      $(this).toggleClass('active');
      $(this).parent('li').siblings().children('ul').slideUp();
      $(this).next('ul').slideToggle();
            // e.preventDefault();
          }
          $(this).click(leftnav);
          $(this).keyup(leftnav); 
        });
});
$(function(){
  $(".reform .check_reform").click(function(e) {
    $(this).next(".reform_program").slideToggle();
    e.preventDefault();
  });
  //   $(".reform .gohistory").click(function(e) {

		// if($(this).attr('class') == 'gohistory'){
		// 	$('.gohistory').attr('class', 'gohistory');
		// 	$(this).toggleClass('active');
		// 	$(this).parent().parent().parent('.reform_method').children('.method_block').children('.history_block').slideUp();
		// }
  //       $(this).parent().parent().children(".history_block").slideToggle();
  //       e.preventDefault();
  //   });
	/*
    $(".reform .more_history a").click(function(e) {
        $(this).toggleClass('active');
        if ($(".reform .more_history a").hasClass('active')) {
            $(".reform .more_history a").html("收合歷程");
        } else {
            $(".reform .more_history a").html("看更多歷程");
        };
        e.preventDefault();
    });
    */
  });

$(function(){
  $('.method_block .gohistory').each(function() {
    $(this).parents('.method_block').find('.history_block').hide();
    var _gohistory = $(this).children('a');
    var _scrollTop= $(this).parents(".method_block").offset().top - 55;
    _gohistory.each(function() {
      function history(e){
        $('html, body').stop(true, true).animate({ scrollTop: _scrollTop }, 800, 'easeOutExpo');
        $(this).parents('.method_block').siblings(".method_block").find('.gohistory').removeClass('active');
        $(this).parent(".gohistory").toggleClass('active');
        $(this).parents('.method_block').siblings(".method_block").find('.history_block').slideUp();
        $(this).parents('.method_block').find(".history_block").slideToggle();
        e.preventDefault();
      }
      $(this).click(history);
      $(this).keyup(history);
    });
  });
});

$(function(){
  $(".qa_search").click(function(e) {
    $(this).next(".qa_search_block").slideToggle();
    e.preventDefault();
  });
  $('.qa_list>ul>li,.meeting_list>ul>li').each(function() {
    $(this).find('.answer').hide();
    var _qaItem = $(this).children('.question').children('a');
    var _scrollTop= $(this).offset().top - 55;
    _qaItem.each(function() {
      function qa(e){
        $('html, body').stop(true, true).animate({ scrollTop: _scrollTop }, 800, 'easeOutExpo');
        $(this).parents('li').siblings().children('.question').children('a').removeClass('active');
        $(this).toggleClass('active');
        $(this).parents('li').siblings().children('.answer').slideUp();
        $(this).parent('.question').next('.answer').slideToggle();
        e.preventDefault();
      }
      $(this).click(qa);
      $(this).keyup(qa);
    });
  });
});
$(function(){
  $('.advanced_search_block .advanced_search,.table_list_search_block .table_list_search').hide();
  $('.search_btn').off().click(function(e) {
    $('.advanced_search_block .advanced_search,.table_list_search_block .table_list_search').stop().slideToggle();
    e.preventDefault();
  });
});

/*-----------------------------------*/
////////////////unimenu////////////////
/*-----------------------------------*/
$('nav.units_block').hide();
function openuni(){
  $('nav.units_block').css('top', '0px');
  $('nav.units_block').slideDown(600,'easeOutQuart');
  $('body').addClass('noscroll');
  $(this).hide();
}
function closeuni(){
  $('nav.units_block').fadeOut(400,function(){
    $(this).css('top', '-2000px');  
  });
  $('body').removeClass('noscroll');
}
$('nav.units_block .close,nav.units_block .overlay').click(function(event) {
  closeuni();
});
$('nav.units_block>ul>li:last-child>ul>li:last-child a').focusout(function() {
  closeuni();
});

$('.units').click(function(event) {
 openuni();
});

// lp table_list th 寬度
$(function(){
  function plth(){
    var thWidth = 0;
    $('.table_list th').each(function(){
      if($(this).width()>thWidth){
        thWidth = $(this).width(); 
      }
    });
    if ($(window).outerWidth() <= 576) { 
      var allWidth=$('.table_list table').width(),
      thRealWidth=Math.floor((thWidth/allWidth)*100);
      $(".table_list td").css({"padding-left":(thRealWidth+5)+"%"});
    } else{
      $(".table_list td").css({"padding-left":""});
    };
  }
  $(window).bind('resize load', function(e) {
    plth();
  });
  plth();
});

$(function(){
  $('.left_block').prepend('<button type="button" class="leftCtrl">次選單</button>');
  if ($(window).outerWidth() < 948) {
    $(".leftCtrl").show();
    $(".leftCtrl").click(function(e) {
      $(this).toggleClass('active');
      $(".left_block nav").stop().slideToggle();
    });
  } else {
    $(".leftCtrl").hide();
  }
});

$(function(){
  $(".mpvideo .close").click(function(e){
    $(this).parent(".mpvideo").hide();
    e.preventDefault();
  });
})

$(function(){
	$('.btn-fatfooter').click();
})

$(function(){
	$(document).on('keydown', function(e) {
        // alt+S 查詢
        if (e.altKey && e.keyCode == 83) {
         $('.menu ul li').siblings(".hasChild").last().find('.megamenu').show();
       }
     });
})

// $('.centrespread').slickLightbox({
//   caption: 'caption',
//   useHistoryApi: 'true',
//   lazy: true
// });


