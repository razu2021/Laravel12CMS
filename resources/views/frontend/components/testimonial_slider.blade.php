<section class="testimonial py-5">
    <div class="container">
        <!-- Header -->
        <div class="testimonial__header text-center mb-5">
            <h2 class="testimonial__title">What Our Clients Say</h2>
            <p class="testimonial__subtitle">Trusted by hundreds of happy customers</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper testimonial__slider">
            <div class="swiper-wrapper">
                <!-- Loop 10 testimonials -->
                @for ($i = 0; $i < 10; $i++)
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <div class="testimonial__quote">“</div>
                        <div class="testimonial__content">
                            <p class="testimonial__text">
                                This company transformed our business! Highly recommended.
                            </p>
                            <div class="testimonial__user">
                                <div class="testimonial__img">
                                    <img src="https://i.pravatar.cc/100?img={{ 10 + $i }}" alt="client">
                                </div>
                                <div>
                                    <h4 class="testimonial__name">Alice Johnson</h4>
                                    <span class="testimonial__role">CEO, TechCorp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>