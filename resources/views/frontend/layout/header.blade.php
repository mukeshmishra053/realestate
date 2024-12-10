<header id="header_main" class="header header-fixed type-home8 style-no-bg style-container">
    <div class="header-inner">
       <div class="header-inner-wrap">
          <div id="site-logo">
             <a href="{{ route('home') }}" rel="home">
             <img class="d-block" id="logo-header" src="{{ asset('/') }}frontend/images/logo/Patliputra_Property_Hubs.png"  alt="" style="max-width: 126px;">
             </a>
          </div>
          <nav class="main-menu">
             <ul class="navigation float-right">
                <li class="has-children">
                   <a href="javascript:void(0);"> Buy   </a>
                   @if(!empty($categoriesData))
                    <ul class="mega-menu">
                        <li>
                            <ul>
                                <li class="title">Popular Choices</li>
                                    @foreach ($categoriesData as $categories)
                                        <li>
                                            <a href="{{ route('home.properties',['category_id'=>$categories->id,'type'=>'sale']) }}">{{ $categories->name}}</a>
                                        </li>
                                    @endforeach
                                <li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="title">Property Types</li>
                                @foreach ($categoriesData as $cate)
                                    <li>
                                        <a href="{{ route('home.properties',['category_id'=>$cate->id,'city_id'=>$singleCity->id,'type'=>'sale']) }}">{{ $cate->name}} in {{ $singleCity->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="title">Budget</li>
                                <li>
                                <a href="{{ route('home.properties',['price_range'=>'under_50','type'=>'sale']) }}">Under ₹ 50 Lac</a>
                                </li>
                                <li>
                                <a href="{{ route('home.properties',['price_range'=>'50_to_1cr','type'=>'sale']) }}">₹ 50 Lac - ₹ 1 Cr</a>
                                </li>
                                <li>
                                <a href="{{ route('home.properties',['price_range'=>'1cr_to_1_5cr','type'=>'sale']) }}">₹ 1 Cr - ₹ 1.5 Cr</a>
                                </li>
                                <li>
                                <a href="{{ route('home.properties',['price_range'=>'above_1_5cr','type'=>'sale']) }}">Above ₹ 1.5 Cr</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="title">Explore</li>
                                <li>
                                <a href="#!">Localities in {{ $singleCity->name}}</a>
                                </li>
                                <li>
                                <a href="{{ route('home.projects',['city_id'=>$singleCity->id]) }}">Projects in {{ $singleCity->name}}</a>
                                </li>
                                <li>
                                <a href="#!">Investment Hotspot</a>
                                </li>
                                <li>
                                <a href="#!">Find an Agent</a>
                                </li>
                                <li>
                                <a href="#!">Home Interiors in {{ $singleCity->name}}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                   @endif
                </li>
                <li class="has-children">
                   <a href="javascript:void(0);">Rent   </a>
                    <ul class="mega-menu">
                      <li>
                        @if(!empty($categoriesData))
                         <ul>
                            <li class="title">Popular Choices</li>
                            @foreach ($categoriesData as $cat1)
                                <li>
                                    <a href="{{ route('home.properties',['category_id'=>$cat1->id,'type'=>'rent'])}}">{{ $cat1->name}}</a>
                                </li>
                            @endforeach
                         </ul>
                        @endif
                      </li>
                      <li>
                         <ul>
                            <li class="title">Property Types</li>
                            @foreach ($categoriesData as $cate)
                              <li>
                                 <a href="{{ route('home.properties',['category_id'=>$cate->id,'city_id'=>$singleCity->id,'type'=>'sale']) }}">{{ $cate->name}} in {{ $singleCity->name }}</a>
                              </li>
                            @endforeach
                         </ul>
                      </li>
                      <li>
                         <ul>
                            <li class="title">Budget</li>
                            <li>
                               <a href="{{ route('home.properties',['price_range'=>'under_10','type'=>'rent']) }}">Under ₹ 10,000</a>
                            </li>
                            <li>
                               <a href="{{ route('home.properties',['price_range'=>'10_to_15','type'=>'rent']) }}">₹ 10,000 - ₹ 15,000</a>
                            </li>
                            <li>
                               <a href="{{ route('home.properties',['price_range'=>'15_to_25','type'=>'rent']) }}">₹ 15,000 - ₹ 25,000</a>
                            </li>
                            <li>
                               <a href="{{ route('home.properties',['price_range'=>'above_25','type'=>'rent']) }}">Above ₹ 25,000</a>
                            </li>

                         </ul>
                      </li>
                      <li>
                         <ul>
                            <li class="title">Explore</li>
                            <li>
                               <a href="#!">Localities in New Delhi</a>
                            </li>
                            <li>
                               <a href="#!">Buy Vs Rent</a>
                            </li>
                            <li>
                               <a href="#!">Find an Agent</a>
                            </li>
                            <li>
                               <a href="#!">Share Requirement</a>
                            </li>
                            <li>
                               <a href="#!">Property Services</a>
                            </li>
                            <li>
                               <a href="#!">Rent Agreement</a>
                            </li>
                         </ul>
                      </li>
                    </ul>
                </li>
                <li class="has-children">
                   <a href="javascript:void(0);">Home Interior  </a>
                   @if(!empty($homeCategoriesForHeader))
                    <ul class="mega-menu">
                        <li>
                            <ul>
                                @foreach ($homeCategoriesForHeader as $header)
                                    <li>
                                        <a href="{{ route('home.properties',['category_id'=>$header->id]) }}">{{ $header->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                   @endif
                </li>
                {{-- <li class="has-children">
                   <a href="{{ route('construction') }}">Construction </a>
                </li>
                <li class="has-children">
                   <a href="javascript:void(0);">Equipment </a>
                </li> --}}
                <li class="has-children">
                   <a href="javascript:void(0);">Propery Type  </a>
                   @if(!empty($categoriesData))
                    <ul>
                        @foreach ($categoriesData as $cat2)
                            <li><a href="{{ route('home.properties',['category_id'=>$cat2->id]) }}">{{ $cat2->name }}</a></li>
                        @endforeach
                    </ul>
                   @endif
                </li>
                <li class="has-children">
                    <a href="{{ route('about.us') }}">About Us  </a>
                 </li>
                 <li class="has-children">
                   <a href="javascript:void(0);">Help </a>
                   <ul>
                        <li><a href="{{ route('help') }}">Help center</a></li>
                   </ul>
                </li>

                @if(Auth::guard('account')->check())
                    <li class="has-children">
                        <a href="javascript:void(0);">{{ auth('account')->user()->first_name }}</a>
                        <ul>
                            <li><a href="{{ route('public.account.dashboard') }}">Profile</a></li>
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endif

             </ul>
          </nav>
          <div class="header-right">
             <div class="header-call">
                <div class="icon">
                   <i class="flaticon-phone"></i>
                </div>
                <div class="number">800-555-6789</div>
             </div>
            @if(!Auth::guard('account')->check())
                <div data-bs-toggle="modal" data-bs-target="#modallogin" class="header-user">
                    <div class="icon">
                    <i class="flaticon-user"></i>
                    </div>
                </div>
                <div class="header-btn">
                    <a href="#!" class="tf-button-default type-1">Post Property</a>
                </div>
            @endif
          </div>
          <a class="mobile-nav-toggler mobile-button" href="#menu"></a>
       </div>
    </div>
    <nav id="menu">
       <a class="close" aria-label="Close menu" href="#mm-22">
       <i class="icon-close"></i>
       </a>
       <ul>
            <li class="current">
                <li><a href="{{ route('home') }}">Home</a></li>
            </li>
            <li>
                <span>Buy</span>
                <ul>
                    @if(!empty($categoriesData))
                    <li>
                    <span>Popular Choices</span>
                    <ul>
                        @foreach ($categoriesData as $categories)
                            <li>
                                <a href="{{ route('home.properties',['category_id'=>$categories->id,'type'=>'sale']) }}">{{ $categories->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    </li>
                    @endif
                    <li>
                    <span>Property Types</span>
                    <ul>
                        @foreach ($categoriesData as $cate)
                            <li>
                                <a href="{{ route('home.properties',['category_id'=>$cate->id,'city_id'=>$singleCity->id,'type'=>'sale']) }}">{{ $cate->name}} in {{ $singleCity->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    </li>
                    <li>
                    <span>Budget</span>
                    <ul>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'under_50','type'=>'sale']) }}">Under ₹ 50 Lac</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'50_to_1cr','type'=>'sale']) }}">₹ 50 Lac - ₹ 1 Cr</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'1cr_to_1_5cr','type'=>'sale']) }}">₹ 1 Cr - ₹ 1.5 Cr</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'above_1_5cr','type'=>'sale']) }}">Above ₹ 1.5 Cr</a>
                            </li>
                    </ul>
                    </li>
                    <li>
                    <span>Explore</span>
                    <ul>
                            <li>
                                <a href="#!">Localities in {{ $singleCity->name}}</a>
                            </li>
                            <li>
                                <a href="{{ route('home.projects',['city_id'=>$singleCity->id]) }}">Projects in {{ $singleCity->name}}</a>
                            </li>
                            <li>
                                <a href="#!">Investment Hotspot</a>
                            </li>
                            <li>
                                <a href="#!">Find an Agent</a>
                            </li>
                            <li>
                                <a href="#!">Home Interiors in {{ $singleCity->name}}</a>
                            </li>
                    </ul>
                    </li>
                </ul>
            </li>
            <li>
                <span>Rent</span>
                <ul>
                    <li>
                        <span>Popular Choices</span>
                        @if(!empty($categoriesData))
                            <ul>
                            @foreach ($categoriesData as $cat1)
                                <li>
                                    <a href="{{ route('home.properties',['category_id'=>$cat1->id,'type'=>'rent'])}}">{{ $cat1->name}}</a>
                                </li>
                            @endforeach
                            </ul>
                        @endif
                    </li>
                    <li>
                        <span>Popular Types</span>
                        @if(!empty($categoriesData))
                            <ul>
                                @foreach ($categoriesData as $cate)
                                    <li>
                                        <a href="{{ route('home.properties',['category_id'=>$cate->id,'city_id'=>$singleCity->id,'type'=>'sale']) }}">{{ $cate->name}} in {{ $singleCity->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li>
                        <span>Budget</span>
                        <ul>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'under_10','type'=>'rent']) }}">Under ₹ 10,000</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'10_to_15','type'=>'rent']) }}">₹ 10,000 - ₹ 15,000</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'15_to_25','type'=>'rent']) }}">₹ 15,000 - ₹ 25,000</a>
                            </li>
                            <li>
                                <a href="{{ route('home.properties',['price_range'=>'above_25','type'=>'rent']) }}">Above ₹ 25,000</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Explore</span>
                        <ul>
                            <li>
                                <a href="#!">Localities in New Delhi</a>
                            </li>
                            <li>
                                <a href="#!">Buy Vs Rent</a>
                            </li>
                            <li>
                                <a href="#!">Find an Agent</a>
                            </li>
                            <li>
                                <a href="#!">Share Requirement</a>
                            </li>
                            <li>
                                <a href="#!">Property Services</a>
                            </li>
                            <li>
                                <a href="#!">Rent Agreement</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="{{ route('about.us') }}">About Us</a></li>
            <li>
                <span>Property Type</span>
                <ul>
                    @foreach ($categoriesData as $cat2)
                        <li><a href="{{ route('home.properties',['category_id'=>$cat2->id]) }}">{{ $cat2->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <span>Help</span>
                <ul>
                    <li><a href="{{ route('help') }}">Help center</a></li>
                </ul>
            </li>
            @if(Auth::guard('account')->check())
            <li>
                <span>{{ auth('account')->user()->first_name }}</span>
                <ul>
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-forms').submit();">Logout</a></li>
                    <form id="logout-forms" action="{{ route('public.account.logout') }}"
                            method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
            @endif
       </ul>
    </nav>
 </header>
