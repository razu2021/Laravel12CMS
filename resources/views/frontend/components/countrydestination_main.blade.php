<section class="destination2">
    <div class="bg-graphics">
        <div class="circle-shape animate-float"></div>
        <div class="square-shape animate-rotate"></div>
        <div class="blob-shape animate-pulse-slow"></div>
    </div>

    <div class="container mb-3">
        <!-- section heading start here  -->
        @includeif('frontend/components/ui/sectionheading2', [
            'title' => 'Explore Top Destinations',
            'heading' => 'Your Global Journey Starts Here',
            'description' => 'Discover your ideal study destination with our expert guidance. We help you navigate the best universities and programs worldwide, turning your global education dreams into reality.'])
        <!-- section heading end here  -->          
    </div>

    <div class="swiper destinationSlider">
        <div class="swiper-wrapper">
            @for($i=0 ; $i < 6 ; $i++)
            <div class="swiper-slide">
                <div class="dest-card-v2">
                    <div class="image-box">
                        <img src="https://i.pinimg.com/736x/61/c8/ec/61c8eca72fd85b7ff986ca402cb28f7d.jpg" alt="UK">
                        <div class="flag-tag">🇬🇧 UK</div>
                    </div>
                    <div class="content-box">
                        <h3>United Kingdom</h3>
                        <p>Experience world-class heritage and top-tier academic excellence.</p>
                        <a href="#" class="link">View Universities <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor 


            </div>
        
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>