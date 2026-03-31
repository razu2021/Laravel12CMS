<section>
    <div class="main_nav">
        <div class="container main_navbar">
            <div class="logo">
                <a href="{{ route('index') }}" class="brand-link">
                    <img src="{{ asset('contents/website/assets/images/logo.png') }}" alt="Logo">
                    <span class="brand-text"><span>Global</span> Guide Guru</span>

                </a>
                 <button class="menu_toggle_btn opensidebar" id="exploreBtn"> <i class="bi bi-list"></i> </button>
            </div>
           
       
            <div class="main_menu">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                @if (!empty($categorys) && $categorys->count() > 0)
                 @foreach ($categorys as $cate)
                    <li><a href="{{ route('categorypage',$cate->url ?? '#') }}">{{ $cate->name ?? '' }} @if($cate->subCategory->count() > 0) <span> <i class="bi bi-caret-down-fill"></i></span> @endif</a>
                        @if (!empty($cate->subCategory) && $cate->subCategory->count() > 0)
                        <div class="has_subcategory">
                            <ul>
                                @foreach ($cate->subCategory as $subcate)
                                <li><a href="{{ route('sub_categorypage',[$cate->url ?? '#',$subcate->url ?? '#']) }}">{{ $subcate->name ?? '' }}  @if ($subcate->childCategory->count() > 0) <span> <i class="bi bi-chevron-double-right"></i></span> @endif</a>
                                    @if (!empty($subcate->childCategory) && $subcate->childCategory->count() > 0)
                                    <div class="has_childcategory">
                                        <ul>
                                            @foreach ($subcate->childCategory as $childcate)
                                               <li><a href="{{ route('child_CategoryPage',[$cate->url ?? '#',$subcate->url ?? '#', $childcate->url ?? '#']) }}">{{ $childcate->name ?? '' }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </li>
                    @endforeach
                @endif

                </ul>
            </div>
            {{-- main menu end here  --}}
            <div class="auth_actions">
                <ul>
                    <li><a class="btn_appointment" href="#">Get Appoinment</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


