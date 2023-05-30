@include('front.elements.header')
<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="#">Home</a><span>Our Shop</span>
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
        <div class="row">
            <div class="col-md-8">
                <div class="main-container fl-wrap fix-container-init">
                    <div class="section-title">
                        <h3>Sorty by:</h3>
                        <div class="steader_opt steader_opt_abs">
                            <select name="filter" id="list" data-placeholder="Popularity" class="style-select no-search-select">
                                <option>Popularity</option>
                                <option>Average rating</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <!--   row-->
                    <div class="row">
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media"><span>Details</span><img src="{{url('public/img/shop/1.jpg')}}" alt="" class="respimg">
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Awesome Merch Wallet</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                    <div class="reviews_counter_wrap">
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <div class="reviews_counter_wrap_text">12 reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item">Price: <strong>$239</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media">
                                    <span>Details</span><img src="{{url('public/img/shop/2.jpg')}}" alt="" class="respimg">
                                    <div class="detbox_notifer">Sale -20%</div>
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Gmag Merch Wallet</a></h3>
                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc.</p>
                                    <div class="reviews_counter_wrap">
                                        <div class="star-rating" data-starrating="4"> </div>
                                        <div class="reviews_counter_wrap_text">4 reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item">Price: <strong>$112</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                    </div>
                    <!--  row end-->
                    <!--   row-->
                    <div class="row">
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media"><span>Details</span><img src="{{url('public/img/shop/3.jpg')}}" alt="" class="respimg">
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Compact Merch Box</a></h3>
                                    <p>Our tender, juicy filet paired with a steamed tempor lobster tail.</p>
                                    <div class="reviews_counter_wrap">
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <div class="reviews_counter_wrap_text">12 reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item rent-price">Price: <strong>$172</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media">
                                    <span>Details</span><img src="{{url('public/img/shop/4.jpg')}}" alt="" class="respimg">
                                    <div class="detbox_notifer">Sale -10%</div>
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Storage Double Jars</a></h3>
                                    <p>Granny help you treat yourself with a empor scelerisque different meal everyday.</p>
                                    <div class="reviews_counter_wrap">
                                        <div class="star-rating" data-starrating="3"> </div>
                                        <div class="reviews_counter_wrap_text">5 reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item rent-price">Price: <strong>$50</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                    </div>
                    <!--  row end-->
                    <!--   row-->
                    <div class="row">
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media">
                                    <span>Details</span><img src="{{url('public/img/shop/5.jpg')}}" alt="" class="respimg">
                                    <div class="detbox_notifer">Sale -50%</div>
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Merch Tea Cup</a></h3>
                                    <p>Seasoned with an herb crust, served with au empor scelerisque jus and handcarved to order.</p>
                                    <div class="reviews_counter_wrap">
                                        <div class="reviews_counter_wrap_text">No reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item">Price: <strong>$239</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                        <!--   shop-item-->
                        <div class="col-md-6">
                            <div class="det-box">
                                <a href="{{url('product-single')}}" class="det-box-media"><span>Details</span><img src="{{url('public/img/shop/6.jpg')}}" alt="" class="respimg">
                                </a>
                                <div class="det-box-ietm dbig dbi_shop fl-wrap">
                                    <h3><a href="{{url('product-single')}}">Impact Merch Banner</a></h3>
                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc.</p>
                                    <div class="reviews_counter_wrap">
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <div class="reviews_counter_wrap_text">2 reviews</div>
                                    </div>
                                    <div class="grid-item_price fl-wrap">
                                        <span class="grid-item_price_item">Price: <strong>$112</strong></span>
                                        <div class="add_cart"><i class="fal fa-plus"></i> <span>Add To Cart</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   shop-item end-->
                    </div>
                    <!--  row end-->
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
            <!-- sidebar   -->
            <div class="col-md-4">
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
                    <!-- box-widget   -->
                    <div class="box-widget fl-wrap">
                        <div class="widget-title">Price Filter</div>
                        <div class="box-widget-content">
                            <div class="price-rage-wrap shop-rage-wrap chose-input fl-wrap">
                                <a href="#" class="srw_btn color-bg">Update</a>
                                <div class="price-rage-item fl-wrap">
                                    <input type="text" class="shop-price" data-min="0" data-max="1000" name="shop-price" data-step="10" value="$$">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- box-widget  end -->
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                        <div class="widget-title">Popular Products</div>
                        <div class="box-widget-content">
                            <div class="post-widget-container fl-wrap">
                                <!-- post-widget-item -->
                                <div class="post-widget-item fl-wrap">
                                    <div class="post-widget-item-media">
                                        <a href="{{url('product-single')}}"><img src="{{url('public/img/shop/3.jpg')}}"  alt=""></a>
                                    </div>
                                    <div class="post-widget-item-content">
                                        <h4><a href="{{url('product-single')}}">Compact Merch Box</a></h4>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $172</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post-widget-item end -->
                                <!-- post-widget-item -->
                                <div class="post-widget-item fl-wrap">
                                    <div class="post-widget-item-media">
                                        <a href="{{url('product-single')}}"><img src="{{url('public/img/shop/5.jpg')}}"  alt=""></a>
                                    </div>
                                    <div class="post-widget-item-content">
                                        <h4><a href="{{url('product-single')}}">Merch Tea Cup</a></h4>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $239</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post-widget-item end -->
                                <!-- post-widget-item -->
                                <div class="post-widget-item fl-wrap">
                                    <div class="post-widget-item-media">
                                        <a href="{{url('product-single')}}"><img src="{{url('public/img/shop/4.jpg')}}"  alt=""></a>
                                    </div>
                                    <div class="post-widget-item-content">
                                        <h4><a href="{{url('product-single')}}">Storage Double Jars</a></h4>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $112</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- post-widget-item end -->
                            </div>
                        </div>
                    </div>
                    <!-- box-widget  end -->
                    <!-- box-widget -->
                    <div class="box-widget fl-wrap">
                        <div class="widget-title">Categories</div>
                        <div class="box-widget-content">
                            <ul class="cat-wid-list">
                                <li><a href="#">Science</a><span>3</span></li>
                                <li><a href="#">Politics</a> <span>6</span></li>
                                <li><a href="#">Technology</a> <span>12</span></li>
                                <li><a href="#">Sports</a> <span>4</span></li>
                                <li><a href="#">Business</a> <span>22</span></li>
                            </ul>
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
