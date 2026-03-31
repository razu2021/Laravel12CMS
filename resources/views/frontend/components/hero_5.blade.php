<section class="banner4">
  <div class="swiper banner4-slider">
    <div class="swiper-wrapper">
      
      @for ($i = 0 ; $i < 6 ; $i++)
      <div class="swiper-slide">
        <div class="full-bg" style="background-image: url('https://html.rrdevs.net/consulter/assets/img/banner/banner-home.png');"></div>
        <div class="overlay-gradient"></div>

        <div class="moving-blobs">
          <div class="blob-blue"></div>
          <div class="blob-purple"></div>
        </div>

        <div class="container-fluid p-0 h-100 position-relative z-index-10">
          <div class="row g-0 h-100 align-items-center">
            
            <div class="col-xl-6 col-lg-7">
              <div class="content-wrapper">
                <div class="hero-content" data-swiper-parallax="-400">
                  <div class="badge-new">
                    <span>Exclusive</span> 2026 Digital Trends
                  </div>
                  <h1 class="hero-title">
                    Empowering <br> <span class="text-gradient">Innovations</span> <br> for <span class="text-outline">Future</span>
                  </h1>
                  <p class="hero-desc">
                    Experience a seamless blend of aesthetics and performance. We build digital products that resonate with your audience and drive growth.
                  </p>
                  <div class="hero-actions">
                    <a href="#" class="btn-glow">Explore Portfolio <i class="bi bi-arrow-right"></i></a>
                    <a href="#" class="btn-link">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-6 col-lg-5 d-none d-lg-flex justify-content-end align-items-center h-100 overflow-hidden">
              <div class="image-end-container" data-swiper-parallax="-800">
                <div class="image-mask animate-float">
                  <img src="https://html.rrdevs.net/consulter/assets/img/home/our-portfolio-home__item-3.png" alt="Cover Image" class="end-cover-img">
                  <div class="glass-orb"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      @endfor

    </div>

    <div class="slider-footer">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="swiper-pagination custom-dots"></div>
        <div class="navigation-arrows">
          <div class="swiper-button-prev prev-btn"><</div>
          <div class="swiper-button-next next-btn">></div>
        </div>
      </div>
    </div>
  </div>
</section>
