<div class="box-widget fl-wrap">
    <div class="box-widget-content">
        <!-- content-tabs-wrap -->
        <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
            <div class="content-tabs fl-wrap">
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="hide"><a href="#tab-popular"> Popular News </a></li>
                    <li class="current w-100"><a href="#tab-resent">Resent Splend</a></li>
                </ul>
            </div>
            <!--tabs -->
            <div class="tabs-container">
                <!--tab -->
                <div class="tab">
                    <div id="tab-popular" class="tab-content">
                        <div class="post-widget-container fl-wrap">
                            <!-- post-widget-item -->
                            <div class="post-widget-item fl-wrap">
                                <div class="post-widget-item-media">
                                    <a href="{{url('post-single')}}"><img src="{{url('public/img/all/thumbs/1.jpg')}}"  alt=""></a>
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
                        </div>
                    </div>
                </div>
                <!--tab  end-->
                <!--tab -->
                <div class="tab">
                    <div id="tab-resent" class="tab-content  first-tab">
                        <div class="post-widget-container fl-wrap">
                            <!-- post-widget-item -->
                            @foreach ( $recentArr as $data )
                                <div class="post-widget-item fl-wrap">
                                    <div class="post-widget-item-media">
                                        <a href="{{url('view/'.$data->slug)}}">
                                            <img src="{{url('storage/app/'.$data->image)}}" alt="{{$data->title}}">
                                        </a>
                                    </div>
                                    <div class="post-widget-item-content">
                                        <h4>
                                            <a href="{{url('view/'.$data->slug)}}">{{$data->title}}</a>
                                        </h4>
                                        <ul class="pwic_opt">
                                            <li><span><i class="far fa-clock"></i>{{formatDate( 'd M Y', $data->created_at )}}</span></li>
                                            <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                            <li><span><i class="fal fa-eye"></i>{{$data->view}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
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
