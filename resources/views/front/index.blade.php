@include('front.elements.header')
@include('front.elements.home-top-slider')
<!-- section   -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <div class="content-banner-wrap cbw_mar">
                        <img src="{{url('public/img/all/banner.jpg')}}" class="respimg" alt="">
                    </div>
                    <div class="clearfix"></div>
                    @include('front.top-stories')
                </div>
            </div>
            <div class="col-md-4">
                <!-- sidebar   -->
                <div class="sidebar-content fl-wrap fix-bar">
                    <!-- popular recent box-widget -->
                    @include('front.elements.popular-recent')
                    <!-- popular recent box-widget  end -->
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                        <div class="box-widget-content">
                            <div id="weather-widget" class="ideaboxWeather" data-city="{{$locationPosition->cityName}}"></div>
                        </div>
                    </div>
                    <!-- box-widget  end -->
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                            <div class="widget-title">Follow Us</div>
                            <div class="box-widget-content">
                            <div class="social-widget">
                                    <a href="#" target="_blank" class="facebook-soc">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="soc-widget-title">Likes</span>
                                    <span class="soc-widget_counter">2640</span>
                                    </a>
                                    <a href="#" target="_blank" class="twitter-soc">
                                    <i class="fab fa-twitter"></i>
                                    <span class="soc-widget-title">Followers</span>
                                    <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" target="_blank" class="youtube-soc">
                                    <i class="fab fa-youtube"></i>
                                    <span class="soc-widget-title">Followers</span>
                                    <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" target="_blank" class="instagram-soc">
                                    <i class="fab fa-instagram"></i>
                                    <span class="soc-widget-title">Followers</span>
                                    <span class="soc-widget_counter">1456</span>
                                    </a>
                            </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Popular Tags</div>
                            <div class="box-widget-content">
                            <div class="tags-widget">
                                    <a href="#">Science</a>
                                    <a href="#">Politics</a>
                                    <a href="#">Technology</a>
                                    <a href="#">Business</a>
                                    <a href="#">Sports</a>
                                    <a href="#">Food</a>
                            </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- editor-choice-box-widget -->
                        @include('front.elements.editor-choice')
                        <!-- editor-choice-box-widget end -->
                </div>
                <!-- sidebar  end -->
                </div>
                </div>
                <div class="limit-box fl-wrap"></div>
            </div>
      </section>
      <!-- section end -->
      <!-- section  -->
      <section>
            <div class="container">
                <div class="section-title sect_dec">
                    <h2>Best In Categories</h2>
                    <h4>Don't miss daily Splend</h4>
                </div>
                <div class="row">
                    @if( COUNT( $bestCategories ) >0 )
                        <div class="col-md-5">
                            <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                <!--list-post-->
                                <div class="list-post fl-wrap">
                                    <a class="post-category-marker" href="{{url('category/'.$bestCategories[0]['slug'])}}">{{ $bestCategories[0]['title'] }}</a>
                                    <div class="list-post-media">
                                        <a href="{{url('view/'.@$bestCategories[0]['blog_best_single_view']['slug'])}}">
                                            <div class="bg-wrap">
                                                <div class="bg" data-bg="{{url('storage/app/'.$bestCategories[0]['image'])}}"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-post-content">
                                        <h3>
                                            <a href="{{url('view/'.@$bestCategories[0]['blog_best_single_view']['slug'])}}">{{@$bestCategories[0]['blog_best_single_view']['title']}}</a>
                                        </h3>
                                        <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', @$bestCategories[0]['blog_best_single_view']['created_at'] )}}</span>
                                        <p>{{@$bestCategories[0]['blog_best_single_view']['short_description']}}</p>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> 6 </li>
                                            <li><i class="fal fa-eye"></i>{{@$bestCategories[0]['blog_best_single_view']['view']}}</li>
                                        </ul>
                                        <div class="author-link">
                                            <a href="{{url('author-single')}}">
                                                <img src="{{url('public/img/avatar/1.jpg')}}" alt="">
                                                <span>By {{@$bestCategories[0]['blog_best_single_view']['author']['name']}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--list-post end-->
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="picker-wrap-container fl-wrap">
                                <div class="picker-wrap-controls">
                                        <ul class="fl-wrap">
                                        <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                        <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                        <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                        </ul>
                                </div>
                                <div class="picker-wrap fl-wrap">
                                    <div class="list-post-wrap  fl-wrap">
                                        <!--list-post-->
                                        @foreach ( $bestCategories as $data )
                                            <div class="list-post fl-wrap">
                                                <div class="list-post-media">
                                                    <a href="{{url('view/'.@$data['blog_best_single_view']['slug'])}}">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{url('storage/app/'.$data['image'])}}"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-post-content">
                                                    <a class="post-category-marker" href="{{url('category/'.$data['slug'])}}">{{$data['title']}}</a>
                                                    <h3>
                                                        <a href="{{url('view/'.@$data['blog_best_single_view']['slug'])}}">
                                                            {{@$data['blog_best_single_view']['title']}}
                                                        </a>
                                                    </h3>
                                                    <span class="post-date">
                                                        <i class="far fa-clock"></i> {{formatDate( 'd M Y', @$data['blog_best_single_view']['created_at'] )}}
                                                    </span>
                                                    <p>{{@$data['blog_best_single_view']['short_description']}}</p>
                                                    <ul class="post-opt">
                                                        <li><i class="far fa-comments-alt"></i> 6 </li>
                                                        <li><i class="fal fa-eye"></i> {{@$data['blog_best_single_view']['view']}} </li>
                                                    </ul>
                                                    <div class="author-link">
                                                        <a href="{{url('author-single')}}">
                                                            <img src="{{url('public/img/avatar/1.jpg')}}" alt="">
                                                            <span>By {{@$data['blog_best_single_view']['author']['name']}}</span>
                                                        </a></div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--list-post end-->
                                    </div>
                                </div>
                                <div class="controls-limit fl-wrap"></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
      <div class="limit-box"></div>
      </section>
      <!-- section end -->
      <!-- section -->
      <section class="no-padding">
            <div class="fs-carousel-wrap">
                  <div class="fs-carousel-wrap_title">
                        <div class="fs-carousel-wrap_title-wrap fl-wrap">
                        <h4>Trending Splendid</h4>
                        <h5>Don't Miss And Stay Up-to-date. Top share for you.</h5>
                        </div>
                        <div class="abs_bg"></div>
                        <div class="gs-controls">
                        <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                        <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                  </div>
                  <div class="fs-carousel fl-wrap">
                        <div class="swiper-container">
                        <div class="swiper-wrapper">
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                    <div class="grid-post-media gpm_sing">
                                          <div class="bg" data-bg="{{url('public/img/all/50.jpg')}}"></div>
                                          <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                          <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="{{url('category')}}">Business</a>
                                                <h4><a href="{{url('post-single')}}">Envatocoin Vulnerable To Retest 20K Support</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 02 March 2022</span>
                                                <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i>  7 </li>
                                                <li><i class="fal fa-eye"></i>  88 </li>
                                                </ul>
                                          </div>
                                    </div>
                                    </div>
                              </div>
                              <!-- swiper-slide end-->
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                    <div class="grid-post-media gpm_sing">
                                          <div class="bg" data-bg="{{url('public/img/all/53.jpg')}}"></div>
                                          <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                                          <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="{{url('category')}}">Technology</a>
                                                <h4><a href="{{url('post-single')}}">Videos show SpaceX's Dragon capsule as it returns to Earth</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 13 april 2021</span>
                                                <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i>  3 </li>
                                                <li><i class="fal fa-eye"></i> 89</li>
                                                </ul>
                                          </div>
                                    </div>
                                    </div>
                              </div>
                              <!-- swiper-slide end-->
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                    <div class="grid-post-media gpm_sing">
                                          <div class="bg" data-bg="{{url('public/img/all/54.jpg')}}"></div>
                                          <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                          <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="{{url('category')}}">Sports</a>
                                                <h4><a href="{{url('post-single')}}">Sports season ends with more surprises</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 23 may 2021</span>
                                                <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i>  34</li>
                                                <li><i class="fal fa-eye"></i>  567 </li>
                                                </ul>
                                          </div>
                                    </div>
                                    </div>
                              </div>
                              <!-- swiper-slide end-->
                              <!-- swiper-slide-->
                              <div class="swiper-slide">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                    <div class="grid-post-media gpm_sing">
                                          <div class="bg" data-bg="{{url('public/img/all/52.jpg')}}"></div>
                                          <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                                          <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="{{url('category')}}">Science</a>
                                                <h4><a href="{{url('post-single')}}">World electric ready to race tomorrow</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 6 april 2021</span>
                                                <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                </ul>
                                          </div>
                                    </div>
                                    </div>
                              </div>
                              <!-- swiper-slide end-->
                        </div>
                        </div>
                  </div>
            </div>
      </section>
      <!-- section end -->
      <!-- section  -->
      <div class="gray-bg ad-wrap fl-wrap">
            <div class="content-banner-wrap">
                  <img src="{{url('public/img/all/banner.jpg')}}" class="respimg" alt="">
            </div>
      </div>
      <!-- section end -->
</div>
<!-- content  end-->
@include('front.elements.footer')
