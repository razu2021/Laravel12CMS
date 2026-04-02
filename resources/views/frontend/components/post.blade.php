<section class="pt-5">
    <div class="container py-5">
       <div class="mb-5">
 <!-- section heading start here  -->
        @includeif('frontend/components/ui/sectionheading2', [
            'title' => 'Our Latest Insights',
            'heading' => 'Stay Updated with Our Blog',
            'description' => 'Discover the latest trends, tips, and insights in education and global opportunities through our expert-curated blog. Stay informed and inspired on your journey to success.']) 
        <!-section heading end here -->
       </div>
        <div class="row">
            @for($i = 1; $i <= 4; $i++)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-3 gap-3">
                @includeif('frontend/components/ui/card1')
            </div>
            @endfor
    
        </div>
    </div>
</section>