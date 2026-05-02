@extends('layouts/frontend')
@section('web_content')
<section class="sitemap-section">
    <div class="container">
        <h1 class="sitemap-title">HTML Sitemap</h1>
        
        <div class="row g-4">
            <!-- Categories Hierarchy -->
            <div class="col-lg-4 col-md-6">
                <div class="sitemap-card">
                    <h2 class="sitemap-category-header">Categories</h2>
                    <ul class="sitemap-list main-cat">
                        <li><a href="{{route('index')}}"> Home</a></li>
                        @if(!empty($categorys))
                        @foreach($categorys as $cat)
                        <li>
                            <a href="{{route('categorypage',$cat->url ?? '#')}}">{{$cat->name ?? ''}}</a>
                            <ul class="sub-cat">
                                <li>
                                    @foreach($cat->subCategory as $subcat)
                                    <a href="{{route('sub_categorypage',[$cat->url ?? '', $subcat->url ?? '#'])}}">{{$subcat->name ?? ''}}</a>
                                    <ul class="child-cat">
                                        @foreach($subcat->childCategory as $childcate)
                                            <li><a href="{{route('child_CategoryPage',[$cat->url ?? '#' ,$subcat->url ?? '#' ,$childcate->url ?? '#'])}}">{{$childcate->name ?? ''}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach

                            </ul>
                        </li>
                        @endforeach
                        @endif
                      
                    </ul>
                </div>
            </div>

            <!-- Content Types (Blog & News) -->
            <div class="col-lg-4 col-md-6">
                <div class="sitemap-card">
                    <h2 class="sitemap-category-header">Insights</h2>
                    <div class="mb-4">
                        <h3 class="sitemap-sub-header">Blog Posts</h3>
                        <ul class="sitemap-list">
                            <li><a href="#">How to build a Laravel CMS</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="sitemap-sub-header">Latest News</h3>
                        <ul class="sitemap-list">
                            <li><a href="#">Tech Trends in Bangladesh</a></li>
                            <li><a href="#">New Update on Laravel 12</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Specialized Content -->
            <div class="col-lg-4 col-md-6">
                <div class="sitemap-card">
                    <h2 class="sitemap-category-header">Resources</h2>
                    <div class="mb-4">
                        <h3 class="sitemap-sub-header">Events</h3>
                        <ul class="sitemap-list">
                            <li><a href="#">Charity Distribution 2026</a></li>
                            <li><a href="#">Web Dev Workshop</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="sitemap-sub-header">Case Studies</h3>
                        <ul class="sitemap-list">
                            <li><a href="#">HANDS Project Analysis</a></li>
                            <li><a href="#">E-commerce Growth Study</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection