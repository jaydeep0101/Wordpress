"use strict";

// Header
$(".toggle-menu").click(function () {
    $(".sidebar").toggleClass("active");
    // $(".close-sidebar").addClass("active");
});
// $(".close-sidebar").click(function () {
//     $(".sidebar").removeClass("active");
//     $(this).removeClass("active");
// });
$(document).keyup(function (e) {
    $(".sidebar").removeClass("active");
    $(".close-sidebar").removeClass("active");
});

    

$('.header.sticky-bar').hide();
$(document).ready(function() {
  
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
         $('.header.sticky-bar').css('display','inherit');
         $('.second__header').css('display', 'none');
      } else {
         $('.header.sticky-bar').css('display','none');
         $('.second__header').css('display', 'inherit');
      }
  });
});


//  Back Top
$('#back-top').hide();
$(window).scroll(function() {

  if ($(this).scrollTop()<50)
  {
    $('#back-top').fadeOut();
  }
  else
  {
    $('#back-top').fadeIn();
    $('#back-top').show();
  }
});


$(document).ready(function() {
	$('.popup-youtube').magnificPopup({
    type: 'iframe'
  });
});

$(document).ready(function(){
  $('.nav.nav-tabs a').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.nav.nav-tabs a').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');

  })
})

//  Counter //
$('.counter-title').each(function () {

  $(this).prop('Counter',0).animate({

    Counter: $(this).text()
  }, 
  {
    duration: 1000,
    easing: 'swing',
    step: function (now) {
      $(this).text(Math.ceil(now));
    }
  });
});

// smooth scroll jquery
function scrollNav() {
  $('ul li a').click(function () {
      $("ul  .active").removeClass("active");
      $(this).addClass("active");
      $('html, body').stop().animate({
          scrollTop: $($(this).attr('href')).offset().top - 0
      }, 300);
      return false;
  });
}
scrollNav();

     
     AOS.init();

    wow = new WOW(
      {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
    )
    wow.init();