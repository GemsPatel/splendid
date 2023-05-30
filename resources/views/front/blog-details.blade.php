@include('front.elements.header')
<!--section   -->
<section class="hero-section">
    <div class="bg-wrap hero-section_bg">
        <div class="bg" data-bg="{{url('storage/app/'.$data->image)}}"></div>
    </div>
    <div class="container">
        <div class="hero-section_title hs_single-post">
            <a class="post-category-marker color-bg" href="{{url('category/'.$data->category->slug)}}">{{$data->category->title}}</a>
            <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $data->created_at )}}</span>
            <div class="clearfix"></div>
            <h2>{{$data->title}}</h2>
            <h5>{{$data->short_description}}</h5>
            <div class="author-link">
                <a href="{{url('author-single')}}">
                    <img src="{{url('public/img/avatar/2.jpg')}}" alt="">
                    <span>By {{$data->author->name}}</span>
                </a>
            </div>
            <ul class="post-opt">
                <li><i class="far fa-comments-alt"></i> 4 </li>
                <li><i class="fal fa-eye"></i>{{$data->view}}</li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="scroll-down-wrap scw_transparent">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down To Discover</span>
        </div>
    </div>
</section>
<!-- section end  -->
<div class="breadcrumbs-section fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="{{url('/')}}">Home</a><span>{{$data->title}}</span>
        </div>
        <div class="share-holder hor-share">
            <div class="share-title">Share:</div>
            <div class="share-container  isShare"></div>
        </div>
    </div>
    <div class="pwh_bg"></div>
</div>
<!--section   -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <!-- single-post-media   -->
                    <div class="single-post-media fl-wrap hide">
                        <a class="video-holder fl-wrap  image-popup" href="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                            <div class="bg" data-bg="{{url('public/img/all/20.jpg')}}"></div>
                            <div class="overlay"></div>
                            <div class="big_prom"> <i class="fas fa-play"></i></div>
                        </a>
                    </div>
                    <!-- single-post-media end   -->
                    <!-- single-post-content   -->
                    <div class="single-post-content  fl-wrap">
                        <div class="fs-wrap smpar fl-wrap">
                            <div class="fontSize">
                                <span class="fs_title">Font size: </span>
                                <input type="text" class="rage-slider" data-step="1" data-min="15" data-max="20" value="15">
                            </div>
                            <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                            <div class="show-more-snopt-tooltip">
                                <a href="#comments" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a Comment</a>
                                <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                            </div>
                            <a class="print-btn" href="javascript:window.print()" data-microtip-position="bottom"><span>Print</span><i class="fal fa-print"></i></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="single-post-content_text" id="font_chage">
                            {{-- @include('blog-html.'.$data->slug) --}}
                            {!! $data->description !!}
                        </div>
                        <div class="single-post-footer fl-wrap hide">
                            <div class="post-single-tags">
                                <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                <div class="tags-widget">
                                    <a href="#">Science</a>
                                    <a href="#">Technology</a>
                                    <a href="#">Business</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                            </div>
                        </div>
                        <!-- single-post-nav"   -->
                        <div class="single-post-nav fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    @if( isset( $prevBlog[0] ) )
                                        <a href="{{url('view/'.$prevBlog[0]['slug'])}}" class="single-post-nav_prev spn_box w-100">
                                            <div class="spn_box_img">
                                                <img src="{{url('storage/app/'.$prevBlog[0]['image'])}}" class="respimg" alt="">
                                            </div>
                                            <div class="spn-box-content">
                                                <span class="spn-box-content_subtitle"><i class="fas fa-caret-left"></i> Prev Post</span>
                                                <span class="spn-box-content_title">{{$prevBlog[0]['title']}}</span>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if( isset( $nextBlog[0] ) )
                                        <a href="{{url('view/'.$nextBlog[0]['slug'])}}" class="single-post-nav_next spn_box w-100">
                                            <div class="spn_box_img">
                                                <img src="{{url('storage/app/'.$nextBlog[0]['image'])}}" class="respimg" alt="">
                                            </div>
                                            <div class="spn-box-content">
                                                <span class="spn-box-content_subtitle">Next Post <i class="fas fa-caret-right"></i></span>
                                                <span class="spn-box-content_title">{{$nextBlog[0]['title']}}</span>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- single-post-nav"  end   -->
                    </div>
                    <!-- single-post-content  end   -->
                    <div class="limit-box2 fl-wrap"></div>
                    <!-- post-author-->
                    <div class="post-author fl-wrap hide">
                        <div class="author-img">
                            <img  src="{{url('public/img/avatar/2.jpg')}}" alt="">
                        </div>
                        <div class="author-content fl-wrap">
                            <h5>Written By <a href="{{url('author-single')}}">Mark Rose</a></h5>
                            <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket..</p>
                        </div>
                        <div class="profile-card-footer fl-wrap">
                            <a href="{{url('author-single')}}" class="post-author_link">View Profile <i class="fas fa-caret-right"></i></a>
                            <div class="profile-card-footer_soc">
                                <div class="profile-card-footer_title">Follow: </div>
                                <div class="profile-card-social">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--post-author end-->
                    <div class="more-post-wrap  fl-wrap">
                        <div class="pr-subtitle prs_big">Related Posts</div>
                        <div class="list-post-wrap list-post-wrap_column fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--list-post-->
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker" href="{{url('category')}}">Science</a>
                                        <div class="list-post-media">
                                            <a href="{{url('post-single')}}">
                                                <div class="bg-wrap">
                                                    <div class="bg" data-bg="{{url('public/img/all/16.jpg')}}"></div>
                                                </div>
                                            </a>
                                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                                        </div>
                                        <div class="list-post-content">
                                            <h3><a href="{{url('post-single')}}">How to start Home renovation.</a></h3>
                                            <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                        </div>
                                    </div>
                                    <!--list-post end-->
                                </div>
                                <div class="col-md-6">
                                    <!--list-post-->
                                    <div class="list-post fl-wrap">
                                        <a class="post-category-marker" href="{{url('category')}}">Sports</a>
                                        <div class="list-post-media">
                                            <a href="{{url('post-single')}}">
                                                <div class="bg-wrap">
                                                    <div class="bg" data-bg="{{url('public/img/all/24.jpg')}}"></div>
                                                </div>
                                            </a>
                                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                                        </div>
                                        <div class="list-post-content">
                                            <h3><a href="{{url('post-single')}}">Warriors face season defining clash</a></h3>
                                            <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                        </div>
                                    </div>
                                    <!--list-post end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--comments  -->
                    {{-- @include('front.elements.blog-detail-comment') --}}
                    <!--comments end -->
                </div>
            </div>
            <div class="col-md-4">
                <!-- sidebar   -->
                <div class="sidebar-content fl-wrap fixed-bar">
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap hide">
                        <div class="box-widget-content">
                            <div class="search-widget fl-wrap">
                                <form action="#">
                                    <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                    <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- box-widget  end -->
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                        <div class="widget-title">Cetegories</div>
                        <div class="box-widget-content">
                            <div class="sb-categories_bg">
                                <!-- sb-categories_bg_item -->
                                @foreach ( $categories as $k=>$data )
                                    <a href="{{url('category/'.$data->slug)}}" class="sb-categories_bg_item">
                                        <div class="bg-wrap">
                                            <div class="bg" data-bg="{{url('storage/app/'.$data->image)}}"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="spb-categories_title"><span>{{$k+1}}.</span>{{$data->title}}</div>
                                        {{-- <div class="spb-categories_counter">66</div> --}}
                                    </a>
                                @endforeach
                                <!-- sb-categories_bg_item end-->
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
                    <!-- Editor box-widget -->
                    @include('front.elements.editor-choice')
                    <!-- Editor box-widget  end -->

                    <!-- popular recent box-widget -->
                    @include('front.elements.popular-recent')
                    <!-- popular recent box-widget  end -->
                </div>
                <!-- sidebar  end -->
            </div>
        </div>
        <div class="limit-box fl-wrap"></div>
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
