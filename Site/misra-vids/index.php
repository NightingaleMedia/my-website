<?php require_once('../../Private/initialize.php');?>
<?php $pageTitle = "Misra Vids";?>
<?php include(SHARED_PATH . '/header-only.php');?>

<body class="template-color-15 template-font-1">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php// include(SHARED_PATH . '/preloader.php');?>
  <!-- Wrapper -->
  <div id="wrapper all-wrapper" class="wrapper">

    <?php include(SHARED_PATH . '/sidebar.php'); ?>
    <?php include(SHARED_PATH . '/menu.php');?>
    <?php include(SHARED_PATH . '/popup-menu.php');?>


    <!-- Page Conttent -->
    <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">

      <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1 bk-masonary-wrapper clearfix">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
            
            <h2>
              Misra Family Video Archive
              </h2>
              <p>
                
               In the fall of 2019, I discovered a box of super 8 films somewhere buried in storage.  After many hours of attempting to 
                convert it myself, I decided to have it profesionally converted.  After minor touchups and some uploading, I hope this archive
                serves as a little window into where my family came from.
              </p>
              <p >
                <strong>
                Videos not showing up? </strong> <button class="ml--20 btn btn-sm btn-primary">Click Here </button> 
              </p>
            </div>
            
            <div class="col-lg-12">
              <div class="ajax-filter">
                <div class="row anchor-elem">
   
                  <!-- Start Single Portfolio -->
<!--                 <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--30 youtuber">
                    <div class="portfolio portfolio_style--1 ">
                      <div class="poss_relative">
                        <div class="thumb">
                          <img class="youtuber" src="https://i.ytimg.com/vi/S7BbY-WyEWM/sddefault.jpg" alt="Portfolio Images">
                        </div>
                        <div class="port-overlay-info">
                          <div class="hover-action">
                            <h3 class="post-overlay-title"><a href="portfolio-details.html">Misra Videos</a></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  -->
                  
                  <!-- End Single Portfolio -->
                </div>
                <div class="toggle-btn text-center">
<!--                   <button class="loadMore" id="next">Load More <i class="fa fa-redo"></i></button> -->
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Verical Slider Area -->

      <!-- End Blog Grid Area -->
      <script src="misra-playlist.js"></script>
      <?php include ('misra-playlist.php')?>
      <?php include(SHARED_PATH . '/footer.php');?>