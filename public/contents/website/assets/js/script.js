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