@if(!empty($contents) && $contents->count() > 0)
<section class="service_slider1">
    <div class="service_slider1__bg">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
    </div>


    

<h1>{{$sectionsdata->description}} ddg</h1>


    <div class="container">
        <!-- section heading start here  -->
        @includeif('frontend/components/ui/sectionheading2', [
        'title' => 'Our Philosophy',
        'heading' => 'Driven Global Success',
        'description' => 'Amra bisshas kori protiti manusher sopno unique, tai amader kache apnar success-er priority
        shobcheye beshi.'])
        <!-- section heading end here  -->
        <div class="swiper serviceSwiper">
            <div class="swiper-wrapper">
                @foreach ($contents as $service)
                <div class="swiper-slide">
                    <div class="service-card-v2">
                        <div class="img-area">
                            <img src="{{ asset($service->cover_image ?? 'https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800') }}"
                                alt="{{ $service->title ?? 'service image' }}">
                            <div class="badge-icon"><i class="{{ $service->icon ?? 'bi bi-briefcase' }}"></i></div>
                        </div>
                        <div class="content-area">
                            <h4>{{$service->title ?? ''}}</h4>
                            <p>{{Str::words($service->short_des , 15 ?? '' )}}</p>
                            <a href="{{ $service->button_url ?? '#' }}"
                                class="arrow-btn">{{ $service->button ?? 'Explore now' }} 
                                <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
@endif