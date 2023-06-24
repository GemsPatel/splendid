<?php
$getThemeName = getConfigurationfield("FRONT_THEME");
?>
<div class="sidebar-content fl-wrap fixed-bar">
      <!-- box-widget -->
      <div class="box-widget fl-wrap">
          <div class="box-widget-content">
              <div class="search-widget fl-wrap">
                  <form action="{{$action}}">
                        <input name="q" id="search" type="text" class="search" placeholder="Search..." value="{{$request->q ?? ''}}" />
                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                  </form>
              </div>
          </div>
      </div>
      <!-- box-widget  end -->
      <!-- box-widget -->
      <div class="box-widget fl-wrap">
          <div class="box-widget-content">
              <div class="banner-widget fl-wrap">
                  <div class="bg-wrap bg-parallax-wrap-gradien">
                      <div class="bg" data-bg="{{url('public/img/bg/7.jpg')}}" onerror="this.data-bg='{{url("public/img/".$getThemeName.".png")}}';this.onerror='';"></div>
                  </div>
                  <div class="banner-widget_content">
                      <h5>Visit our awesome merch and souvenir.</h5>
                      {{-- <a href="#" class="btn float-btn color-bg small-btn">Our shop</a> --}}
                  </div>
              </div>
          </div>
      </div>
      <!-- box-widget  end -->

      <!-- box-widget  end -->
      <!-- popular recent box-widget -->
      @include('front.elements.popular-recent')
      <!-- popular recent box-widget end -->
      <!-- Weather Location box-widget -->
      @include('front.elements.weather-detail')
    	<!-- Weather Location box-widget end -->
  </div>
