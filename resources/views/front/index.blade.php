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
                    <!-- Weather Location box-widget -->
      @include('front.elements.weather-detail')
    	<!-- Weather Location box-widget end -->
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
      <section class="no-padding hide">
        {{-- @include('front.elements.trending') --}}
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
