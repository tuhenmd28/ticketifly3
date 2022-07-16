<?php include "header.php"  ?>

<!-- How It Works? start -->
<section class="howItworks">
    <div class="container">
        <h1 class="header-title">How It Works?</h1>
        <div class="box-wraper">
            <div class="box">
                <div>
                    <img src="img/mobile-call.png" alt="">
                </div>
                <div>
                <h2>1. GET IN TOUCH WITH AN EXPERT</h2>
                <p>Call us <a  href="tel:+18555079770">855-507-9770</a> or <button >request a free quote</button> via email. Let us know where you’re going.</p>
                </div>
                
            </div>
            <div class="box box-middle">
                <div>
                    <img src="img/message.png" alt="">
                </div>
                <div>
                <h2>2. RECEIVE OPTIONS VIA EMAIL</h2>
                <p>Get detailed itineraries from the Travel Manager within minutes in your inbox. Only reasonable rates and best-matching flights.</p>
                </div>
               
            </div>
            <div class="box ">
                <div>
                    <img src="img/travel-agent.png" alt="">
                </div>
                <div>
                <h2>3. CHOOSE AND TRAVEL</h2>
                <p>Make any adjustments or confirm seat-assignment, pay securely online and receive your e-tickets via email.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works? end -->

<section class="callNumber ">
    <div class="container text-center">
        <p>CALL TO BOOK NOW</p>
        <h1><a href="tel:855-507-9770">855-507-9770</a></h1>
        <a href="#">REQUEST CALLBACK</a>
    </div>
</section>

<section class="verticalform">
<div class="container">
<ul class="nav nav-tabs " role="tablist">
  <li class="nav-item ">
    <a class="nav-link active" data-toggle="tab" href="#home">Round-Trip</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1"> One-Way</a>
  </li>
</ul>
<!-- Tab panes -->

<div class="tab-content">
  <div id="home" class="container tab-pane  active">
    <form method="get" action=" #" class="formClass text-left" >
      <input type="hidden" name="" value="round-trip">
      <div class="formIconTo1">
        <li>
          <input type="text" name="form" id="form" placeholder="FROM">
        </li>
        <li>
          <img class="arrow" src="img/transfer (1).png" style="width:40px;" alt="">
        </li>
        <li>
          <input type="text" name="to" id="form" placeholder="TO">
        </li>
      <!-- </div> -->
      <!-- <div class="date1"> -->
        <li>
          <input id="departure" type="text" name="departure" class="coustomdate " placeholder="DEPARTURE" readonly="readonly">
        </li>
        <li>
          <input type="text" id="return" name="return" class="coustomdate " placeholder="RETURN" readonly="readonly">
        </li>
        <li id="passengerli">
            <span class="total">1 Economy</span>

          <input type="text" name="passender"  >
          <div class="classAndPassenger">
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
                <div class="d-flex flex-column align-content-start">
                    <span>Class</span>
             <input type="text" list="class1"  name="class" placeholder="Economy">
              <datalist id="class1">
                <option value="Economy">Economy</option>
                <option value="Premium economy"></option>
                <option value="Business"></option>
                <option value="Mix"></option>
              </datalist>
                </div>
            </div>
              <span class="btn btn-primary float-right mt-3">Done</span>
          </div>
        </li>
        <button class="btn btn-primary" type="submit">GET A FREE QUOTE</button>
    </div>
    </form>
  </div>
  <div id="menu1" class="container tab-pane fade">
  <form method="get" action=" #" class="formClass text-left" >
      <input type="hidden" name="" value="round-trip">
      <div class="formIconTo1">
        <li>
          <input type="text" name="form" id="form" placeholder="FROM">
        </li>
        <li>
          <img class="arrow" src="img/transfer (1).png" style="width:40px;" alt="">
        </li>
        <li>
          <input type="text" name="to" id="form" placeholder="TO">
        </li>
      <!-- </div> -->
      <!-- <div class="date1"> -->
        <li>
          <input id="departure" type="text" name="departure" class="coustomdate " placeholder="DEPARTURE" readonly="readonly">
        </li>
        <li>
            <input type="text" id="return"  name="return" class="coustomdate " placeholder="RETURN" readonly disabled style="background:#c3bfbf;">
        </li>
        <li id="passengerli">
            <span class="total">1 Economy</span>

          <input type="text" name="passender"  >
          <div class="classAndPassenger">
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
                <div class="d-flex flex-column align-content-start">
                    <span>Class</span>
             <input type="text" list="class1"  name="class" placeholder="Economy">
              <datalist id="class1">
                <option value="Economy">Economy</option>
                <option value="Premium economy"></option>
                <option value="Business"></option>
                <option value="Mix"></option>
              </datalist>
                </div>
            </div>
              <span class="btn btn-primary float-right mt-3">Done</span>
          </div>
        </li>
        <button class="btn btn-primary" type="submit">GET A FREE QUOTE</button>
    </div>
    </form>
  </div>

</div>
<div class="modal fade" id="howItWorkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content position-relative">
      <div class="modal-body m-0 p-0">
        <div class="row m-0 p-00">
          <div class="col-md-6 col-12 m-0 p-0">
          </div>
          <div class="col-md-6 col-12 m-0 p-0">
            <h3>How it Works?</h3>
            <ol>
              <li>Fill in the form or give us a call</li>
              <li>We'll find you the best-priced deal matching your requirements</li>
              <li>Your personal travel agent will get in touch with the offer</li>
              <li>Securely pay online or opt for payment in monthly installments</li>
              <li>Enjoy your trip & our 24/7 live customer suppor</li>
            </ol>
          </div>
        </div>
      </div>
      <button type="button" class="position-absolute" data-dismiss="modal"><img src="img/times.png" width="35px" alt=""></button>
    </div>
  </div>
</div>
</div>
</section>
<?php include "footer.php"  ?>




