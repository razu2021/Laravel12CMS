<section class="banner2">
  <div class="swiper banner_slider2">
    <div class="swiper-wrapper">
      @for ($i = 0 ; $i < 6 ; $i++)
      <div class="swiper-slide">
        <div class="glow-circle blue-glow"></div>
        <div class="glow-circle purple-glow"></div>

        <div class="container h-100 ">
          <div class="row align-items-center h-100">
            <div class="col-lg-7 col-12 text-content" data-swiper-parallax="-400">
              <div class="top-tag">Next Generation Tech</div>
              <h1 class="hero-title">Elevate Your <br> <span class="highlight">Digital</span> Vision</h1>
              <p class="hero-desc">Experience the power of modern web development with pixel-perfect layouts and blazingly fast performance.</p>
              <div class="btn-holder">
                <a href="#" class="primary-btn">Get Started Now</a>
                <a href="#" class="video-btn"><i class="bi bi-play-circle"></i> View Demo</a>
              </div>
            </div>
            
            <div class="col-lg-5 col-12 image-content" data-swiper-parallax="-600">
              <div class="frame-wrapper">
                <div class="glass-frame">
                  <img src="https://html.rrdevs.net/consulter/assets/img/home/our-portfolio-home__item-3.png" alt="Graphic">
                </div>
                <div class="floating-badge">99% Faster</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endfor

    

    </div>
    <div class="swiper-button-next custom-nav"></div>
    <div class="swiper-button-prev custom-nav"></div>
    <div class="swiper-pagination custom-dots"></div>
  </div>
</section>
