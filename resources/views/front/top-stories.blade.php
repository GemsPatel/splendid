<?php
$getThemeName = getConfigurationfield("FRONT_THEME");
?>
<div class="section-title sect_dec">
    <h2>Top Stories</h2>
    <h4>Don't miss daily top Story</h4>
</div>
<div class="grid-post-wrap">
    <div class="more-post-wrap fl-wrap">
        <div class="list-post-wrap list-post-wrap_column fl-wrap">
            <div class="row">
                @foreach( $topStories[0] as $data )
                    <div class="col-md-6">
                        <!--list-post-->
                        <div class="list-post fl-wrap">
                            <a class="post-category-marker" href="{{url('category/'.$data['category']['slug'])}}">{{$data['category']['title']}}</a>
                            <div class="list-post-media">
                                <a href="{{url('view/'.$data['slug'])}}">
                                    <div class="bg-wrap">
                                        <div class="bg " data-bg="{{url('storage/app/'.$data['image'])}}" onerror="this.data-bg='{{url('\'public/img/'.$getThemeName.'.png')}}';this.onerror='';"></div>
                                    </div>
                                </a>
                                {{-- <span class="post-media_title">&copy; Image Copyrights Title</span> --}}
                            </div>
                            <div class="list-post-content">
                                <h3><a href="{{url('view/'.$data['slug'])}}">{{$data['title']}}</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $data['created_at'] )}}</span>
                            </div>
                        </div>
                        <!--list-post end-->
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--grid-post-item-->
    <div class="single-grid-slider-wrap fl-wrap">
        <div class="single-grid-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide-->
                    @foreach( $topStories[1] as $data )
                        <div class="swiper-slide">
                            <div class="grid-post-item  bold_gpi  fl-wrap">
                                <div class="grid-post-media gpm_sing">
                                    <div class="bg " data-bg="{{url('storage/app/'.$data['image'])}}"></div>
                                    <div class="author-link">
                                        <a href="{{url('author-single')}}">
                                            <img src="{{url('public/img/avatar/'.$data['author']['id'].'.jpg')}}" onerror="this.src='{{url('\'public/img/'.$getThemeName.'-favicon.icon')}}';this.onerror='';" alt="{{$data['author']['name']}}">
                                            <span>By {{$data['author']['name']}}</span>
                                        </a>
                                    </div>
                                    <div class="grid-post-media_title">
                                        <a class="post-category-marker" href="{{url('category/'.$data['category']['slug'])}}">{{$data['category']['title']}}</a>
                                        <h4>
                                            <a href="{{url('view/'.$data['slug'])}}">{{$data['title']}}</a>
                                        </h4>
                                        <span class="video-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $data['created_at'] )}}</span>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i>  25 </li>
                                            <li><i class="fal fa-eye"></i> {{$data['view']}} </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- swiper-slide end-->
                </div>
                <div class="sgs-pagination sgs_ver "></div>
            </div>
        </div>
    </div>
    <!--grid-post-item end-->
    <div class="more-post-wrap  fl-wrap">
        <div class="list-post-wrap list-post-wrap_column fl-wrap">
            <div class="row">
                @if( isset( $topStories[2] ) )
                    @foreach( $topStories[2] as $data )
                        <div class="col-md-6">
                            <!--list-post-->
                            <div class="list-post fl-wrap">
                                <a class="post-category-marker" href="{{url('category/'.$data['category']['title'])}}">{{$data['category']['title']}}</a>
                                <div class="list-post-media">
                                    <a href="{{url('view/'.$data['slug'])}}">
                                        <div class="bg-wrap">
                                            <div class="bg " data-bg="{{url('storage/app/'.$data['image'])}}"></div>
                                        </div>
                                    </a>
                                    {{-- <span class="post-media_title">&copy; Image Copyrights Title</span> --}}
                                </div>
                                <div class="list-post-content">
                                    <h3>
                                        <a href="{{url('view/'.$data['slug'])}}">{{substr( $data['title'], 0, 40 )."..."}}</a>
                                    </h3>
                                    <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $data['created_at'] )}}</span>
                                </div>
                            </div>
                            <!--list-post end-->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<a href="{{url('read-all')}}" class="dark-btn fl-wrap"> Read all </a>
