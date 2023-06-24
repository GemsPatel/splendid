@include('front.elements.header')
@include('front.elements.home-top-slider')
<?php
$getThemeName = getConfigurationfield("FRONT_THEME");
?>
<!-- section   -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <div class="content-banner-wrap cbw_mar hide">
                        <img src="{{url('public/img/all/banner.jpg')}}" class="respimg " alt="Advertisement">
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
                                                <div class="" data-bg="{{url('storage/app/'.$bestCategories[0]['image'])}}" onerror="this.data-bg='{{url(\'public/img/'.$getThemeName.'.png')}}';this.onerror='';"></div>
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
                                            <li class="hide"><i class="far fa-comments-alt"></i> 6 </li>
                                            <li><i class="fal fa-eye"></i>{{@$bestCategories[0]['blog_best_single_view']['view']}}</li>
                                        </ul>
                                        <div class="author-link">
                                            <a href="{{url('author-single')}}">
                                                <img src="{{url('public/img/avatar/'.@$bestCategories[0]['blog_best_single_view']['author']['id'].'.jpg')}}" onerror="this.src='{{url(\'public/img/'.$getThemeName.'-favicon.icon')}}';this.onerror='';" alt="{{@$bestCategories[0]['blog_best_single_view']['author']['name']}}">
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
                                                            <div class="bg" data-bg="{{url('storage/app/'.$data['image'])}}" onerror="this.data-bg='{{url(\'public/img/'.$getThemeName.'.png')}}';this.onerror='';"></div>
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
                                                        <li class="hide"><i class="far fa-comments-alt"></i> 6 </li>
                                                        <li><i class="fal fa-eye"></i> {{@$data['blog_best_single_view']['view']}} </li>
                                                    </ul>
                                                    <div class="author-link">
                                                        <a href="{{url('author-single')}}">
                                                            <img src="{{url('public/img/avatar/'.@$data['blog_best_single_view']['author']['id'].'.jpg')}}" onerror="this.src='{{url(\'public/img/'.$getThemeName.'-favicon.icon')}}';this.onerror='';" alt="{{@$data['blog_best_single_view']['author']['name']}}">
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
      <div class="gray-bg ad-wrap fl-wrap hide">
            <div class="content-banner-wrap">
                  <img src="{{url('public/img/all/banner.jpg')}}" class="respimg " alt="Advertisement">
            </div>
      </div>
      <!-- section end -->
</div>
<!-- content  end-->
@include('front.elements.footer')
