<!-- header -->
<header class="main-header">
      <!-- top bar -->
      <div class="top-bar fl-wrap">
          <div class="container">
              <div class="date-holder">
                  <span class="date_num"></span>
                  <span class="date_mounth"></span>
                  <span class="date_year"></span>
              </div>
              <div class="header_news-ticker-wrap">
                  <div class="hnt_title">Hot Splendid :</div>
                  <div class="header_news-ticker fl-wrap">
                      <ul>
                            @foreach ( getHostStories() as $data )
                                <li>
                                    <a href="{{url('view/'.$data->slug)}}">{{$data->title}}</a>
                                </li>
                            @endforeach
                      </ul>
                  </div>
                  <div class="n_contr-wrap">
                      <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                      <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                  </div>
              </div>
              <ul class="topbar-social">
                  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
              </ul>
          </div>
      </div>
      <!-- top bar end -->
      <div class="header-inner fl-wrap">
          <div class="container">
              <!-- logo holder  -->
              <a href="{{url('/')}}" class="logo-holder"><img src="{{url('public/img/logo.png')}}" alt=""></a>
              <!-- logo holder end -->
              <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
              <div class="srf_btn htact show-reg-form hide"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</span></div>
              <div class="show-cart sc_btn htact hide"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div>
              <!-- header-search-wrap -->
              <div class="header-search-wrap novis_sarch">
                  <div class="widget-inner">
                      <form action="#">
                          <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                          <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                      </form>
                  </div>
              </div>
              <!-- header-search-wrap end -->
              <!-- nav-button-wrap-->
              <div class="nav-button-wrap">
                  <div class="nav-button">
                      <span></span><span></span><span></span>
                  </div>
              </div>
              <!-- nav-button-wrap end-->
              <!--  navigation -->
              <div class="nav-holder main-menu">
                  <nav>
                      <ul>
                            <li>
                                <a href="{{url('/')}}" class="act-link">Home</a>
                            </li>
                            <?php
                            $menuArr = getFrontEndMenu();
                            ?>
                            @foreach ( $menuArr as $k=>$ar )
                                @if( $k < 8 )
                                    <li>
                                        <a href="{{url('category/'.$ar['slug'])}}">{{$ar->title}}
                                            @if( COUNT( $ar->child ) > 0 )
                                                <i class="fas fa-caret-down"></i>
                                            @endif
                                        </a>
                                        @if( COUNT( $ar->child ) > 0 )
                                            <ul>
                                                @foreach ( $ar->child as $cr )
                                                    <li><a href="{{url('category/'.$cr['slug'])}}">{{$cr['title']}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                            @if( COUNT( $menuArr ) >= 8 )
                                <li>
                                    <a href="#">More<i class="fas fa-caret-down"></i></a>
                                    <ul class="child">
                                        @foreach ( $menuArr as $k=>$ar )
                                            @if( $k >= 8 )
                                                <li>
                                                    <a href="{{url('category/'.$ar['slug'])}}">{{$ar['title']}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                            <li>
                                <a href="{{url('/')}}" class="">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('/')}}" class="">Contact Us</a>
                            </li>
                      </ul>
                  </nav>
              </div>
              <!-- navigation  end -->
          </div>
      </div>
  </header>
  <!-- header end  -->
  <!-- wrapper -->
  <div id="wrapper">
    <!-- content    -->
    <div class="content">
