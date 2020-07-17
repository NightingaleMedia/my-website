<?php require_once('../Private/initialize.php');?>
<?php $pageTitle = "Home";?>
<?php include(SHARED_PATH . '/header-only.php');?>

<body class="template-color-15 template-font-1">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php include(SHARED_PATH . '/preloader.php');?>
  <!-- Wrapper -->
  <div id="wrapper all-wrapper" class="wrapper">

    <?php include(SHARED_PATH . '/sidebar.php'); ?>
    <?php include(SHARED_PATH . '/menu.php');?>
    <?php include(SHARED_PATH . '/popup-menu.php');?>

    <!-- Page Conttent -->
    <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">
      <!-- Start Verical Slider Area -->
      <div class="vertical-slider-area d-sm-none d-md-block">
            <div class="creative-people-inner">
              <!--  <h2 class="heading">Bold thoughts <span class="theme-color">turn heads.</span></h2> -->
              <div class="row">
                <div class="col-12">
                  <div class="mr--60 homepage  move-up wow" data-wow-delay="1s" data-wow-duration="1.5s">
                    <h1 class="bk-hover heading">
                      <a href="/">
                        <div id="popop-open-menu" class="popop-open-menu hamberger-trigger">
                          <div class="menu-icon"> Menu </div>
                        </div>
                      </a>
                    </h1> <br>
                    <h1 class="bk-hover "><a href="/Sound-Portfolio.php"><span class="">Portfolio</span></a></h1><br>
                    <h1 class="bk-hover "><a href="/"><span class="">Resume</span></a></h1><br>
                    <h2 class="bk-hover "><a href="/"><span class="">. . . Everything Else</span></a></h2>
              </div>
            </div>
          </div>
        </div>
        <canvas id="homepage-holder">
      </canvas>
      </div>


      <!-- Start Service Area -->
      <div class="brook-service-area  ">
        <div class="row align-items-center">
          <div class="col-lg-6 offset-lg-1 col-md-12 col-12 mt_sm--40 pr--200 ">
            <div class="bk-profile-content ">
              <h3 class="heading heading-h3 mt--80">

              </h3>
              <div class="bkseparator--40"></div>
              <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-sm-none d-md-block">
                  <div class="profile">
                    <h5 class="heading heading-h5 theme-color">Nice To Meet You.</h5>
                    <div class="bkseparator--20"></div>
                    <p class="bk_pra">Hi, I'm Al!. I am a media creator, software developer and project manager. I am informed by 11+ years of a design-driven creativity across a variety of media and tech projects. 4+ years agency experience ranging from NYC startups to
                      nation-wide corporations. 2 years as a very-busy business owner-- helping businesses grow their identity and productivity through media production, software/web development, and branding.
                    </p>
                    <br>
                    <p class="bk_pra">I am a lifelong musician, producer, engineer and rolling stone. Avid traveller and explorer. Novice day trader and market analyst. Accumulating knowledge and experience to pursue a graduate degree in economics and public policy. Particularly
                      interested in data visualization, tech-driven communication and immersive experiences.

                    </p>
                  </div>
                </div>
              </div>
              <div class="mt--70 mt_md--40 mt_sm--40"></div>
              <div class="social-share social--transparent">
                <!-- <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-5 col-12">
            <div class="clint-succeed bg_image--reel ptb--220 ptb-md--80 ptb-lg--80 ptb_lp--130 ptb-sm--60" data-overlay="1">
              <div class="row align-items-center plr_md--40 plr_sm--40">
                <div class="col-lg-4">
                  <!-- Start Single Popup -->
                  <div class="video-btn">
                    <a class="play__btn" href="https://youtu.be/PHZHAka4RZ4">
                      <div class="video-icon second-icon yellow-color-1"></div>
                    </a>
                  </div>
                  <!-- End Single Popup -->
                </div>
                <div class="col-lg-8">
                  <div class="content pr--30 pr_sm--0">
                    <h3 class="heading heading-h3 font-32 text-white line-height-1-88">Check out my video editing reel.</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Service Area -->
      <!-- End Verical Slider Area -->
      <!-- Start Portfolio Caption -->
      <?php include(SHARED_PATH . '/landing-portfolio.php');?>
      <!-- End Portfolio Caption -->

      <?php include(SHARED_PATH . '/accordion.php');?>


      <!-- Start Brand Area -->
      <div class="bk-brand-area bg_color--1 ptb--150 ptb-md--80 ptb-sm--60">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="brook-section-title text-center mb--65">
                <h3 class="heading heading-h3">Some of My Clients</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="brand-wrapper">
                <div class="brand__list brand-default brand-style--2">
                  <div class="brand wow" data-wow-delay=".10s"><a href="#">
                    <img src="img/client/clients.png"  alt="logo image"></a> </div>
                  <div class="brand wow" data-wow-delay=".13s"><a href="#">
                    <img src="img/client/antfood.png" alt="logo image"></a> </div>
                  <div class="brand  wow" data-wow-delay=".14s">
                    <a href="#"><img src="img/client/google.png" alt="logo image"></a> </div>
                  <div class="brand wow" data-wow-delay=".15s"><a href="#">
                    <img src="img/client/greenumbrella.png" alt="logo image"></a> </div>
                  <div class="brand  wow" data-wow-delay=".16s">
                    <a href="#"><img src="img/client/reebok.png" alt="logo image"></a> </div>
                  <div class="brand  wow" data-wow-delay=".17s">
                    <a href="#"><img src="img/client/starbucks.png" alt="logo image"></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Brand Area -->

      <!-- Start Blog Grid Area -->

      <!-- End Blog Grid Area -->
      <?php include(SHARED_PATH . '/footer.php');?>
