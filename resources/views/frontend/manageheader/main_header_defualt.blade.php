        <div class="container">
            <div class="mobile__header ">
                <div class="mobile__header__logo">
                    <a href="https://handsbd.org"><img src="https://handsbd.org/contents/assets/website/assets/img/logo (2).png" alt="image" class="img-fluid"></a>
                </div>
                <div class="mobile__social">
                    <ul>
                        <li><a href="https://www.facebook.com/humanandnaturedevelopmentsociety"> <span> <i class="fa-brands fa-square-facebook"></i> </span></a></li>
                        <li><a href="https://www.linkedin.com/company/human-and-nature-development-society-hands/?viewAsMember=true"><span> <i class="fa-brands fa-linkedin"></i> </span></a></li>
                        <li><a href="https://twitter.com/hands_bd"> <span> <i class="fa-brands fa-square-x-twitter"></i></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCTAqN_DX4Hsjuk4MPGrHsiQ"> <span> <i class="fa-brands fa-youtube"></i> </span></a></li>
                    </ul>
                </div>
                <div class="mobile__header__toggler " id="show" onclick="toggleMenushow()">
                    <span><i class="fa-solid fa-bars"></i></span>
                </div>
            </div>
        </div>
        <div id="myheader">
            <div class="container">
                <div class="row myheader">
                    <div class="mobile__menu " id="mobile__menu">
                        <div class="mobile__logo">
                            <a href="https://handsbd.org/index">HANDS </a>
                        </div>
                        <div class="mobile__toggler" onclick="toggleMenuclose()">
                            <span>&times;</span>
                        </div>
                    </div>

                    <div class="main__menu__area">
                        <div class="main__menu ">
                            <ul>
                                <li class="list-item"><a href="{{route('index')}}" class="list-link"> Home </a></li>

                                @foreach ($categorys as $cat)
                                <li class="list-item main__dropdown"><a href="{{route('categorypage',$cat->url ?? 'index')}}" class="list-link"> {{$cat->name ?? ''}} <span> + </span> </a>
                                    <div class="main__submenu">
                                        <ul>
                                            @foreach ($cat->subCategory as $subcate)
                                                 <li class="list-item"><a href="{{route('sub_categorypage',[$cat->url,$subcate->url])}}" class="list-link"> {{$subcate->name ?? ''}} <span> + </span></a>
                                                <div class="submenu">
                                                    <ul>
                                                        @foreach ($subcate->childCategory as $childcate)
                                                            <li><a href="{{route('child_CategoryPage',[$cat->url,$subcate->url,$childcate->url])}}">{{$childcate->name ?? ''}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach
                                           

                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="user__menu">
                            <div class="mobile_career_menu">
                                <ul>
                                <li class="list-item "> <a href="https://handsbd.org/get-appoinment">Get Appoinment </a></li>
                                <li class="list-item "> <a href="https://handsbd.org/interenship-program"> Internship </a></li>
                                <li class="list-item "> <a href="https://handsbd.org/job-and-career-program"> Career</a></li>
                                <li class="list-item "> <a href="https://handsbd.org/hands-notice-board"> Notice</a></li>
                                </ul>
                            </div>
                            <ul>
                                <li class="list-item"><a href="https://handsbd.org/make-your-donation" class="lisct-link"><i class="fa-solid fa-hand-holding-dollar"></i> <span> Donate </span></a></li>
                                <li class="list-item">
                                    <a href="https://handsbd.org/sitemap" class="lisct-link"><i class="fa-solid fa-sitemap"></i><span> Sitemap</span></a></li>
                                <li class="list-item"><a href="#" class="lisct-link" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-bars-staggered"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>