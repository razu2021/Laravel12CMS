const partnerSwiper = new Swiper('.team__partner-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,

    slidesPerView: 2,
    spaceBetween: 30,
    speed: 1200,

    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },

    coverflowEffect: {
        rotate: 35,
        stretch: 0,
        depth: 180,
        modifier: 1.2,
        slideShadows: false,
    },

    breakpoints: {
        576: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        992: { slidesPerView: 5 },
    }
});
// =================== testimonial slider js start her e===========
const testimonialSwiper = new Swiper('.testimonial__slider', {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    speed: 1200,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    }
});



// =================== hero1 slider js end here ===========
const swiper = new Swiper(".mySwiper", {
  speed: 1000,
  parallax: true,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  effect: 'fade', // Smooth transition between slides
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
navigation: {
    nextEl: ".next-slide",
    prevEl: ".prev-slide",
  },
});

// =================== banner2 slider js end here ===========
const swiper2 = new Swiper(".banner_slider2", {
 speed: 1200,
  loop: true,
  parallax: true, // আধুনিক প্যারালাক্স ইফেক্ট
  autoplay: { delay: 6000, disableOnInteraction: false },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// =================== banner4 slider js end here ===========
const swiper4 = new Swiper(".banner4-slider", {
  speed: 1400,
  parallax: true,
  loop: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
// =================== banner5 slider js  here ===========
const swiper5 = new Swiper(".banner5-slider", {
  speed: 1600, // Very smooth and cinematic transition
  parallax: true,
  loop: true,
  effect: 'fade', // Full-screen fade looks great without external mockups
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// =================== hero banner6 slider js end here ===========
const swiper6 = new Swiper(".banner6-slider", {
  speed: 1800,
  parallax: true,
  loop: true,
  effect: 'creative',
  creativeEffect: {
    prev: { translate: ["-100%", 0, -500], rotate: [0, 0, -20], opacity: 0 },
    next: { translate: ["100%", 0, 0], opacity: 0 },
  },
  autoplay: { delay: 7000, disableOnInteraction: false },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});





/**
 * =====================================================
 *  image gallery script start here
 * ======================================================
 */

Fancybox.bind("[data-fancybox='gallery']", {
  Toolbar: false,
  animated: true,
  showClass: "fancybox-fadeIn",
});
/**
 * =====================================================
 *  Faq section script start here 
 * ======================================================
 */

document.querySelectorAll('.faq__question').forEach(item => {
  item.addEventListener('click', () => {
    const parent = item.parentElement;

    parent.classList.toggle('active');
  });
});