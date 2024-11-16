<header id="header_main" class="header header-fixed type-home8 style-no-bg style-container">
    <div class="header-inner">
       <div class="header-inner-wrap">
          <div id="site-logo">
             <a href="index.php" rel="home">
             <img class="d-block" id="logo-header" src="{{ asset('/') }}frontend/images/logo/Patliputra_Property_Hubs.png"  alt="" style="max-width: 126px;">
             </a>
          </div>
          <nav class="main-menu">
             <ul class="navigation">
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
                                <li>
                                <a href="#!">Flats in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">House for sale in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Villa in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Plot in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Office Space in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Commercial Space in New-Delhi</a>
                                </li>
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
                                <a href="#!">Localities in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Projects in New-Delhi</a>
                                </li>
                                <li>
                                <a href="#!">Investment Hotspot</a>
                                </li>
                                <li>
                                <a href="#!">Find an Agent</a>
                                </li>
                                <li>
                                <a href="#!">Home Interiors in New-Delhi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="insgCss">
                                <li class="title">Insights</li>
                                <li>
                                <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Understand localities</a>
                                </li>
                                <li>
                                <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Read Resident Reviews</a>
                                </li>
                                <li>
                                <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Check Price Trends</a>
                                </li>
                                <li>
                                <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Tools, Utilities & more</a>
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
                            <li>
                               <a href="#!">Flat for rent in New Delhi</a>
                            </li>
                            <li>
                               <a href="#!">House for rent in New Delhi</a>
                            </li>
                            <li>
                               <a href="#!">Villa for rent in New-Delhi</a>
                            </li>
                            <li>
                               <a href="#!">PG in New Delhi</a>
                            </li>
                            <li>
                               <a href="#!">Office Space in New-Delhi</a>
                            </li>
                            <li>
                               <a href="#!">Hostels in New Delhi</a>
                            </li>
                            <li>
                               <a href="#!">Room for Rent in New </a>
                            </li>
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
                      <li>
                         <ul class="insgCss">
                            <li class="title">Insights</li>
                            <li>
                               <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Understand localities</a>
                            </li>
                            <li>
                               <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Read Resident Reviews</a>
                            </li>
                            <li>
                               <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Check Price Trends</a>
                            </li>
                            <li>
                               <a href="#!"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Tools, Utilities & more</a>
                            </li>
                         </ul>
                      </li>
                    </ul>
                </li>
                <li class="has-children">
                   <a href="#">Home Interior  </a>
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
                   <a href="javascript:void(0);">Help </a>
                   <ul>
                      <li><a href="#!">Help center</a></li>
                      <li><a href="#!">Sales Enquiry</a></li>
                   </ul>
                </li>

             </ul>
          </nav>
          <div class="header-right">
             <div class="header-call">
                <div class="icon">
                   <i class="flaticon-phone"></i>
                </div>
                <div class="number">800-555-6789</div>
             </div>
             <div data-bs-toggle="modal" data-bs-target="#modallogin" class="header-user">
                <div class="icon">
                   <i class="flaticon-user"></i>
                </div>
             </div>
             <div class="header-btn">
                <a href="#!" class="tf-button-default type-1">Post Property</a>
             </div>
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
               <li><a href="index.php">Home</a></li>
          </li>
          <li>
             <span>Buy</span>
             <ul>
                <li>
                   <span>List view</span>
                   <ul>
                      <li>
                         <a href="#!">Property List 01</a>
                      </li>
                      <li>
                         <a href="#!">Property List 02</a>
                      </li>
                      <li>
                         <a href="#!">Property List 03</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <span>Grid view</span>
                   <ul>
                      <li>
                         <a href="#!">Property Grid 01</a>
                      </li>
                      <li>
                         <a href="#!">Property Grid 02</a>
                      </li>
                      <li>
                         <a href="#!">Property Grid 03</a>
                      </li>
                      <li>
                         <a href="#!">Property Grid 04</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <span>Single view</span>
                   <ul>
                      <li>
                         <a href="#!">Property Single 01</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 02</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 03</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 04</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 05</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 06</a>
                      </li>
                      <li>
                         <a href="#!">Property Single 07</a>
                      </li>
                   </ul>
                </li>
                <li>
                   <span>Map Style</span>
                   <ul>
                      <li>
                         <a href="#!">Property Map 01</a>
                      </li>
                      <li>
                         <a href="#!">Property Map 02</a>
                      </li>
                      <li>
                         <a href="#!">Property Map 03</a>
                      </li>
                      <li>
                         <a href="#!">Property Map 04</a>
                      </li>
                   </ul>
                </li>
             </ul>
          </li>
          <li>
             <span>Sell</span>
             <ul>
                <li><a href="#!">Agent List</a></li>
                <li><a href="#!">Agent Single</a></li>
                <li><a href="#!">Agency List</a></li>
                <li><a href="#!">Agency Single</a></li>
             </ul>
          </li>
          <li>
             <span>Rent</span>
             <ul>
                <li><a href="#!">About Us</a></li>
                <li><a href="#!">Compare</a></li>
                <li><a href="#!">Pricing Packages</a></li>
                <li><a href="#!">FAQ Page</a></li>
                <li><a href="#!">404 Page</a></li>
                <li><a href="#!">UI Elements</a></li>
                <li><a href="#!">Dashboard</a></li>
             </ul>
          </li>
          <li>
             <span>Home Intirior</span>
             <ul>
                <li><a href="#!">Shop List</a></li>
                <li><a href="#!">Shop Single</a></li>
                <li><a href="#!">Shop Cart</a></li>
                <li><a href="#!">Shop Checkout</a></li>
                <li><a href="#!">Shop Order</a></li>
             </ul>
          </li>
          <li>
             <span>Construction</span>
             <ul>
                <li><a href="#!">Blog List 01</a></li>
                <li><a href="#!">Blog List 02</a></li>
                <li><a href="#!">Blog List 03</a></li>
                <li><a href="#!">Blog Single</a></li>
             </ul>
          </li>
          <li><a href="#!">Contact</a></li>
       </ul>
    </nav>
 </header>
