'use strict';
var mySwiper = new Swiper(".swiper-container.my_swiper", {
    loop: false,
    slidesPerView: 4,
    spaceBetween: 30,
    // centeredSlides: true,
    slideToClickedSlide: false,
    // If we need pagination
  
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        }
      },
       // keyboard control
      keyboard: {
          enabled: true,
      }
  });
  
  // 2 of 2 : PHOTOSWIPE #######################################
  
  $(function() {
    $('[data-fancybox="gallery"]').fancybox({
      loop: true
    });
  });
  