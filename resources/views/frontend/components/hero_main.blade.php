<section class="banner7-section">
    <div class="container">
        <div class="banner7-box">
            <div class="swiper main_hero_slider">
                <div class="swiper-wrapper">
                    
                @for ($i = 0; $i < 5; $i++)
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-7 col-md-12 p-lg-0">
                                <div class="banner7-content-wrap px-5">
                                    <div class="banner7-badge" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <i class="bi bi-rocket-takeoff"></i>
                                        Growth Strategy
                                    </div>
                                    <h1 class="banner7-title" data-swiper-parallax="-400" data-swiper-parallax-opacity="0">
                                        Good Business Planning <span>Ensures Success.</span>
                                    </h1>
                                    <p class="banner7-desc" data-swiper-parallax="-600" data-swiper-parallax-opacity="0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <div class="banner7-actions" data-swiper-parallax="-800" data-swiper-parallax-opacity="0">
                                        <a href="#" class="banner7-btn-main">Explore Services</a>
                                        <div class="banner7-video-play">
                                            <button class="banner7-play-btn"></button>
                                            <span>Watch How</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-md-12 p-lg-0">
                                <div class="banner7-visual-wrap" data-swiper-parallax="-300">
                                    <div class="banner7-mask-layer">
                                        <img src="https://i.pinimg.com/736x/64/73/25/647325b786074e67b1f203a329588e87.jpg" alt="Strategic Business Slide">
                                    </div>
                                    <div class="banner7-blob banner7-blob-1"></div>
                                    <div class="banner7-blob banner7-blob-2"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endfor 

                </div>

                <div class="swiper-pagination banner7-pagination"></div>
            </div>
        </div>
    </div>
</section>