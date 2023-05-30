<!-- hero-slider-wrap     -->
<div class="hero-slider-wrap fl-wrap">
    <!-- hero-slider-container     -->
    <div class="hero-slider-container multi-slider fl-wrap full-height">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- swiper-slide -->
                @foreach ( $topSliderArr as $k=>$slider )
                    <div class="swiper-slide">
                        <div class="bg-wrap">
                            <div class="bg" data-bg="{{url('storage/app/'.$slider->image)}}" data-swiper-parallax="40%"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="hero-item fl-wrap">
                            <div class="container">
                                <a class="post-category-marker" href="{{url('category/'.$slider->category->slug)}}">{{$slider->category->title}}</a>
                                <div class="clearfix"></div>
                                <h2><a href="{{url('view/'.$slider->slug)}}">{{$slider->title}}</a></h2>
                                <h4>{{$slider->short_description}}</h4>
                                <div class="clearfix"></div>
                                <div class="author-link">
                                    <a href="{{url('author-single')}}">
                                        <img src="{{url('public/img/avatar/4.jpg')}}" alt="">
                                        <span>By {{$slider->author->name}}</span>
                                    </a>
                                </div>
                                <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $slider->created_at )}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- swiper-slide  end   -->
              </div>
          </div>
          <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i></div>
          <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i></div>
    </div>
    <!-- hero-slider-container  end   -->
    <!-- hero-slider_controls-wrap   -->
    <div class="hero-slider_controls-wrap">
        <div class="container">
            <div class="hero-slider_controls-list multi-slider_control">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- swiper-slide  -->
                        @foreach ( $topSliderArr as $k=>$slider )
                            <div class="swiper-slide">
                                <div class="hsc-list_item fl-wrap">
                                    <div class="hsc-list_item-media">
                                        <div class="bg-wrap">
                                            <div class="bg" data-bg="{{url('storage/app/'.$slider->image)}}"></div>
                                        </div>
                                    </div>
                                    <div class="hsc-list_item-content fl-wrap">
                                        <h4>{{$slider->title}}</h4>
                                        <span class="post-date"><i class="far fa-clock"></i>{{formatDate( 'd M Y', $slider->created_at )}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- swiper-slide end   -->
                    </div>
                </div>
            </div>
            <div class="multi-pag"></div>
        </div>
    </div>
    <!-- hero-slider_controls-wrap end  -->
    <div class="slider-progress-bar act-slider">
        <span>
            <svg class="circ" width="30" height="30">
                <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none" />
                <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2" fill="none" />
            </svg>
        </span>
    </div>
</div>
<!-- hero-slider-wrap  end   -->
