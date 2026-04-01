<section class="destination1">
    <div class="container">
        <div class="section-head">
            <span class="sub-title">Global Opportunities</span>
            <h2 class="main-title">Top Destinations for Study Abroad</h2>
        </div>

        <div class="row g-4">
            @for($i=0 ; $i < 6 ; $i++)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="dest-card">
                    <div class="dest-card__image">
                        <img src="https://i.pinimg.com/736x/3d/bb/21/3dbb21d2806caf3f93b04aa6457af482.jpg" alt="Study in UK">
                        <div class="flag-icon">🇬🇧</div>
                    </div>
                    <div class="dest-card__info">
                        <h3>United Kingdom</h3>
                        <p>World-class education with 1-year Masters.</p>
                        <a href="#" class="explore-btn">Explore Univ <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
