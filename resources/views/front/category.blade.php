@include('front.elements.header')
<!--section   -->
<section class="hero-section">
    <div class="bg-wrap hero-section_bg">
        <div class="bg" data-bg="{{url('public/img/bg/10.jpg')}}"></div>
    </div>
    <div class="container">
        <div class="hero-section_title">
            <h2>Category:  Technology</h2>
        </div>
        <div class="clearfix"></div>
        <div class="breadcrumbs-list fl-wrap">
            <a href="#">Home</a> <span>Category</span>
        </div>
        <div class="scroll-down-wrap scw_transparent">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down To Discover</span>
        </div>
    </div>
</section>
<!-- section end  -->
<!--section   -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <div class="section-title">
                        <h2>Most Recent World News</h2>
                        <h4>Don't miss daily news</h4>
                        <div class="steader_opt steader_opt_abs">
                            <select name="filter" id="list" data-placeholder="Persons" class="style-select no-search-select">
                                <option>Latest</option>
                                <option>Most Read</option>
                                <option>Most Viewed</option>
                                <option>Most Commented</option>
                            </select>
                        </div>
                    </div>
                    <div class="list-post-wrap">
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/15.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="#">Sports</a>
                                <h3><a href="{{url('post-single')}}">Goodwin must Break Clarkson hold on Flags</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 18 may 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i> 6 </li>
                                    <li><i class="fal fa-eye"></i>  587 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/2.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Technology</a>
                                <h3><a href="{{url('post-single')}}">New VR Glasses and Headset System Release</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 15 may 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i>  5 </li>
                                    <li><i class="fal fa-eye"></i>  456 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/16.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Science</a>
                                <h3><a href="{{url('post-single')}}">How to start Home renovation.</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 05 April 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i>  55</li>
                                    <li><i class="fal fa-eye"></i>  987 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/17.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Politics</a>
                                <h3><a href="{{url('post-single')}}">Man boasted of crowd size at Jan.  New book says</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i>  58 </li>
                                    <li><i class="fal fa-eye"></i> 235 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/4.jpg')}}" alt="">  <span>By Jessie Bond</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/bg/4.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Business</a>
                                <h3><a href="{{url('post-single')}}">Government legislates to decrimilaise   work</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 06 March 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i>  25 </li>
                                    <li><i class="fal fa-eye"></i>  164 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/18.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Technology</a>
                                <h3><a href="{{url('post-single')}}">This Is What a Smart Watch Can Actually Solve</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 03 March 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i> 4 </li>
                                    <li><i class="fal fa-eye"></i>  980 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/19.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Science</a>
                                <h3><a href="{{url('post-single')}}">Tesla   it tested hypersonic Model-C</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 22 january 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i> 32 </li>
                                    <li><i class="fal fa-eye"></i>  444 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/3.jpg')}}" alt="">  <span>Ann Kowalsky</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <div class="list-post-media">
                                <a href="{{url('post-single')}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/20.jpg')}}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{url('category')}}">Business</a>
                                <h3><a href="{{url('post-single')}}"> $310m  to help businesses in latest lockdown</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> 16 january 2022</span>
                                <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i>  67 </li>
                                    <li><i class="fal fa-eye"></i>  1234 </li>
                                </ul>
                                <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                            </div>
                        </div>
                        <!--list-post end-->
                    </div>
                    <div class="clearfix"></div>
                    <div class="load-more_btn"><i class="fal fa-undo"></i>Load More</div>
                    <!--pagination-->
                    <div class="pagination">
                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
                        <a href="#">01.</a>
                        <a href="#" class="current-page">02.</a>
                        <a href="#">03.</a>
                        <a href="#">04.</a>
                        <a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
                    </div>
                    <!--pagination end-->
                </div>
            </div>
            <div class="col-md-4">
                <!-- sidebar   -->
                <div class="sidebar-content fl-wrap fixed-bar">
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
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
                                <a href="category-single.html" class="sb-categories_bg_item">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/7.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="spb-categories_title"><span>01</span>Politics</div>
                                    <div class="spb-categories_counter">66</div>
                                </a>
                                <!-- sb-categories_bg_item  end-->
                                <!-- sb-categories_bg_item -->
                                <a href="category-single.html" class="sb-categories_bg_item">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/2.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="spb-categories_title"><span>02</span>Technology</div>
                                    <div class="spb-categories_counter">22</div>
                                </a>
                                <!-- sb-categories_bg_item  end-->
                                <!-- sb-categories_bg_item -->
                                <a href="category-single.html" class="sb-categories_bg_item">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/3.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="spb-categories_title"><span>03</span>Business</div>
                                    <div class="spb-categories_counter">54</div>
                                </a>
                                <!-- sb-categories_bg_item  end-->
                                <!-- sb-categories_bg_item -->
                                <a href="category-single.html" class="sb-categories_bg_item">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/5.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="spb-categories_title"><span>04</span>Sports</div>
                                    <div class="spb-categories_counter">15</div>
                                </a>
                                <!-- sb-categories_bg_item  end-->
                                <!-- sb-categories_bg_item -->
                                <a href="category-single.html" class="sb-categories_bg_item">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{url('public/img/all/4.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="spb-categories_title"><span>05</span>Science</div>
                                    <div class="spb-categories_counter">29</div>
                                </a>
                                <!-- sb-categories_bg_item  end-->
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
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                        <div class="box-widget-content">
                            <!-- content-tabs-wrap -->
                            <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                <div class="content-tabs fl-wrap">
                                    <ul class="tabs-menu fl-wrap no-list-style">
                                        <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                        <li><a href="#tab-resent">Resent News</a></li>
                                    </ul>
                                </div>
                                <!--tabs -->
                                <div class="tabs-container">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-popular" class="tab-content first-tab">
                                            <div class="post-widget-container fl-wrap">
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/1')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">How to start Home education.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 25 may 2022</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/2')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">The secret to moving this   screening.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 13 april 2021</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 6</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 1227</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/3')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">Fall ability to keep Congress on rails.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 02 December 2021</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab  end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-resent" class="tab-content">
                                            <div class="post-widget-container fl-wrap">
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/5')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">Magpie nesting zone sites.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 05 april 2021</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/6')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">Locals help create whole new community.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 22 march 2021</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 31</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                                <!-- post-widget-item -->
                                                <div class="post-widget-item fl-wrap">
                                                    <div class="post-widget-item-media">
                                                        <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/7')}}.jpg"  alt=""></a>
                                                    </div>
                                                    <div class="post-widget-item-content">
                                                        <h4><a href="{{url('post-single')}}">Tennis season still to proceed.</a></h4>
                                                        <ul class="pwic_opt">
                                                            <li><span><i class="far fa-clock"></i> 06 December 2021</span></li>
                                                            <li><span><i class="far fa-comments-alt"></i> 05</span></li>
                                                            <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- post-widget-item end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- content-tabs-wrap end -->
                        </div>
                    </div>
                    <!-- box-widget  end -->
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
