
<section class="partner3_slider">
    <div class="partner3__shapes">
        <div class="shape s-1"></div>
        <div class="shape s-2"></div>
    </div>

    <div class="container">
        
        <div>
            {{-- section heading --}}
            @includeIf('frontend.components.ui.sectionheading1',[
                'title'=>'section title',
                'heading'=>'section title',
                'description'=>'section title',
            ])
            {{-- section heading --}}
        </div>

        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                @for($i = 1; $i <= 10; $i++)
                <div class="swiper-slide">
                    <div class="p-card">
                        <div class="p-card__overlay"></div>
                        <img src="https://i.pinimg.com/736x/57/82/c1/5782c188d4cdcf14f3f71dc08b9053cc.jpg" alt="Oxford">
                        <div class="p-info">
                            <h4>Oxford University</h4>
                            <p>Premium Education Partner</p>
                        </div>
                    </div>
                </div>
                @endfor 

                
                

              

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>