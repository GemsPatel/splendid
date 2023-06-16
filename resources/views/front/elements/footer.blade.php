<!-- footer -->
<footer class="fl-wrap main-footer">
      <div class="container hide">
          <!-- footer-widget-wrap -->
          <div class="footer-widget-wrap fl-wrap">
              <div class="row">
                  <!-- footer-widget -->
                  <div class="col-md-5">
                      <div class="footer-widget">
                          <div class="footer-widget-content">
                              <a href="{{url('/')}}" class="footer-logo">
								<img data-original="{{url('public/img/logo2.png')}}" alt="">
							</a>
                              <p class="mt-1">
                                Reading is an adjective that defines something or someone in a large and striking fashion as wonderful, excellent, or remarkable. Reading can also refer to someone who possesses remarkable traits such as grace, talent, or intelligence. Overall, the term superb implies awe and respect for something that shines out in an extraordinary and glorious way.
                              </p>
                          </div>
                      </div>
                  </div>
                  <!-- footer-widget  end-->
                  <!-- footer-widget -->
                  <div class="col-md-3">
                      <div class="footer-widget">
                          <div class="footer-widget-title" style="text-align: center">Links</div>
                          <div class="footer-widget-content">
                              <div class="footer-list footer-box fl-wrap">
                                  <ul>
                                      <li> <a href="#">Home</a></li>
                                      <li> <a href="#">About</a></li>
                                      <li> <a href="#">Contacts</a></li>
                                  </ul>
                              </div>
                              <div class="footer-social fl-wrap">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                          </div>
                      </div>
                  </div>
                  <!-- footer-widget  end-->
                  <!-- footer-widget -->
                  <div class="col-md-4">
                      <div class="footer-widget">
                          <div class="footer-widget-title" style="text-align: center">Subscribe</div>
                          <div class="footer-widget-content">
                              <div class="subcribe-form fl-wrap">
                                  <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                  <form id="subscribe" class="fl-wrap">
                                      <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                      <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                      <label for="subscribe-email" class="subscribe-message"></label>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- footer-widget  end-->
              </div>
          </div>
          <!-- footer-widget-wrap end-->
      </div>
      <div class="footer-bottom fl-wrap">
          <div class="container">
              <div class="copyright"><span>&#169; ShreeGurve {{date( 'Y' )}}</span>. All rights reserved. </div>
              <div class="to-top"> <i class="fas fa-caret-up"></i></div>
              <div class="subfooter-nav">
                  <ul>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer end-->
  <div class="aside-panel hide">
      <ul>
          <li> <a href="#"><i class="far  fa-podium"></i><span>Politics</span></a></li>
          <li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>
          <li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>
          <li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
          <li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>
      </ul>
  </div>
</div>
<!-- wrapper end -->
<!-- cookie-info-bar -->
<div class="cookie-info-bar hide">
  <div class="container">
      <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our use of cookies: <a href="#">Cookie policy</a></div>
      <a href="#" class="sicb_btn color-bg">Accept</a>
      <a href="#" class="sicb_btn">Reject</a>
  </div>
</div>
<!-- cookie-info-bar end -->
<!--register form -->
<div class="main-register-container">
  <div class="reg-overlay close-reg-form"></div>
  <div class="main-register-holder">
      <div class="main-register-wrap fl-wrap">
          <div class="main-register_bg">
              <div class="bg-wrap">
                  <div class="bg par-elem "  data-bg="{{url('public/img/bg/1.jpg')}}"></div>
                  <div class="overlay"></div>
              </div>
              <div class="mg_logo"><img src="{{url('public/img/logo2.png')}}" alt=""></div>
          </div>
          <div class="main-register tabs-act fl-wrap">
              <ul class="tabs-menu">
                  <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                  <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
              </ul>
              <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
              <!--tabs -->
              <div id="tabs-container">
                  <div class="tab">
                      <!--tab -->
                      <div id="tab-1" class="tab-content first-tab">
                          <div class="custom-form">
                              <form method="post" name="registerform">
                                  <label>Username or Email Address <span>*</span> </label>
                                  <input name="email" type="text" onClick="this.select()" value="">
                                  <label>Password <span>*</span> </label>
                                  <input name="password" type="password" onClick="this.select()" value="">
                                  <div class="filter-tags">
                                      <input id="check-a" type="checkbox" name="check" checked>
                                      <label for="check-a">Remember me</label>
                                  </div>
                                  <div class="lost_password">
                                      <a href="#">Lost Your Password?</a>
                                  </div>
                                  <div class="clearfix"></div>
                                  <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                              </form>
                          </div>
                      </div>
                      <!--tab end -->
                      <!--tab -->
                      <div class="tab">
                          <div id="tab-2" class="tab-content">
                              <div class="custom-form">
                                  <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                      <label>Full Name <span>*</span> </label>
                                      <input name="name" type="text" onClick="this.select()" value="">
                                      <label>Email Address <span>*</span></label>
                                      <input name="email" type="text" onClick="this.select()" value="">
                                      <label>Password <span>*</span></label>
                                      <input name="password" type="password" onClick="this.select()" value="">
                                      <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <!--tab end -->
                  </div>
                  <!--tabs end -->
                  <div class="log-separator fl-wrap"><span>or</span></div>
                  <div class="soc-log  fl-wrap">
                      <p>For faster login or register use your social account.</p>
                      <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--register form end -->
<script src="https://apis.google.com/js/platform.js"></script>

{{-- <div class="g-ytsubscribe" data-channelid="UC0_Yzm13euiRKPdEgsprTJQ" data-layout="full" data-count="hidden"></div> --}}
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="{{url('public/js/jquery.min.js')}}"></script>
<script src="{{url('public/js/plugins.js')}}"></script>
<script src="{{url('public/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

<script type="text/javascript">
	$(".lazyload").lazyload({
	    effect : "fadeIn"
	});
</script>
<script>
	(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://inklinkor.com/tag.min.js',6050642,document.body||document.documentElement)
</script>
</body>
</html>
