function closeNavbar() {
    $(".navbar-toggler").attr("aria-expanded", "false");
    $(".navbar-collapse").removeClass("show");
    $(".menu-top").removeClass("menu-top-click");
    $(".menu-middle").removeClass("menu-middle-click");
    $(".menu-bottom").removeClass("menu-bottom-click");
  }
  
  $(".frontpage-header .navbar-collapse li a").on("click", function() {
    closeNavbar();
  });
  
  $(document).on("click", function(event) {
    if (!$(event.target).closest('.site-header').length && $('.navbar-collapse').hasClass('show')) {
      closeNavbar();
    }
  });
  
  
 
 var Menu = {
    el: {
    ham: jQuery('.menu-m'),
    menuTop: jQuery('.menu-top'), 
    menuMiddle: jQuery('.menu-middle'),
    menuBottom: jQuery('.menu-bottom')
    },
    init: function() {
    Menu.bindUIactions();
    },
    bindUIactions: function() {
    Menu.el.ham
    .on(
    'click',
    function(event) {
    Menu.activateMenu(event);
    event.preventDefault();
    }
    );
    },
    activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
    }
    };
Menu.init();


$(document).ready(function() {
  $(window).scroll(function(){
      if ($(this).scrollTop() > 70) {
         $('.logo_header').addClass('scroll-imgchange'); 
         $('.navbar-nav').addClass('scroll-navchange');
         $('.headerbar').addClass('scroll-headerchange');
      } else {
         $('.logo_header').removeClass('scroll-imgchange');
         $('.navbar-nav').removeClass('scroll-navchange');
         $('.headerbar').removeClass('scroll-headerchange');
      }
  });
});


$(document).ready(function() {
   $('.navbar-toggler').click(function() {
     $('.menu-menu-1-container').toggleClass('act');
   });
 });

 

 

 var swiper = new Swiper(".mySwiperone", {
  slidesPerView: 1, 
  // autoHeight: false,
  effect: 'fade',
  loop: true,
  // autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiperthree", {
    slidesPerView: 1,
    loop: true,
      spaceBetween: 35,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        414: {
          slidesPerView: 1.5,
          spaceBetween: 20,
          centeredSlides: false,
        },
        991.98: {
          slidesPerView: 3,
          spaceBetween: 35,
          centeredSlides: true,
        },
      },
    });

    var swiper = new Swiper(".mySwipertwo", {
      slidesPerView: 1,
      loop: true,
      autoHeight: true,
        spaceBetween: 35,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          414: {
            slidesPerView: 1.5,
            spaceBetween: 20,
            autoHeight: false,
            centeredSlides: false,
          },
          991.98: {
            slidesPerView: 2,
            spaceBetween: 35,
            autoHeight: false,
            centeredSlides: false,
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 35,
            centeredSlides: true,
          },
        },
      });


      $('.control').click( function(){
        $('body').addClass('search-active');
        $('.input-search').focus();
      });
      
      $('.icon-close').click( function(){
        $('body').removeClass('search-active');
      });

      document.addEventListener("DOMContentLoaded", function() {
        var searchToggle = document.querySelector('.search-toggle');
        var searchForm = document.querySelector('.search-form');
        var searchField = document.querySelector('.search-field');
      
        searchToggle.addEventListener('click', function() {
          searchForm.classList.toggle('is-active');
          searchField.focus();
        });
      });