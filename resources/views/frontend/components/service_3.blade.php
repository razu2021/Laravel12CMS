<section class="services-pro py-5">
    <div class="container">

        <!-- Header -->
        <div class="section-header text-center mb-5">
            <h2>Our Premium Services</h2>
            <p>We craft powerful digital experiences for modern businesses</p>
        </div>

        <div class="row g-4">

        @for($i = 0; $i < 6; $i++)
            <!-- Card -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card-pro">
                    <div class="card-bg"></div>

                    <div class="icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <h4>Web Development</h4>
                    <p>High-quality modern websites with clean architecture.</p>

                    <a href="#" class="read-more">
                        Explore <span>→</span>
                    </a>
                </div>
            </div>
        @endfor

        </div>

    </div>
</section>
