<!--  -->
<?php require_once('../Private/initialize.php');?>
<?php include(SHARED_PATH . '/header-only.php');?>

<body class="template-color-1 template-font-1 vertical-geadient-home" data-hijacking="off" data-animation="rotate">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Start Preloader  -->
  <div id="page-preloader" class="page-loading clearfix">
    <div class="page-load-inner">
      <div class="preloader-wrap">
        <div class="wrap-2">
          <div class=""> <img src="img/icons/brook-preloader.gif" alt=" Preloader"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Preloader  -->

  <!-- Wrapper -->
  <div id="wrapper" class="wrapper">

    <?php include(SHARED_PATH . '/sidebar.php');?>

    <?php include(SHARED_PATH . '/menu.php');?>

    <?php include(SHARED_PATH . '/popup-menu.php');?>

    <!-- Start Brook Search Popup -->
    <div class="brook-search-popup">
      <div class="inner">
        <div class="search-header">
          <div class="logo">
            <a href="index.php">
                            <img src="img/logo/brook-black.png" alt="logo images">
                        </a>
          </div>
          <a href="#" class="search-close"></a>
        </div>
        <div class="search-content">
          <form action="#">
            <label>
                            <input type="search" placeholder="Enter search keyword…">
                        </label>
            <button class="search-submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
    <!-- End Brook Search Popup -->

 
   
    <!-- Page Conttent -->

   <div class="bg-changer breadcaump-area pt--100 pb--100 breadcaump-title-bar breadcaump-title-white">
  
            <div class="breadcaump-inner text-center">
            <h2> Sound Portfolio </h2>
           
      </div>
    </div>


    <main class="page-content">
      <!-- Start Vertical Slide -->


      <!-- End Vertical Slide -->
      <?php include (SHARED_PATH . '/footer.php');?>