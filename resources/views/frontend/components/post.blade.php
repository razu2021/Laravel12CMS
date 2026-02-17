<style>
.post-card {
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;
}

.post-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.post-card img {
    height: 220px;
    object-fit: cover;
}
</style>





<!-- POST SECTION START -->


@if (!empty($contents))

<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Latest Posts</h2>
            <p class="text-muted">Read our latest news and articles</p>
        </div>

        <div class="row g-4">

            <!-- SINGLE POST -->
            @foreach ($contents as $post) 
            <div class="col-lg-3 col-md-6">
                <div class="card post-card h-100 border-0 shadow-sm">
                    <img src="https://picsum.photos/400/250?1" class="card-img-top" alt="post">

                    <div class="card-body d-flex flex-column">
                        <small class="text-muted mb-2">July 20, 2026</small>

                        <h5 class="card-title fw-semibold">
                            {{$post->heading ?? ''}}
                        </h5>

                        <p class="card-text text-muted">
                          {{$post->description ?? ''}}
                        </p>

                        <a href="#" class="btn btn-outline-primary mt-auto">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

         



        </div>
    </div>
</section>

@endif
<!-- POST SECTION END -->
