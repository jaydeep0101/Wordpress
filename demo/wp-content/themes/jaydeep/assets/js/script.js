
"use strict";


// Header
$(".toggle-menu").click(function () {
    $(".sidebar").addClass("active");
    $(".close-sidebar").addClass("active");
});
$(".close-sidebar").click(function () {
    $(".sidebar").removeClass("active");
    $(this).removeClass("active");
});
$(document).keyup(function (e) {
    $(".sidebar").removeClass("active");
    $(".close-sidebar").removeClass("active");
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


// pre-loader
window.addEventListener('load', (event) => {
	setTimeout(function () { $(".preloader-activate").removeClass('preloader-active'); }, 2000);
});

$(window).on('load', function () {
	setTimeout(function () {
		$('.open_tm_preloader').addClass('loaded');
	}, 2000);
});


//tabbing content
var i;
const items = document.querySelectorAll(".accordion button");
function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }
    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}
items.forEach(item => item.addEventListener('click', toggleAccordion));


var service_Slider = new Swiper('.service__slider', {
    loop: true,
    slidesPerView: 3.5,
    spaceBetween: 34,
    centeredSlides: false,
    a11y: true,
    keyboardControl: true,
    grabCursor: true,
    breakpoints: {
        1199: {
         slidesPerView: 3.5,
         spaceBetween: 34,
         centeredSlides: false, 
        },
        991: {
            slidesPerView: 2.5,
            spaceBetween: 17
        },
       320: {
        slidesPerView: 2.5,
         spaceBetween: 17
       }
      },
  });

  var product_slider_one = new Swiper('.product__slider-one', {
    loop: true,
    slidesPerView: 3.1,
    spaceBetween: 46,
    centeredSlides: false,
    a11y: true,
    keyboardControl: true,
    grabCursor: true,
    breakpoints: {
        1199: {
         slidesPerView: 3.1,
         spaceBetween: 46,
         centeredSlides: false,
        },
        991: {
            slidesPerView: 2.5,
            spaceBetween: 17
        },
       320: {
        slidesPerView: 2.4,
         spaceBetween: 17
       }
      },
  });


  var product_slider_two = new Swiper('.product__slider-two', {
    loop: true,
    slidesPerView: 3.1,
    spaceBetween: 46,
    centeredSlides: false,
    a11y: true,
    keyboardControl: true,
    grabCursor: true,
    breakpoints: {
        1199: {
          slidesPerView: 3.1,
         spaceBetween: 46,
         centeredSlides: false, 
        },
        991: {
            slidesPerView: 2.5,
            spaceBetween: 17
        },
       320: {
        slidesPerView: 2.4,
         spaceBetween: 17
       }
      },
  });



 
(function () {
  'use strict'; // breakpoint where swiper will be destroyed
  // and switches to a dual-column layout

  const breakpoint = window.matchMedia('(min-width:991px)'); // keep track of swiper instances to destroy later

  let about_Slider;
//   let program_Slider;
//   let blog_Slider;

  const breakpointChecker = function () {
    // if larger viewport and multi-row layout needed
    if (breakpoint.matches === true) {
      // clean up old instances and inline styles when available
      if (about_Slider !== undefined) about_Slider.destroy(true, true); // or/and do nothing
    //   if (program_Slider !== undefined) program_Slider.destroy(true, true); // or/and do nothing
    //   if (blog_Slider !== undefined) blog_Slider.destroy(true, true); // or/and do nothing

      return; // else if a small viewport and single column layout needed
    } else if (breakpoint.matches === false) {
      // fire small viewport version of swiper
      return enableSwiper();
    }
  };
  const enableSwiper = function () {
    about_Slider = new Swiper('.about__slider', {
      loop: true,
      slidesPerView: 4,
      centeredSlides: false,
      a11y: true,
      keyboardControl: true,
      grabCursor: true
    });
    
    
  };


  breakpoint.addListener(breakpointChecker); // kickstart

  breakpointChecker();
})();
/* IIFE end */


$('#product__tabs-1').addClass('active');

var elim =  document.createElement('i');
elim.classList.add('far', 'fa-angle-right');
// console.log(elim)
$('#menu-top-navbar-1 li a').append(elim);
