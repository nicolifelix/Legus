const swiper2 = new Swiper(".swiper-banner", {
  slidesPerView: 1,
  slidesPerGroup: 1,
  centeredSlides: true,
  autoplay: 1000,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


const swiper = new Swiper(".swiper-container", {
    slidesPerView: 4,
    slidesPerGroup: 4,
    centeredSlides: true,
    autoplay: 1500,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
     breakpoints: {
       // when window width is >= 800px
       800: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 5,
         centeredSlides: false,
      },
    }
  });


  const swiper3 = new Swiper(".swiper-card", {
    slidesPerView: 2,
    slidesPerGroup: 1,
    centeredSlides: true,
    autoplay: 1500,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
     breakpoints: {
      // when window width is >= 600px
      600: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 5,
        centeredSlides: true
        
      },
       // when window width is >= 900px
       900: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 5,
         centeredSlides: false
      },
    }
  });

  

  