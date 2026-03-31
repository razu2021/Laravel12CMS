<section class="banner6">
  <div class="swiper banner6-slider">
    <div class="swiper-wrapper">
      
      @for ($i = 0 ; $i < 5 ; $i++)
      <div class="swiper-slide">
        <div class="bg-layer" style="background-image: url('https://html.rrdevs.net/consulter/assets/img/banner/banner-home.png');"></div>
        
        <div class="gradient-mask"></div>

        <div class="shapes-container">
          <div class="blob blob-1"></div>
          <div class="blob blob-2"></div>
          <div class="geo-shape shape-square"></div>
          <div class="geo-shape shape-circle"></div>
        </div>

        <div class="container h-100 position-relative z-index-50">
          <div class="row h-100 align-items-center">
            
            <div class="col-xl-8 col-lg-10 col-12">
              <div class="content-v6-wrapper">
                
                <div class="upper-tag anim-item" data-swiper-parallax="-200">
                    <span class="line"></span>
                    <span class="text">Creative Partner 2026</span>
                </div>

                <h1 class="v6-title anim-item" data-swiper-parallax="-400">
                  Elevate <span class="highlight">Brands</span> <br> 
                  With <span class="outline">Future</span> Vision
                </h1>
                
                <p class="v6-desc anim-item" data-swiper-parallax="-600">
                  We are not just consultants; we are creators of digital excellence. Our strategies combined with stunning design deliver unmatched results and unforgettable experiences.
                </p>
                
                <div class="v6-btns anim-item" data-swiper-parallax="-800">
                  <a href="#" class="btn-main-v6">Launch Project <i class="bi bi-chevron-right ms-2"></i></a>
                  <a href="#" class="btn-outline-v6">Our Services</a>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
      @endfor

    </div>

    <div class="swiper-pagination v6-pagination"></div>
  </div>
</section>

