
<section class="banner1">
  <div class="background-elements">
    <div class="orbit-circle"></div>
    <div class="floating-cube"></div>
  </div>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @for ($i = 0 ; $i < 6 ; $i++)
      <div class="swiper-slide">
        <div class="image-layer" style="background-image: url('https://html.rrdevs.net/consulter/assets/img/banner/banner-home.png');"></div>
        <div class="overlay-layer"></div>

        <div class="container h-100">
          <div class="glass-content-box ">
            <div class="content-inner ">
              <h6 class="category" data-swiper-parallax="-100">Digital Evolution</h6>
              <h2 class="title" data-swiper-parallax="-300">Unleash <br>The <span class="accent">Future</span></h2>
              <p class="description" data-swiper-parallax="-500">
                Crafting digital experiences that transcend boundaries. Modern, responsive, and blazingly fast.
              </p>
              <div class="action-area" data-swiper-parallax="-700">
                <a href="#" class="main-btn">Start Project</a>
                <div class="scroll-indicator">
                  <span class="line"></span>
                  <span class="text">SCROLL</span>
                </div>
              </div>
            </div>
            
            <div class="side-graphic" data-swiper-parallax="-800">
                <img src="https://html.rrdevs.net/consulter/assets/img/home/our-portfolio-home__item-3.png" alt="Tech" class="tilt-img">
            </div>
          </div>
        </div>
      </div>
      @endfor

  

    </div>
    <div class="nav-wrapper">
        <div class="swiper-pagination"></div>
        <div class="slider-controls">
            <div class="prev-slide"><i class="bi bi-arrow-left"></i></div>
            <div class="next-slide"><i class="bi bi-arrow-right"></i></div>
        </div>
    </div>
  </div>
</section>
