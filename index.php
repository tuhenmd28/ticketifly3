<?php include 'header.php';?>
    <main class="page-main">
      <section class="intro d-flex flex-column load">
        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 d-lg-block d-none">
                <div class="secmain-img-wraper rellax " data-rellax-speed="5" data-rellax-percentage="0">
                  <img class="secmain-img img-fluid" style="transform:scale(1.2); height: 480px;" src="img/banner-animation/cloud.png" alt="flight" />
                  <span id="overlap1">
                    <img class="img-fluid " src="img/banner-animation/flight.png" alt="flight" />
                  </span>
                  <div class="motionpoints">
                    <div class="star star-1"></div>
                    <div class="star star-2"></div>
                    <div class="star star-3"></div>
                    <div class="star star-4"></div>
                    <div class="star star-5"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-10 d-flex justify-content-center " style="margin-top: -20px; ;">
                <div class="pnl-body">
                  <form method="get" action=" #" class="formClass" style="transform:translateX(20px) ;">
                    <div class="radiobtn">
                      <ul>
                        <li>
                          <input checked type="radio" name="radio" value="Round-Trip" id="Round-Trip">
                          <label for="Round-Trip">Round-Trip</label>
                        </li>
                        <li>
                          <input type="radio" name="radio" value="One-Way" id="One-Way">
                          <label for="One-Way">One-Way</label>
                        </li>
                        <li>
                          <a  href="multicity.php">Multi-City Flights</a>
                        </li>
                      </ul>
                    </div>
                    <div class="formIconTo">
                      <li>
                        <label for="form">Form</label>
                        <input type="text" name="form" id="form" placeholder="New York (NYC)">
                        <img src="img/pin.png" alt="" class="location" width="30">
                      </li>
                      <li>
                        <img class="arrow" src="img/transfer (1).png" style="width:40px;" alt="">
                      </li>
                      <li>
                        <label for="form">To</label>
                        <input type="text" name="to" id="form" placeholder="Sydney (YQY)">
                        <img src="img/pin.png" alt="" class="location" width="30">
                      </li>
                    </div>
                    <div class="date">
                      <li>
                        <label for="">departure</label>
                        <input id="departure" type="text" name="departure" class="coustomdate " placeholder="MM/DD/YY" readonly="readonly">
                        <img src="img/calendar (1).png" alt="">
                      </li>
                      <li>
                        <label for="">return</label>
                        <input type="text" id="return" name="return" class="coustomdate " placeholder="MM/DD/YY" readonly="readonly">
                        <img src="img/calendar (1).png" alt="">
                      </li>
                    </div>
                    <div class="ClsPger">
                      <li class="position-relative">
                        <label for="">Passenger</label>
                        <input type="text" name="passender"   placeholder="1 Passenger ">
                        <div class="classAndPassenger classAndPassenger1">
                          <div>
                            <div class="d-flex flex-column">
                              <span>Adult (16-64)</span>
                              <div class="btnsubadd">
                                <span id="subtract">-</span>
                                <span id="numver">1</span>
                                <span id="addition">+</span>
                              </div>
                            </div>
                            <div class="d-flex flex-column">
                              <span>Senior (65+)</span>
                              <div class="btnsubadd">
                                <span id="subtract" class="disable">-</span>
                                <span id="numver">0</span>
                                <span id="addition">+</span>
                              </div>
                            </div>
                            <div class="d-flex flex-column">
                              <span>Child (2-15)</span>
                              <div class="btnsubadd">
                                <span id="subtract" class="disable">-</span>
                                <span id="numver">0</span>
                                <span id="addition">+</span>
                              </div>
                            </div>
                            <div class="d-flex flex-column">
                              <span>Lap Infant (under 2)</span>
                              <div class="btnsubadd">
                                <span id="subtract" class="disable">-</span>
                                <span id="numver">0</span>
                                <span id="addition">+</span>
                              </div>
                            </div>
                          </div>
                          <span class="btn btn-primary float-right mt-3">Done</span>
                        </div>
                        <img src="img/profile.png" alt="">
                      </li>
                      <li>
                        <label for=""> class</label>
                        <input type="text" list="class" name="class" placeholder="Economy">
                        <datalist id="class">
                          <option value="Economy">Economy</option>
                          <option value="Premium economy"></option>
                          <option value="Business"></option>
                          <option value="Mix"></option>
                        </datalist>
                        <img src="img/microphone.png" alt="">
                      </li>
                    </div>
                    <div class="btn-bottom">
                      <!-- <div class="btn-avdsrc"><a class="btn " href="trainbooking.html"><span>advance search</span></a></div> -->
                      <button class="btn" type="submit">search now</button>
                    </div>
                  </form>
                </div>
                <span class="gt-shape" data-os-animation="zoomIn"></span>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <div class="page-content d-none">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <div class="section-header">
                <h2 class="h2">Popular destinations around the world</h2>
                <div class="section-header__stars mb-3">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star center"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p class="fz-norm mb-0">
                  <em>The best choice of hotels we have</em>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-7.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Saint Peterburg</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Russia</li>
                      <li class="amout">1234 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Saint Peterburg</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-8.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Milan</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Italy</li>
                      <li class="amout">953 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Milan</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-9.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Barselona</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Spain</li>
                      <li class="amout">1234 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Barselona</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-10.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Rio de Janeiro</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Brazil</li>
                      <li class="amout">1976 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Rio de Janeiro</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-11.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Paris</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">England</li>
                      <li class="amout">953 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Paris</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-12.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Barselona</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">France</li>
                      <li class="amout">1976 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Barselona</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-13.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Amsterdam</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Netherlands</li>
                      <li class="amout">1976 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Amsterdam</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-14.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Berlin</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Germany</li>
                      <li class="amout">953 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Berlin</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-hotel w-100 mb-2">
                <div class="card-hotel__img">
                  <img class="img-cover" src="img/hotels/item-15.jpg" alt="#" />
                </div>
                <div class="card-price">
                  <span class="mr-1">from</span>
                  <span class="count text-secondary">300$</span>
                </div>
                <div class="card-hotel__bottom">
                  <h4 class="h4 mb-1">Budapest</h4>
                  <div class="card-hotel__local d-flex align-items-center">
                    <i class="icon icon-label text-secondary mr-1"></i>
                    <ul class="d-inline-flex flex-wrap">
                      <li class="mr-4">Hungary</li>
                      <li class="amout">1976 Hotels </li>
                    </ul>
                  </div>
                </div>
                <div class="card-hover">
                  <h3 class="h3 text-uppercase">Budapest</h3>
                  <a class="btn btn-light btn--round card-hover__view" href="category.html">VIEW</a>
                </div>
              </div>
            </div>
            <div class="col-12 page-section__more text-center">
              <button class="btn btn-secondary btn--round btn-load" type="button">Show more <i class="fa fa-spin"></i>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <div class="section-header">
                <h2 class="h2">The opportunities we provide</h2>
                <div class="section-header__stars mb-3">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star center"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p class="fz-norm mb-0">
                  <em>Explore the features and benefits of our service</em>
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Handpicked Hotels</h4>
                </div>
                <div class="card-body">
                  <p>All hotels on our website are tested according to various criteria. You can be sure of your choice.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Detailed Descriptions</h4>
                </div>
                <div class="card-body">
                  <p>In order for you to have the most complete idea about the hotel, we try to collect the most complete and detailed description.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Best Price Guarantee</h4>
                </div>
                <div class="card-body">
                  <p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Secure Booking</h4>
                </div>
                <div class="card-body">
                  <p>Book hotels with us easily and safely. All data on your credit card is encrypted and secure. You can be calm for your means.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Better service</h4>
                </div>
                <div class="card-body">
                  <p>Our specialists visit various hotels to personally assess their quality and provide you with a detailed review.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
              <div class="card card-service w-100 mb-2">
                <div class="card-header">
                  <h4 class="h4">Any Questions?</h4>
                </div>
                <div class="card-body">
                  <p>Call us at 8-800-2000-6000 and we will answer your questions, help you find a hotel and make a reservation. Working 24/7</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button">
          <i class="fa fa-angle-up"></i>
        </button>
      </div>
    </main>
    <!-- Why to Book with Call Center start -->
    <section class="whycall">
      <div class="container">
        <p class="text-center ">
          <img src="./img/phone-call.png" width="50" alt=""> Call us at <a href="">1-646-738-4952 </a> from 8 AM - 2 AM EST to get great deals!
        </p>
        <div class="callwrap">
          <h3>Why to Book with Call Center</h3>
          <div class="row">
            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="contentwrap">
                <div>
                  <img src="img/call-center-agent.png" alt="">
                </div>
                <div class="textarea">
                  <p>Expert guidance by our</p>
                  <h4>Travel experts</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="contentwrap">
                <div>
                  <img src="img/customer.png" alt="">
                </div>
                <div class="textarea">
                  <p>Immediate</p>
                  <h4>booking confirmation </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="contentwrap">
                <div>
                  <img src="img/24-hours-support.png" alt="">
                </div>
                <div class="textarea">
                  <p>24-hour </p>
                  <h4>cancellation</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="contentwrap">
                <div>
                  <img src="img/operation.png" alt="">
                </div>
                <div class="textarea">
                  <p>plans</p>
                  <h4>Flexible payment</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why to Book with Call Center end -->

    <!-- today,s best deals start from here -->
    <section class="d-none">
      <div class="todayDeals">
        <h2>Today’s Top Deals</h2>
        <div class="container">
          <div class="dealImg">
            <div class="chot">
              <a href="">
                <img src="img/img1.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="middle">
              <a href="">
                <img src="img/img2.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="chot">
              <a href="">
                <img src="img/img3.jpg" alt="">
                <span class="todytext ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="middle">
              <a href="">
                <img src="img/img4.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="chot">
              <a href="">
                <img src="img/img5.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="big">
              <a href="">
                <img src="img/blog/3.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="middle">
              <a href="">
                <img src="img/blog/5.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
            <div class="big">
              <a href="">
                <img src="img/intro/item-5.jpg" alt="">
                <span class="todytext  ">
                  <p>Lorem ipsum dolor sit amet consectetur </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- today,s best deals end here -->
    <!-- location picture section start  -->
    <section class="locationPic">
      <div class="container">
        <h3>Your top daily deals!</h3>
        <p>Fly from <strong>Coxs Bazar</strong> to your favorite cities </p>
        <ul>
          <li>
            <div>
              <img src="img/YVR.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/YYC.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/YVR.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/TLV.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/SYD.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/SJD.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/JFK.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/FCO.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/CDG.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/DEL.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/BKK.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
          <li>
            <div>
              <img src="img/BKK.jpg" alt="">
            </div>
            <div class="locatinImg">
              <p>Vancouver <span>Canada</span>
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- location picture section end -->
    <section class="domain">
      <div class="container">
        <h2> ticketifly </h2>
        <div class="row">
          <div class="col-lg-7 col-12 pilot">
            <div class="grid">
              <a href="" class="chot">
                <img src="img/d1.jpeg" alt="">
                <span class="todytext  ">
                  <p>Philippine Airlines Flight Sale to the PHILIPPINES </p>
                  <span class="btnarea">
                    <p>
                      <span>from</span>
                      <br> $200 t/r
                    </p>
                    <button class="">view</button>
                  </span>
                </span>
              </a>
              <a href="" class="big">
                <img src="img/d2.jpeg" alt="">
                <span class="todytext  ">
                  <p>Philippine Airlines Flight Sale to the PHILIPPINES </p>
                  <span class="btnarea">
                    <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button>
                  </span>
                </span>
              </a>
              <a href="" class="chot">
                <img src="img/d3.jpeg" alt="">
                <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span>
              </a>
            </div>
            <div class="grid">
              <a href="" class="chot"> <img src="img/pilot1.jpg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> <a href="" class="big"> <img src="img/pilot2.jpg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> <a href="" class="chot"> <img src="img/d3.jpeg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> 
            </div> <div class="grid"> <a href="" class="chot"> <img src="img/pilot5.jpg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> <a href="" class="big"> <img src="img/pilot4.jpg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> <a href="" class="chot"> <img src="img/pilot2.jpg" alt=""> <span class="todytext  "> <p>Philippine Airlines Flight Sale to the PHILIPPINES </p> <span class="btnarea"> <p> <span>from</span> <br> $200 t/r  </p> <button class="">view</button> </span> </span> </a> </div> 
          </div> <div class="col-lg-5 sidebararea col-12"> <h4>Our customers saved this week:</h4> <div class="vertical"> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/download (24).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/download (22).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/download (23).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/images (7).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/images (8).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/images (9).jpg" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> <div class="contentwraper"> <div class="leftside"> <div> <img src="img/2438080.png" alt=""> </div> <p> Washington - Frankfurt  <br> <span>United Airlines</span> </p> </div> <div class="rightside"> $300 </div> </div> </div> <div class="addImg text-center mt-2"> <img src="img/17163887668899238562.jpg" class="img-fluid" alt=""> </div> </div> 
        </div> 
      </div> 
    </section> 
    <!-- Get Instant FREE access to unpublished hand-picked deals! --> 
    <!-- your bast email enter section start from here --> 
    <!-- your bast email enter section end  here --> 
    
       <section>
        <div class="filterLocation">
           <h2>Top Round-Trip Flight Deals</h2>
           <div class="container">
              <div class="btnlist">
                 <li data-filter="all" class="active">All</li>
                 <li data-filter="NorthAmerica">North America</li>
                 <li data-filter="Asia"> Asia</li>
                 <li data-filter="Africa"> Africa</li>
                 <li data-filter="Europe"> Europe</li>
                 <li data-filter="mena"> Middle East & North Africa</li>
                 <li data-filter="LatinAmerica"> Latin America</li>
                 <li data-filter="Oceania"> Oceania</li>
                 <li data-filter="IndiaISC"> India & ISC</li>
              </div>
              <div class="filterItem">
                 <div class="item-wrap NorthAmerica Africa">
                    <a class="slide-item slide1 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap Africa Asia">
                    <a class="slide-item slide2 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap Asia">
                    <a class="slide-item slide3 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap Asia">
                    <a class="slide-item slide4 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap Asia">
                    <a class="slide-item slide5 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap NorthAmerica Africa">
                    <a class="slide-item slide6 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap Asia">
                    <a class="slide-item slide7 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap NorthAmerica Africa">
                    <a class="slide-item slide8 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap NorthAmerica">
                    <a class="slide-item slide9 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
                 <div class="item-wrap NorthAmerica">
                    <a class="slide-item slide10 ">
                       <div class="innerTe">
                          <h5>Miami  </br> United States  </h5>
                          <p>from</p>
                          <span>$199 r/t</span> 
                       </div>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </section>
    <!-- search area  --> 
    <div class=" scerch_container">
      <form action="" method="post">
         <div class="formcontent">
            <div class="row justify-content-between">
               <div class="col">
                  <ul>
                     <li> <input type="radio" name="radio" id="Round-Trip"> <label for="Round-Trip">Round-Trip</label> </li>
                     <li> <input type="radio" name="radio" id="One-Way"> <label for="One-Way">One-Way</label> </li>
                     <li> <a href="">Multi-City Flights</a> </li>
                  </ul>
               </div>
               <div class="col">
                  <span>Cabin Class:</span> 
                  <select name="cabin" id="">
                     <option value="">Economy</option>
                     <option value="premium-economy">Premium Economy</option>
                     <option value="business">Business</option>
                  </select>
               </div>
            </div>
            <div class="row btmbox ">
               <div class="distination">
                  <li> <input type="text" name="" placeholder="Depart Form"> <img src="img/airplane-flight.png" alt=""> </li>
                  <div> <img src="img/transfer.png" alt=""> </div>
                  <li> <input type="text" name="" placeholder="Arrive at"> <img src="img/landing.png" alt=""> </li>
               </div>
               <div class="date">
                  <li> <input type="datetime-local" name="" id="coustomdate" placeholder="Departure date"> <img src="img/calendar.png" alt=""> </li>
                  <li> <input type="datetime-local" name="" id="coustomdate" placeholder="Return date"> <img src="img/calendar.png" alt=""> </li>
               </div>
               <div class="passenger sicon">
                  <input type="number" class="invisible d-none " value=""> 
                  <li> <samp>1passenger</samp> <span> <img src="img/down-arrow.png" style="width: 15px;" alt=""> </span> </li>
                  <div class="addpsgerwraper">
                     <div class="passengerAdd">
                        <div>Adults  <samp class="text-muted fs-6">(over 18)</samp> </div>
                        <div class="allbtn"> <button onclick="sumtractS(this)" type="button" class="btnwhite"> <img src="img/minus-sign.png" alt=""> </button> <span class="bgGray">1</span> <button onclick="additionS(this)" type="button" class="btnwhite"> <img src="img/add.png" alt=""> </button> </div>
                     </div>
                     <div class="passengerAdd">
                        <div>Children  <samp class="text-muted fs-6">(under 18)</samp> </div>
                        <div class="allbtn"> <button onclick="sumtract1S(this)" type="button" class="btnwhite"> <img src="img/minus-sign.png" alt=""> </button> <span class="bgGray">0</span> <button onclick="additionS(this)" type="button" class="btnwhite"> <img src="img/add.png" alt=""> </button> </div>
                     </div>
                     <div class="passengerAdd">
                        <div>Infants  <samp class="text-muted fs-6">(under 3)</samp> </div>
                        <div class="allbtn"> <button onclick="sumtract1S(this)" type="button" class="btnwhite"> <img src="img/minus-sign.png" alt=""> </button> <span class="bgGray">0</span> <button onclick="additionS(this)" type="button" class="btnwhite"> <img src="img/add.png" alt=""> </button> </div>
                     </div>
                     <button type="button" class="ok btn btn-primary">Ok</button> 
                  </div>
               </div>
            </div>
            <div class="formbtn"> <button type="submit" class="btn btn-primary"> Search Flights </button> </div>
         </div>
      </form>
   </div>
<section class="savemoney text-center">
   <div class="container">
      <h4 class="headertitle">Save Money & Time with Ticketifly Tickets</h4>
      <p class="subheading">As one of the US leading travel agencies, we are 100% devoted to make sure your flight booking experience is worried-free. Whether you’re going on holiday, taking a business trip, or go home to your loved ones, ASAP Tickets is here to help you travel the world with the most affordable airfares. With our easy-to-use website along with 24/7 customer services, getting a FREE quote couldn’t be simpler. Remember, we are only one-call away and you are only one step away from your dream destination.</p>
      <div class="box-grid">
         <div>
            <h3>1700+</h3>
            <h4>Live Agents</h4>
            <p>speak 20+ languages worldwide</p>
         </div>
         <div>
            <h3>800,000+</h3>
            <h4>Flights Booked</h4>
            <p>with avg $287 savings per ticket</p>
         </div>
         <div>
            <h3>120,000+</h3>
            <h4>People Every Month</h4>
            <p>request new flight quotes</p>
         </div>
         <div>
            <h3>175,000+</h3>
            <h4>Happy Return Clients</h4>
            <p>with highest 5-star reviews</p>
         </div>
         <div>
            <h3>1700+</h3>
            <h4>Live Agents</h4>
            <p>speak 20+ languages worldwide</p>
         </div>
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>