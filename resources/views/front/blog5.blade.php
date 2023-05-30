@include('front.elements.header')
<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="#">Home</a><span>Blog Grid style</span>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down To Discover</span>
        </div>
    </div>
    <div class="pwh_bg"></div>
</div>
<!--section   -->
<section>
    <div class="container">
        <div class="main-container fl-wrap">
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
            <!--grid-post-wrap-->
            <div class="grid-post-wrap gallery-items">
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi  fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/15.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Sports</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">Goodwin must Break Clarkson hold on Flags</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i>  18 may 2022</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  .Lorem ipsum dolor sit amet, consectetur adipiscing elit  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i> 6</li>
                                <li><i class="fal fa-eye"></i>  587 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/2.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Technology</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">New VR Glasses and Headset System Release</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i> 15 may 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  5 </li>
                                <li><i class="fal fa-eye"></i>  456 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi  fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/16.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Science</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">How to start Home renovation.</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  55 </li>
                                <li><i class="fal fa-eye"></i>  987 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/17.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Politics</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">Man boasted of crowd size at Jan. New book says</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i>  11 March 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/4.jpg')}}" alt="">  <span>By Jessie Bond</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  58 </li>
                                <li><i class="fal fa-eye"></i>  235 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi  fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/3.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Business</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">Government legislates to decrimilaise work</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i>  06 March 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                <li><i class="fal fa-eye"></i>  164 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/19.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Science</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">Tesla   it tested hypersonic Model-C</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i> 25 may 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  32 </li>
                                <li><i class="fal fa-eye"></i>  44 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi  fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/20.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Business</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">$310m to help businesses in latest lockdown</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i>  16 january 2022</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  67 </li>
                                <li><i class="fal fa-eye"></i>  1234 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/14.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Sport</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">Tennis season still to proceed.</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i> 15 December 2021</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/4.jpg')}}" alt="">  <span>By Jessie Bond</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  08 </li>
                                <li><i class="fal fa-eye"></i>  541 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
                <!--grid-post-item-->
                <div class="gallery-item">
                    <div class="grid-post-item  bold_gpi fl-wrap">
                        <div class="grid-post-media">
                            <a href="{{url('post-single')}}" class="gpm_link">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{url('public/img/all/13.jpg')}}"></div>
                                </div>
                            </a>
                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                        </div>
                        <a class="post-category-marker purp-bg" href="{{url('category')}}">Business</a>
                        <div class="grid-post-content">
                            <h3><a href="{{url('post-single')}}">    Light and shade during a contemplative year.</a></h3>
                            <span class="post-date"><i class="far fa-clock"></i> 06 December 2021</span>
                            <p>Struggling to sell one multi-million dollar home quite on currently the market easily dollar home quite.  </p>
                        </div>
                        <div class="grid-post-footer">
                            <div class="author-link"><a href="{{url('author-single')}}"><img src="{{url('public/img/avatar/5.jpg')}}" alt="">  <span>By Jake Domik</span></a></div>
                            <ul class="post-opt">
                                <li><i class="far fa-comments-alt"></i>  38 </li>
                                <li><i class="fal fa-eye"></i>  1341 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--grid-post-item end-->
            </div>
            <!--grid-post-wrap end-->
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
