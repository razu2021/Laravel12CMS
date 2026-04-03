<section class="team py-5">
    <div class="container">
        <div class="team__header text-center mb-5">
            <h2 class="team__title">Our Team</h2>
            <p class="team__subtitle">Meet the people behind our success</p>
        </div>

        <div class="row g-4">
            <!-- Single Member -->
            @for ($i = 0 ; $i < 10 ; $i++)
                
            
            <div class="col-md-6 col-lg-3">
                <div class="team__card">
                    
                    <div class="team__img">
                        <img src="https://i.pravatar.cc/300?img=1" alt="team">
                        
                        <div class="team__social">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="team__content text-center">
                        <h4 class="team__name">John Doe</h4>
                        <span class="team__role">UI/UX Designer</span>
                    </div>

                </div>
            </div>
            @endfor
            <!-- Copy more members -->
        </div>
    </div>
</section>
