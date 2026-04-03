
<section class="service_slider1">
    <div class="service_slider1__bg">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
    </div>

    <div class="container">
        <!-- section heading start here  -->
         @includeif('frontend/components/ui/sectionheading2', [
            'title' => 'Our Philosophy',
            'heading' => 'Driven Global Success',
            'description' => 'Amra bisshas kori protiti manusher sopno unique, tai amader kache apnar success-er priority shobcheye beshi.'])
        <!-- section heading end here  -->
        <div class="swiper serviceSwiper">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="service-card-v2">
                        <div class="img-area">
                            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Career Counseling">
                            <div class="badge-icon"><i class="bi bi-briefcase"></i></div>
                        </div>
                        <div class="content-area">
                            <h4>Career Counseling</h4>
                            <p>Strategic path selection based on your profile and goals.</p>
                            <a href="#" class="arrow-btn">Explore <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-card-v2 active">
                        <div class="img-area">
                            <img src="https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Admission">
                            <div class="badge-icon"><i class="bi bi-mortarboard"></i></div>
                        </div>
                        <div class="content-area">
                            <h4>University Admission</h4>
                            <p>End-to-end support for top global university applications.</p>
                            <a href="#" class="arrow-btn">Explore <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-card-v2">
                        <div class="img-area">
                            <img src="https://images.pexels.com/photos/5920775/pexels-photo-5920775.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Visa">
                            <div class="badge-icon"><i class="bi bi-passport"></i></div>
                        </div>
                        <div class="content-area">
                            <h4>Visa Processing</h4>
                            <p>Expert documentation to ensure highest success rates.</p>
                            <a href="#" class="arrow-btn">Explore <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-card-v2">
                        <div class="img-area">
                            <img src="https://images.pexels.com/photos/3762224/pexels-photo-3762224.jpeg?auto=compress&cs=tinysrgb&w=800" alt="IELTS">
                            <div class="badge-icon"><i class="bi bi-translate"></i></div>
                        </div>
                        <div class="content-area">
                            <h4>Test Preparation</h4>
                            <p>Achieve your target score with our expert mentors.</p>
                            <a href="#" class="arrow-btn">Explore <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

