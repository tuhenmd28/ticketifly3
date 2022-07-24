<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Looking for something amazing?">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="True">
    <title>Ticketifly </title>
    <!-- Edge and IE-->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Looking for something amazing?">
    <link rel="icon" sizes="192x192" href="img/touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Your Travel World">
    <link rel="apple-touch-icon" href="img/touch/apple-touch-icon.png">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- slick slider -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link id="cssTheme" rel="stylesheet" href="skins/style-default.css">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="load">
    <div class="progress-load js-progress-load"></div>
    <div class="modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
              <li class="nav-item w-50">
                <a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Login</a>
              </li>
              <li class="nav-item w-50">
                <a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Sign Up</a>
              </li>
              <li>
                <a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a>
              </li>
            </ul>
            <button class="btn btn-light close pointer" type="button" data-dismiss="modal" aria-label="close">
              <span class="icon text-dark" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
                  <path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z" />
                </svg>
              </span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tab-content">
              <div class="tab-pane" id="accountLogin" role="tabpanel">
                <form class="modal-account__form js-account-form" id="formLogin" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required" />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="password" name="user_pass" placeholder="Password" data-minlength="6" required="required" />
                    <div class="help-block">Your password must be at least 6 characters long</div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <button class="btn btn-secondary btn--round mr-2 mb-2" type="submit">sign in </button>
                    <p class="mb-2">
                      <a class="js-toggle-account" href="#" data-account="forgot">Forgot your password?</a>
                    </p>
                  </div>
                  <div class="d-inline-block my-2 w-100">
                    <div class="social-sign">
                      <div class="divider divider-horizontal">
                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                      </div>
                      <ul class="social-sign__list row">
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/facebook.png" alt="#" />
                            <span class="nav-text">Connect with Facebook</span>
                          </a>
                        </li>
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/google-plus.png" alt="#" />
                            <span class="nav-text">Connect with Google</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
                <div class="modal-footer d-block">
                  <p class="fz-small mb-0">
                    <em>By accessing your account, you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                    </em>
                  </p>
                </div>
              </div>
              <div class="tab-pane active show" id="accountRegist" role="tabpanel">
                <form class="modal-account__form js-account-form" id="formRegist" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="user_name" placeholder="First Name" required="required" />
                    <div class="help-block">Please enter your name</div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="user_last_name" placeholder="Last Name" required="required" />
                    <div class="help-block">Please enter your last name</div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required" />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" id="userPass" type="password" name="user_pass" placeholder="Password" data-minlength="6" required="required" />
                    <div class="help-block">Your password must be at least 6 characters long</div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="password" name="user_pass_confirm" placeholder="Confirm Password" data-match="#userPass" required="required" />
                    <div class="help-block">Please enter the same password as above</div>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="agreePolicy" type="checkbox" required>
                      <span class="custom-control-label">I have read and agree to the <a href="#">Terms of Use</a> and the <a href="#">Privacy Policy.</a>
                      </span>
                    </label>
                    <div class="help-block">Please accept our policy</div>
                  </div>
                  <p class="mb-4 d-flex justify-content-center justify-content-sm-start">
                    <button class="btn btn-secondary btn--round" type="submit">Create Account</button>
                  </p>
                  <div class="d-inline-block my-2 w-100">
                    <div class="social-sign">
                      <div class="divider divider-horizontal">
                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                      </div>
                      <ul class="social-sign__list row">
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/facebook.png" alt="#" />
                            <span class="nav-text">Sign up with Facebook</span>
                          </a>
                        </li>
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/google-plus.png" alt="#" />
                            <span class="nav-text">Sign up with Google</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="modal-footer d-block">
                    <div class="form-group">
                      <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="dispatchEmail" type="checkbox">
                        <span class="custom-control-label">Please send me Travelocity.com emails with travel deals, special offers, and other information.</span>
                      </label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="accountForgot" role="tabpanel">
                <form class="modal-account__form" id="formForgot" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <p class="text-center">We will email you instructions for resetting your password.</p>
                  <p class="d-flex justify-content-center">
                    <button class="btn btn-secondary btn--round" type="submit">Retrieve Password </button>
                  </p>
                  <p class="d-flex justify-content-center">
                    <a class="js-toggle-account mr-3" href="#" data-account="regist">Create a new account</a>
                    <a class="js-toggle-account" href="#" data-account="login">Return to Sign In</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="page-header">
      <div class="panel-fixed">
        <div class="page-header__top bg-white js-header-top js-top-panel">
          <div class="container">
            <div class="row justify-content-center justify-content-between">
              <div class="col-12 col-md col-lg-3 d-flex justify-content-center justify-content-md-start">
                <a class="navbar-logo d-inline-flex align-items-center" href="index.php">
                  <img class="img-fluid mr-3" src="img/clogo.png" alt="#" />
                </a>
              </div>
              <div class="col col-lg-6 d-none d-md-flex align-items-center justify-content-center">
                <a class="page-header__call d-flex align-items-center text-nowrap" href="tel:880000112222333">
                  <img src="img/man.png" style="width:32px;" alt="">
                  <div class="page-header__call-right">
                    <div class="title fz-small">Support</div>
                    <div class="phone fw-bold">8-800-0011-2222-333</div>
                  </div>
                </a>
                <div class="phoneArea d-none">
                  <!-- <div class="picon"><img src="img/phone-call.png" alt=""></div> -->
                  <div class="text">
                    <p>Call Us Toll-Free 24/7: <a href="
                          "> 1-650-263-1714</a>
                    </p>
                    <div class="number"> Discount ID: <a href="" class="idhover"> 25-66-57-6 <span class="hover">Individual Discount ID gives you an opportunity to book tickets at special discount or at exclusive price.</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-lg-3 d-none d-md-flex">
                <ul class="nav nav-panel">
                  <li class="nav-item d-none">
                    <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login">
                      <img src="img/enter.png" style="width:25px ;" alt="">
                      <span>log in</span>
                    </a>
                  </li>
                  <li> <a class="social-link" href="#" target="_blank"> <i class="fa-brands fa-facebook"></i> </a> </li>
                  <li> <a class="social-link" href="#" target="_blank"> <i class="fa-brands fa-twitter"></i> </a> </li>
                  <li> <a class="social-link" href="#" target="_blank"> <i class="fa-brands fa-instagram"></i> </a> </li>
                  <li> <a class="social-link" href="#" target="_blank"> <i class="fa-brands fa-youtube"></i> </a> </li>
                  <li> <a class="social-link" href="#" target="_blank"> <i class="fa-brands fa-whatsapp"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn-toggle btn btn-light d-lg-none btn-toggle-nav" type="button" data-toggle="collapse" data-target="#navPanel">
        <img src="img/menu.png" alt="">
        <span class="icon-bar d-none"></span>
      </button>
      <nav class="main-nav d-flex collapse d-lg-block" id="navPanel">
        <div class="main-nav__container d-flex">
          <div class="container">
            <div class="main-menu ">
              <div class="loginarea d-lg-none">
                <ul class="nav nav-panel">
                  <li class="nav-item d-flex">
                    <a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login">
                      <img src="img/enter.png" style="width:25px ;" alt="">
                      <span>log in</span>
                    </a>
                  </li>
                  <li class="nav-item d-flex">
                    <a class="nav-link btn btn-light js-toggle-account" href="#">
                      <img src="img/laptop (1).png" style="width:25px ;" alt="">
                      <span>My Booking</span>
                    </a>
                  </li>
                </ul>
              </div>
              <ul class="main-nav__list nav d-flex" id="navMenu">
                <li class="nav-item dropdown">
                  <a class="nav-link fw-bold text-uppercase" href="flight.php">
                    <span>Flights</span>
                    <i class="caret fa fa-angle-down ml-2"></i>
                    <img src="img/down.png" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <div class="memutitle">
                      <a class="nav-link fw-bold text-uppercase" href="#">
                        <span>Top Deals</span>
                        <i class="caret fa fa-angle-down ml-2"></i>
                        <img src="img/down.png" alt="">
                      </a>
                      <ul class="">
                        <li class="nav-item">
                          <a class="nav-link" href="#topAirlineDeals">
                            <span>Top Airline Deals </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#cheapFlightTicker">
                            <span>Cheap Flight Tickets</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="groupTravel.php">
                            <span>Group Travel</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="multicity.php">
                            <span>Multi City Flights</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="oneWayFlight.php">
                            <span> One-Way Flights</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="nonStopFlight.php">
                            <span>Non-Stop Flights</span>
                          </a>
                        </li>
                        <a href="#">See All</a>
                      </ul>
                    </div>
                    <div class="memutitle">
                      <a class="nav-link fw-bold text-uppercase" href="#">
                        <span>Premium Cabin Flights</span>
                        <i class="caret fa fa-angle-down ml-2"></i>
                        <img src="img/down.png" alt="">
                      </a>
                      <ul class="">
                        <li class="nav-item">
                          <a class="nav-link" href="premiumEconomyFlight.php">
                            <span>Premium Economy Flights</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="businessClassFlight.php">
                            <span>Business Class Flights</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="firstClassFlight.php">
                            <span>First Class Flights</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="businessAirlineDeals.php">
                            <span>Business Airlines Deals</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fw-bold text-uppercase" href="#">
                    <span>Top Deals</span>
                    <i class="caret fa fa-angle-down ml-2"></i>
                    <img src="img/down.png" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>Top Airline Deals </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>Cheap Flight Tickets</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>Group Travel</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>Multi City Flights</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> One-Way Flights</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>Non-Stop Flights</span>
                      </a>
                    </li>
                    <a href="#">See All</a>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fw-bold text-uppercase" href="#">
                    <span>Flights From US </span>
                    <i class="caret fa fa-angle-down ml-2"></i>
                    <img src="img/down.png" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>To Asia</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>To Africa</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>To Europe</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> To Middle East</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> To India & ISC</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>To Oceania</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>To Latin America</span>
                      </a>
                    </li>
                    <a href="#">See All</a>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fw-bold text-uppercase" href="#">
                    <span>Flights To US</span>
                    <i class="caret fa fa-angle-down ml-2"></i>
                    <img src="img/down.png" alt="">
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>From Asia</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>From Africa</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>From Europe</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> From Middle East</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> From India & ISC</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> From Oceania</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span> From Latin America</span>
                      </a>
                    </li>
                    <a href="#">See All</a>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link fw-bold text-uppercase" href="#"><span>About</span><i class="caret fa fa-angle-down ml-2"></i><img src="img/down.png" alt=""></a><ul class="dropdown-menu"><li class="nav-item"><a class="nav-link" href="#"><span>About Us</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span>Reviews</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span> Video</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span> Customer Stories</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span> Contact Us</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span> Blog</span></a></li></ul></li>
                <li class="nav-item dropdown">
                  <a class="nav-link fw-bold text-uppercase" href="#">
                    <span>How it works</span>
                    <!-- <i class="caret fa fa-angle-down ml-2"></i> -->
                    <img src="img/down.png" alt="">
                  </a>
                </li>
                <!-- <li class="nav-item dropdown"><a class="nav-link fw-bold text-uppercase" href="#"><span>Support</span><i class="caret fa fa-angle-down ml-2"></i><img src="img/down.png" alt=""></a><ul class="dropdown-menu"><li class="nav-item"><a class="nav-link" href="#"><span>Customer Service</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span>My Booking</span></a></li><li class="nav-item"><a class="nav-link" href="#"><span>FAQ</span></a></li></ul></li> -->
             
              </ul>
              <div class="search d-lg-none">
                <img src="./img/search.png" alt="">
                <span>Search</span>
              </div>
              <div class=" d-lg-none d-block w-100 order-10 ">
                <a class="page-header__call d-flex align-items-center w-100 text-nowrap" href="tel:880000112222333">
                  <i class="icon icon-call js-tooltip-call mr-3" data-toggle="tooltip" data-placement="bottom" title="Support 8-800-0011-2222-333"></i>
                  <div class="page-header__call-right">
                    <div class="title fz-small">Support</div>
                    <div class="phone fw-bold">8-800-0011-2222-333</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
        <!-- call profile click show section start -->
    <div class="lowest">
      <img src="img/times.png" alt="">
      <div class="lwrap">
        <div class="lleftside">
          <div>
            <img src="img/callcenter.png" alt="">
          </div>
          <h5 class="h2">
            <span>*FREE*</span> Exchange
          </h5>
          <p>Ask your Agent <br> How to Win-Win </p>
          <h4>Save up to $300 off online prices and a further $30 with the code.</h4>
        </div>
        <div class="rightside">
          <h1>Lowest <p>Fares of the Year</p>
          </h1>
          <div class="">by calling</div>
          <a href="tel:1-650-263-1714">1-650-263-1714</a>
          <p>Voucher Code: <span>ticketifly60</span>
          </p>
        </div>
      </div>
    </div>
    <!-- call profile click show section end -->
    <!-- call icon animation click number show area start -->
    <div class="shownumber">
      <img src="img/times.png" alt="">
      <div>
        <h1>Call Your Personal Travel Agent Now</h1>
        <h4>Exclusive unpublished deals and <strong>FREE Planning</strong> are available! </h4>
      </div>
      <a href="tel:1-650-263-1714">1-650-263-1714</a>
      <p>Discount ID : <strong>25-66-57-6</strong>
      </p>
      <span>Individual Discount ID gives you an opportunity to book tickets at special discount or at exclusive price.</span>
    </div>
    <!-- call icon animation click number show area end -->