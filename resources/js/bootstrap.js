import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import jQuery from 'jquery';
window.$ = jQuery;

/**
 *  Swiper -
 */

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


Swiper.use([Navigation, Pagination, Autoplay]);

// init Swiper:
const swiper = new Swiper('.gallery__swiper', {
    pagination: {
        el: ".swiper-pagination",
        // dynamicBullets: true,
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    on: {
        init: function() {
            checkArrow();
        },
        resize: function () {
            checkArrow();
        }
    }
});

function checkArrow() {
    let swiperPrev = document.querySelector('.swiper-button-prev');
    let swiperNext = document.querySelector('.swiper-button-next');
    if ( window.innerWidth < 800  ) {
        swiperPrev.style.display = 'none';
        swiperNext.style.display = 'none';
    } else {
        swiperPrev.style.display = 'block';
        swiperNext.style.display = 'block';
    }
}

/**
 *  Slider with multiple items
 */
const multiSwiper = new Swiper('.multi-swiper', {
    slidesPerView: 10,
    spaceBetween: 16,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false
    // },
    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetweenSlides: 16
        },
        480: {
            slidesPerView: 4,
            spaceBetweenSlides: 16
        },
        800: {
            slidesPerView: 5,
            spaceBetweenSlides: 16
        },
        1000: {
            slidesPerView: 6,
            spaceBetweenSlides: 16
        },
        1200: {
            slidesPerView: 8,
            spaceBetweenSlides: 16
        },
        1400: {
            slidesPerView: 10,
            spaceBetweenSlides: 16
        },
        // when window width is <= 999px
        // 999: {
        //     slidesPerView: 2,
        //     spaceBetweenSlides: 50
        // }
    }
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // }
});

/**
 *  Featured items
 */
const featuredProperties = new Swiper('.featured_properties', {
    slidesPerView: 3,
    spaceBetween: 32,
    pagination: {
        el: ".swiper-pagination",
        // dynamicBullets: true,
        // type: "progressbar",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true
    },
    speed: 500,
    loop: true,
});

import './core/maps.js'
