<link href="{{('css/package.css')}}" rel="stylesheet">

<section id="doctor" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Browse By Category</h2>
                        <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <div id="filters-container" class="cbp-l-filters-alignLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">BestSellers (<div class="cbp-filter-counter"></div>)</div>


                    @forelse($categories as $category)

                    <div data-filter=".{{$category->id}}" class="cbp-filter-item">{{$category->category_name}} (<div class="cbp-filter-counter"></div>)</div>

                    @empty
                    <td></td>
                    @endforelse

                    <!-- <div data-filter=".cardiologist" class="cbp-filter-item">Woman Helath (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".psychiatrist" class="cbp-filter-item">Diabetis (<div class="cbp-filter-counter"></div>)</div>
                   
                    <div data-filter=".womanhealth" class="cbp-filter-item">Covid 19 (<div class="cbp-filter-counter"></div>)</div>
                   
                    <div data-filter=".Fever" class="cbp-filter-item">Fever (<div class="cbp-filter-counter"></div>)</div>

                    <div data-filter=".neurologist" class="cbp-filter-item">Senior Citizen (<div class="cbp-filter-counter"></div>)</div>
                    <div data-filter=".neurologist" class="cbp-filter-item">Pregnancy (<div class="cbp-filter-counter"></div>)</div> -->

                    <div style="float: right;"><button> View All </button></div>

                </div>



                <div id="grid-container" class="cbp-l-grid-team">
                    <ul>

                        @forelse($packages as $package)

                        <li class='cbp-item {{$package->category}}' style="height: 460px !important; width: 300px !important">

                            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box" style="height: 406px !important; width:290px !important">

                                    <div class="tag topright"></div>

                                    <div class="price-box">
                                        <div class="title">
                                            <a href="{{url('/package')}}"> {{$package-> package_name}}</a>
                                        </div>

                                        @php   
                                    
                                    $lab= \App\Lab::where(['id' => $package->lab_name])->first();
                                      @endphp

                                        <span>Lab Name - {{$lab?$lab->lab_name:'Call Labs'}}</span><br />

                                        <span>Include Tests - {{$package-> no_of_tests}}</span>
                                        <h4 class="price">₹{{$package-> price?$package-> price:$package-> no_of_tests}}</h4>
                                    </div>
                                    <ul class="features cbp-singlePage cbp-l-grid-team-name">
                                    @php   
                                    
                                    $value = \App\ParentTest::where(['id' => $package->parent_test_id])->first();
                                      @endphp

                                     @php   
                                    
                                    $subtests = \App\SubTest::where(['parent_test_id' => $value->id])->first();

                                    $descriptionList = new \Illuminate\Support\Collection(explode(",", $subtests->sub_test_name));


                                
                                       @endphp

                                    <li class="true">{{$value-> parent_test_name}}</li>
                                   
                                       
    @foreach ($descriptionList as $descriptionItem)
       <li>{{ $descriptionItem }}</li>
    @endforeach    

                                        
                                    </ul>
                                    <div class="btn-box">
                                        <!-- <a href="https://codepen.io/anupkumar92" class="theme-btn">BUY NOW</a> -->

                                        <a href="{{ route('add_to_cart', $package->id) }}" class="theme-btn" role="button">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @empty
                        <td></td>
                        @endforelse




                        <!-- Pricing Block -->

                    </ul>
                </div>


            </div>
        </div>
    </div>

</section>