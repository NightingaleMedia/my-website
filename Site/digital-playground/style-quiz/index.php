<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Style Quiz
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-dashboard.css?v=1.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class=" sidebar-mini ">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <img src="./assets/img/favicon.png" />

        <a href=".././Home.html" class="simple-text logo-normal">
          Lumens
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="./assets/img/james.jpg" />
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                NAME
                <b class="caret"></b>
              </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">

                <li>
                  <a href="user.html">
                   <i class="now-ui-icons users_single-02"></i>
                    <span class="sidebar-normal">My Profile</span>
                  </a>
                </li>
                <li>
                  <a href="EditUser.html">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                    <span class="sidebar-normal">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a href="PaymentIndex.html">
                   <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <span class="sidebar-normal">Payments</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li>
            <a href="./Portal.html">
              <i class="now-ui-icons shopping_shop"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./ConsultationIndex.html">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>My Consultations</p>
            </a>
          </li>
          <li class="active">
            <a href="StyleQuiz.html">
              <i class="now-ui-icons design_palette"></i>
              <p>My Style Quiz</p>
            </a>
          </li>
          <li>
            <a href="./products.html">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>My Products</p>
            </a>
          </li>
          <li>
            <a href="./pricing.html">
              <i class="now-ui-icons business_bulb-63"></i>
              <p>Buy A New Consultation</p>
            </a>
          </li>
          <li>
            <a href=".././Home.html">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
              <p>Lumens Home</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="../dashboard.html" class="nav-link">
              <i class="now-ui-icons shopping_shop"></i> Dashboard
            </a>
              </li>
              <li class="nav-item bg-info">
                <a class="nav-link" href="Pricing.html">
                  <i class="now-ui-icons business_bulb-63"></i>
                  <p>
                    <span class="d-lg-block d-md-block">Buy</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons ui-1_settings-gear-63"></i>
                  <p>
                    <span class="d-lg-none d-md-none">Settings</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="User.html"> <i class="now-ui-icons users_single-02"></i> Account</a>
                  <a class="dropdown-item" href="ContactUs"> <i class="now-ui-icons travel_info"></i> Help</a>
                  <a class="dropdown-item" href="#">Lumens Home</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="col-md-10 mr-auto ml-auto">
          <!--      Wizard container        -->
          <div class="wizard-container">


              <form class="style-quiz--form" > <!-- action="/" method="post -->
                <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                <div class="card-header text-center" data-background-color="black">
                  <h3 class="card-title">
                    Tell Us About Your Project * NAME *
                  </h3>
                  <h3 class="description">This information will let us know more about you.</h5>
                    <div class="wizard-navigation">
                      <ul class="nav nav-pills style-quiz--nav">
                        <li class="nav-item style-quiz__nav-item">
                          <a id="nav-link--user-details" class="nav-link show active style-quiz__nav-link" href="#user-details" data-toggle="tab"
                            role="tab" aria-controls="user-details" aria-selected="true">
                            Your Details
                          </a>
                        </li>
                        <li class="nav-item style-quiz__nav-item">
                          <a id="nav-link--what-room" class="nav-link style-quiz__nav-link" href="#what-room"
                            data-toggle="tab" data-toggle="tab" role="tab" aria-controls="what-room"
                            aria-selected="false">
                            What Room
                          </a>
                        </li>
                        <li class="nav-item style-quiz__nav-item ">
                          <a id="nav-link--your-style" class="nav-link style-quiz__nav-link" href="#your-style"
                            data-toggle="tab" data-toggle="tab" role="tab" aria-controls="your-style"
                            aria-selected="false">
                            Your Style
                          </a>
                        </li>
                        <li class="nav-item style-quiz__nav-item">
                          <a id="nav-link--lighting-issue" class="nav-link style-quiz__nav-link" href="#lighting-issue"
                            data-toggle="tab" data-toggle="tab" role="tab" aria-controls="lighting-issue"
                            aria-selected="false">
                            Lighting Issue
                          </a>
                        </li>
                        <li class="nav-item style-quiz__nav-item">
                          <a id="nav-link--existing-lighting" class="nav-link style-quiz__nav-link"
                            href="#existing-lighting" data-toggle="tab" data-toggle="tab" role="tab"
                            aria-controls="existing-ligthing" aria-selected="false">
                            Existing Lighting
                          </a>
                        </li>
                        <li class="nav-item style-quiz__nav-item">
                          <a id="nav-link--your-budget" class="nav-link style-quiz__nav-link" href="#your-budget"
                            data-toggle="tab" data-toggle="tab" role="tab" aria-controls="your-budget"
                            aria-selected="false">
                            Budget
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
                <div class="bg-danger style-quiz__validation">
                  <h6>Please complete the whole form!</h6>
                </div>
                <div class="card-body bg-white">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="user-details">
                      <h5 class="info-text"> Let's verify your details. So we can reach you.</h5>
                      <div class="row justify-content-center">
                        <div class="col-sm-6">


                          <div class="input-group form-control-lg ">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-white">
                                <i class="now-ui-icons ui-1_email-85 "></i>
                              </div>
                            </div>
                            <input type="email" placeholder="Email (required)" class="form-control bg-white" name="email"  required/>
                          </div>
                          <div class="input-group form-control-lg ">
                            <div class="input-group-prepend  ">
                              <div class="input-group-text bg-white">
                                <i class="now-ui-icons tech_mobile "></i>
                              </div>
                            </div>
                            <input type="tel" placeholder="Mobile Number (required)" class="form-control bg-white"
                              name="Mobile"  required/>
                          </div>
                        </div>
                        <div class="col-sm-6">

                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-white">
                                <i class="now-ui-icons location_pin"></i>
                              </div>
                            </div>
                            <input type="text" placeholder="City (required)" class="form-control bg-white" name="city"
                              prompt="so we know you're time zone" />
                          </div>
                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-white">
                                <i class="now-ui-icons location_map-big"></i>
                              </div>
                            </div>
                            <input type="text" placeholder="State (required)" class="form-control bg-white" name="state"
                              prompt="so we know your time zone" />
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="tab-pane  fade" id="what-room">
                      <h5 class="info-text"> What room needs some lighting love? </h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-4">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="kitchen" value="0" class="hidden-checkbox">
                                <h6>Kitchen</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="bathroom" value="Bathroom" class="hidden-checkbox">
                                <h6>Bathroom</h6>

                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="bedroom" value="0" class="hidden-checkbox">
                                <h6>Bedroom</h6>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-4">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="living-space" value="0" class="hidden-checkbox">
                                <h6>Living Space</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="outdoor" value="0" class="hidden-checkbox">
                                <h6>Outdoor</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="remodel-other" value="0" class="hidden-checkbox">
                                <h6>Remodel / Other</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="your-style">
                      <h5 class="info-text"> How would you describe your style? </h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-4">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="modern" class="hidden-checkbox">
                                <h6>Modern</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="industrial" class="hidden-checkbox">
                                <h6>Industrial</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="classical" class="hidden-checkbox">
                                <h6>Classical</h6>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-4">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="minimalist" class="hidden-checkbox">
                                <h6>Minimalist</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="chic" class="hidden-checkbox">
                                <h6>Chic</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-style" value="not sure yet" class="hidden-checkbox">
                                <h6>Not Sure Yet</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="tab-pane   fade" id="lighting-issue">
                      <h5 class="info-text"> What is the lighting issue? </h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="lighting-issue" class="hidden-checkbox">
                                <p>I don't like my existing lighting design.</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="lighting-issue" class="hidden-checkbox">
                                <p>There simply isn't enough light.</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="lighting-issue" class="hidden-checkbox">
                                <p>I am re-doing my lighing <br>to be more 'my style'</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="lighting-issue" class="hidden-checkbox">
                                <p>Not sure yet, I just want some<br> general advice from the<br> lighting expert</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane   fade" id="existing-lighting">
                      <h5 class="info-text"> What kind of lighting do you have now? </h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="existing-lighting"  class="hidden-checkbox">
                                <p>Random lamps / lights <br>from retail stores</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="existing-lighting" class="hidden-checkbox">
                                <p>Old track lighting from our home that <br>we want to get rid of</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="existing-lighting" class="hidden-checkbox">
                                <p>Lighting that is built into the<br> wall or ceiling of the room.</p>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="existing-lighting" class="hidden-checkbox">
                                <p>A little bit of everything that<br> we'd like to refresh</p>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="existing-lighting" value="none to speak of" class="hidden-checkbox">
                                <p>None to speak of!</p>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="tab-pane   fade" id="your-budget">
                      <h5 class="info-text"> What is your budget for this project?</h5>
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <div class="row">
                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-budget"  class="hidden-checkbox">
                                <h4> $0 - $250 </h4>
                              </div>
                            </div>

                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-budget" class="hidden-checkbox">
                                <h4> $250 - $500 </h4>
                              </div>
                            </div>

                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-budget" class="hidden-checkbox">
                                <h4> $500 - $1000 </h4>
                              </div>
                            </div>
                            <div class="col-sm-6">

                              <div class="room-checkbox" data-toggle="room-toggle">
                                <input type="checkbox" name="your-budget" class="hidden-checkbox">
                                <h4> $1000 and up </h4>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-rose btn-wd ' name='next' value='Next' />
                    <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Finish' />
                  </div>
                  <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd ' name='previous'
                      value='Previous' />
                  </div>
                  <div class="clearfix"></div>
                </div>
              </form>
            <!-- S U C C E S S -->
            <div class="card d-none" data-color="info" id="success-notice">
          <div class="card-header text-center" data-background-color="black">
            <h3 class="card-title">
              Thank You!
            </h3>
            </div>
            <div class="card-body text-center style-quiz--success">
              Thank you! Your style has been submitted!<br>
               You can now schedule your appointment!
               <button class="btn btn-lg btn-info d-block ml-auto mr-auto mt-4" >Schedule Now</button>
            </div>
            <div class="card-footer text-center">
              <a href="/">Back To Dashboard</a>
            </div>
          </div>
          <!--success ends -->
          <!-- wizard container -->
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav>
            <ul>
              <li>
                Lumens
              </li>
              <li>
                <a href="about.html">
                About Us
              </a>
              </li>
              <li>
                <a href="contact.html">
                Contact
              </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> Designed by
            <a href="https://www.invisionapp.com" target="_blank">Nightingale</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="./assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <!-- <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script> -->
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js"></script>

  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-dashboard.min.js?v=1.1.2" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
    <script src="./assets/js/style-quiz.js"></script>
  <!-- <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initNowUiWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script> -->

<style>
.room-checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 7rem;
  margin-bottom: 1rem;
  width: 100%;
  text-align: center;
  border: 1px solid rgba(0, 0, 0, 0.2);

  transition: all 0.25s;
}

.room-checked{
  background-color: rgba(0, 0, 0, 0.2);
}
.style-quiz__nav-item {
  min-height: 4rem;
}
.completed {
  background-color: #00d970 !important;
}
.style-quiz__validation{
  opacity: 0;
  position:relative;
  width: inherit;
  margin-bottom: -37px;
  margin-left: auto;
  margin-right: auto;
  font-size: 1.5rem;
  color: white;
  z-index: 1;
  text-align: center;
  transition: 0.6s opacity, 0.2s ease transform;

}
.showValidation {
    opacity: 100;
    transition: 0.1s opacity, 0.2s ease-in transform;

}
.style-quiz--success{
  height: 200px;
}
</style>


</body>

</html>
