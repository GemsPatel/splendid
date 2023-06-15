@include('front.elements.header')
<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="{{url('/')}}">Home</a><span>Splend List</span>
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
                    <div class="section-title hide">
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
                        @forelse( $blogArr as $ar )
                            <div class="list-post fl-wrap">
                                <div class="list-post-media">
                                    <a href="{{url('view/'.$ar->slug)}}">
                                        <div class="bg-wrap">
                                            <div class="bg lazyload" data-bg="{{url('storage/app/'.$ar->image)}}"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-post-content">
                                    <a class="post-category-marker" href="{{url('view/'.$ar->slug)}}">{{$ar->category->title}}</a>
                                    <h3><a href="{{url('view/'.$ar->slug)}}">{{$ar->title}}</a></h3>
                                    <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $ar->created_at )}}</span>
                                    <p>{{$ar->short_description}} </p>
                                    <ul class="post-opt">
                                        <li><i class="far fa-comments-alt"></i> 6 </li>
                                        <li><i class="fal fa-eye"></i> {{$ar->view}} </li>
                                    </ul>
                                    <div class="author-link">
										<a href="{{url('author-single')}}">
											<img data-original="{{url('public/img/avatar/1.jpg')}}" class="lazyload">  
											<span>By {{$ar->author->name}}</span>
										</a>
									</div>
                                </div>
                            </div>
                        @empty
                            <div class="list-post fl-wrap">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h1>No {{$request->q}} Result Found!</h1>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                        <!--list-post end-->
                    </div>
                    <div class="clearfix"></div>
                    <!--pagination-->
                    <div class="pagination">
                        {!! $blogArr->links() !!}
                    </div>
                    <!--pagination end-->
                </div>
            </div>
            <div class="col-md-4">
                <!-- sidebar   -->
                @include('front.elements.blog-list-left-side')
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
        <img data-original="{{url('public/img/all/banner.jpg')}}" class="respimg lazyload" alt="">
    </div>
</div>
<!-- section end -->
</div>
<!-- content  end-->
@include('front.elements.footer')
