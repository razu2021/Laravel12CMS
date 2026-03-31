
<section class="banner5">
  <div class="swiper banner5-slider">
    <div class="swiper-wrapper">
      
      @for ($i = 0 ; $i < 5 ; $i++)
      <div class="swiper-slide">
        <div class="vibrant-bg" style="background-image: url('https://html.rrdevs.net/consulter/assets/img/banner/banner-home.png');"></div>
        
        <div class="overlay-vivid"></div>
        
        <div class="particles-ripple"></div>

        <div class="container h-100 position-relative z-index-20">
          <div class="row h-100 align-items-center justify-content-center">
            
            <div class="col-xl-9 col-lg-10 col-12 text-center content-center">
              <div class="content-box" data-swiper-parallax="-500">
                <span class="vibe-tag" data-swiper-parallax="-200">Global Strategy 2026</span>
                
                <h1 class="vivid-title" data-swiper-parallax="-300">
                  Revolutionize <br> Your <span class="text-neon">Business</span> Growth
                </h1>
                
                <p class="vivid-desc" data-swiper-parallax="-400">
                  Navigate complex challenges with our cutting-edge AI insights and expert consulting. 
                  We craft strategies that empower your vision and dominate the market.
                </p>
                
                <div class="vivid-actions" data-swiper-parallax="-500">
                  <a href="#" class="btn-ripple-cyan">Get Started Now</a>
                  <a href="#" class="btn-outline-vivid">Explore Case Studies <i class="bi bi-arrow-up-right ms-2"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      @endfor

    </div>

    <div class="swiper-pagination custom-pagination-center"></div>
    
    <div class="swiper-button-prev prev-vivid"></div>
    <div class="swiper-button-next next-vivid"></div>
  </div>
</section>