<?php require_once('../Private/initialize.php');?>
<?php include(SHARED_PATH . '/header-only.php');?>

<body class="template-color-1 template-font-1">

  <?php include(SHARED_PATH . '/preloader.php');?>

    <div id="wrapper all-wrapper" class="wrapper">

    <?php include(SHARED_PATH . '/sidebar.php');?>

      <?php include(SHARED_PATH . '/menu.php');?>

      <?php include(SHARED_PATH . '/popup-menu.php');?>

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Start Portfolio Details -->
            <div class="brook-portfolio-details bg_color--5">
                <div class="container">
                    <div class="row pt--100 pb--80">

                        <!-- Portfolio Left -->
                        <div class="col-lg-6 col-12">
                            <div class="portfolio-right portfolio-details-gallery text-left">

                                <!-- Start Portfolio Image -->
                                <div class="portfolio-image mb--50">
                                 <img src="<?php echo site_url('img/gifs/site-git-2.gif')?>" alt=""/>
                                </div>
                                <!-- End Portfolio Image -->

                                <!-- Start Portfolio Image -->
                                <div class="portfolio-image mb--50">
                                    <img src="<?php echo site_url('img/gifs/site-gif-1.gif')?>" alt=""/>
                                </div>
                                <!-- End Portfolio Image -->

                                <!-- Start Portfolio Image -->
                                <div class="portfolio-image">
                                   
                                </div>
                                <!-- End Portfolio Image -->

                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                            <div class="portfolio-left bk-portfolio-details">
                                <div class="portfolio-main-info">
                                    <h3 class="heading heading-h3 line-height-1-42">About This Site</h3>
                                    <div class="portfolio-content mt--75 mb--75 mt_md--40 mb_md--40 mt_sm--40 mb_sm--40">
                                        <h6 class="heading heading-h6">Custom Coded in PHP & JavaScript</h6>
                                        <div class="desc mt--20">
                                            <p class="bk_pra">
                                            After years of trying out wordpress, squarespace and plain old HTML.  I decided it was time to build out a real CMS in PHP and also
                                              try my hand at some modern and interactive javascript.  What you see is a constant work in progress, but my website is a living growing
                                              thing, a product of my skills a constant reminder that I am always striving to learn better, faster and modern ways to structure a CMS and a website. 
                                            <br>
                                            <br>
                                          </p>
                                           <h6 class="heading heading-h6">Where It's Headed</h6>
                                           <p class="bk_pra">
                                             <br>
                                            I am currently in the process of decoupling my frontend and backend.  I am aiming to implement a headless CMS using Python, Django
                                          and a GraphQL API.  After that I am going to redesign the site from scratch using a front end stack of <span class="bold">
                                          React.js, Bootstrap/Sass, Anime.js and Next.js.</span>

                                            </p>
                                        </div>
                                    </div>
                                    <!-- Start Details List -->
                                    <div class="portfolio-details-list">

                                        <div class="details-list">
                                            <label>Release Date</label>
                                            <span>2019</span>
                                        </div>

                                        <div class="details-list">
                                            <label>Client</label>
                                            <span>Me!</span>

                                        </div>

                                        <div class="details-list">
                                            <label>Agency</label>
                                              <span><a href="http://www.antfood.com/">Nightingale Media</a></span>
                                        </div>

                                        <div class="details-list">
                                            <label>What I Did</label>
                                            <span>Web Design, Branding, Logo, Architecture</span>
                                        </div>

                                    </div>
                                    <!-- End Details List -->
                                    <!-- Start Portfolio Share -->
                                    <div class="portfolio-share pt--70 pt_md--40 pt_sm--40">
                                        <h6 class="heading heading-h6">SHARE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Right -->

                    </div>
                </div>

                <div class="container bg_color--1">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Portfolio Nav List -->
                            <div class="portfolio-nav-list pt--50 pb--150 pb_md--80 pb_sm--60 pt_md--5 pt_sm--5">
                                <div class="portfolio-page prev">
                                    <div class="inner">
                                        <a href="../Sound-Portfolio.html">
                                            <p>Back</p>
                                            <h3 class="heading heading-h3">All <br> Projects</h3>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="portfolio-page next mt_sm--30">
                                    <div class="inner">
                                        <a href="#">
                                            <p>Next</p>
                                            <h3 class="heading heading-h3">B-sharp High-end <br> Audio</h3>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                            <!-- Portfolio Nav List -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Portfolio Details -->

        </main>
        <!--// Page Conttent -->
    </div>

    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>


    <!-- REVOLUTION JS FILES -->
    <script src="../js/jquery.themepunch.tools.min.js"></script>
    <script src="../js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="../js/revolution.extension.actions.min.js"></script>
    <script src="../js/revolution.extension.carousel.min.js"></script>
    <script src="../js/revolution.extension.kenburn.min.js"></script>
    <script src="../js/revolution.extension.layeranimation.min.js"></script>
    <script src="../js/revolution.extension.migration.min.js"></script>
    <script src="../js/revolution.extension.navigation.min.js"></script>
    <script src="../js/revolution.extension.parallax.min.js"></script>
    <script src="../js/revolution.extension.slideanims.min.js"></script>
    <script src="../js/revolution.extension.video.min.js"></script>
    <script src="../js/revoulation.js"></script>


</body>

</html>
