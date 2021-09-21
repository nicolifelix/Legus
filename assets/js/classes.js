/*
 * Projeto: DUX LP
 * Desenvolvimento: LAB2B
 */

var Util = {

    corousel: function(){
        var swiper = new Swiper(".mySwiper", {});
    },

    caroulselHome: function(){
        const swiper = new Swiper(".swiper-banner", {
            slidesPerView: 1,
            slidesPerGroup: 1,
            centeredSlides: true,
            autoplay: 1500,
            loop: true,
           
             
               // when window width is >= 900px
               
            
          });
    },

    caroulselVideo: function(){
        const swiper = new Swiper(".swiper-container", {
            slidesPerView: 2,
            slidesPerGroup: 1,
            centeredSlides: true,
            autoplay: 1500,
            loop: true,
           
             
          });
    },



}
