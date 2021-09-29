/*
 * Projeto: Legus
 * Desenvolvimento: LAB2B
 */

var Util = {

    corousel: function(){
        var swiper = new Swiper(".home-container",{ 
            slidesPerView: 'auto',
            loop: true,
            effect: 'fade',
            speed: 4000,
            slidesPerView: '1',
            autoplay: {
                enabled: true,
                delay: 1,
            },
        });
    },


}
