<?php include "header.php"  ?>
<!-- 
*****************************************************************
                        1 banner section start
*****************************************************************
 -->
<section class="groupTravelBanner bread bannerSection">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cheap Flight Tickets</li>
          </ol>
       </nav>
        <div class="row">
       <div class="col-lg-6 mb-0 mb-lg-5 mt-lg-5">
        <div class="gtleftsite">
            <div class="lerttext">
                <h4>Group Travel</h4>
                <p>ASAP Tickets appreciate the opportunity to handle all large and small group travel inquiries. Our successful cooperation with 50 partner airlines, and over 200 of the world’s most reputable airlines allows us to offer our clients some of the best Economy, Premium Economy, Business and First class group travel deals in the industry.</p>
                <p>With ASAP Tickets you need only 5 people traveling together to qualify for group travel discount.</p>
            </div>
        </div>
       </div>
 <div class="col-lg-6 mb-0 mb-lg-5 mt-lg-5 mcform">
    <div>
        <h1>Get Your Free Quote Now </h1>
        <h6>Just complete the <strong>Free</strong> <strong>Quote Form</strong> or <strong>Call Us 24/7 Toll-Free</strong> to get our exclusive low fares unavailable online and phone-only deals.&nbsp;</h6>
        <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Round-Trip</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1"> One-Way</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-toggle="tab" href="#menu2">Multi-City Flights</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div id="home" class="container tab-pane active">
    <form method="get" action=" #" class="formClass text-left" >
      <input type="hidden" name="" value="round-trip">
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
        <li>
          <label for="">Passenger</label>
          <input type="text" name="passender" list="passenger" placeholder="1 ADULT + 2CHILD">
          <datalist id="passenger">
            <option selected value="1 ADULT + 2CHILD">1 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 1 CHILD">1 ADULT + 1 CHILD</option>
            <option value="2 ADULT + 1 CHILD">2 ADULT + 1 CHILD</option>
            <option value="3 ADULT + 1 CHILD">3 ADULT + 1 CHILD</option>
            <option value="4 ADULT + 1 CHILD">4 ADULT + 1 CHILD</option>
            <option value="5 ADULT + 1 CHILD">5 ADULT + 1 CHILD</option>
            <option value="6 ADULT + 1 CHILD">6 ADULT + 1 CHILD</option>
            <option value="7 ADULT + 1 CHILD">7 ADULT + 1 CHILD</option>
            <option value="8 ADULT + 1 CHILD">8 ADULT + 1 CHILD</option>
            <option value="9 ADULT + 0 CHILD">9 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 2 CHILD</option>
            <option value="1 ADULT + 3 CHILD">1 ADULT + 3 CHILD</option>
            <option value="1 ADULT + 4 CHILD">1 ADULT + 4 CHILD</option>
            <option value="1 ADULT + 5 CHILD">1 ADULT + 5 CHILD</option>
            <option value="1 ADULT + 6 CHILD">1 ADULT + 6 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 7 CHILD</option>
          </datalist>
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
        <button class="btn" type="submit">GET A FREE QUOTE</button>
      </div>
      <p>By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be contacted for travel information via phone, text messages and email. No purchase necessary. We respect your <a href="#">privacy</a>.</p>
      <a href="#howItWorkModal" class="d-dlock text-center w-100" data-toggle="modal" >How it Works?</a>
    </form>
  </div>
  <div id="menu1" class="container tab-pane fade">
    <form method="get" action=" #" class="formClass" >
      <input type="hidden" name="" value="one-way">
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
          <input type="text" id="return" name="return" style="background:gray ;" class="coustomdate " placeholder="MM/DD/YY" readonly disabled>
          <img src="img/calendar (1).png" alt="">
        </li>
      </div>
      <div class="ClsPger">
        <li>
          <label for="">Passenger</label>
          <input type="text" name="passender" list="passenger" placeholder="1 ADULT + 2CHILD">
          <datalist id="passenger">
            <option selected value="1 ADULT + 2CHILD">1 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 1 CHILD">1 ADULT + 1 CHILD</option>
            <option value="2 ADULT + 1 CHILD">2 ADULT + 1 CHILD</option>
            <option value="3 ADULT + 1 CHILD">3 ADULT + 1 CHILD</option>
            <option value="4 ADULT + 1 CHILD">4 ADULT + 1 CHILD</option>
            <option value="5 ADULT + 1 CHILD">5 ADULT + 1 CHILD</option>
            <option value="6 ADULT + 1 CHILD">6 ADULT + 1 CHILD</option>
            <option value="7 ADULT + 1 CHILD">7 ADULT + 1 CHILD</option>
            <option value="8 ADULT + 1 CHILD">8 ADULT + 1 CHILD</option>
            <option value="9 ADULT + 0 CHILD">9 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 2 CHILD</option>
            <option value="1 ADULT + 3 CHILD">1 ADULT + 3 CHILD</option>
            <option value="1 ADULT + 4 CHILD">1 ADULT + 4 CHILD</option>
            <option value="1 ADULT + 5 CHILD">1 ADULT + 5 CHILD</option>
            <option value="1 ADULT + 6 CHILD">1 ADULT + 6 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 7 CHILD</option>
          </datalist>
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
        <button class="btn" type="submit">GET A FREE QUOTE</button>
      </div>
      <p>By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be contacted for travel information via phone, text messages and email. No purchase necessary. We respect your <a href="#">privacy</a>.</p>
      <a href="#howItWorkModal" class="d-dlock text-center w-100" data-toggle="modal" >How it Works?</a>
    </form>
  </div>
  <div id="menu2" class="container tab-pane fade  ">
    <form method="get" action=" #" >
      <input type="hidden" value="multi-city">
      <ol id="dublicate">
        <li >
          <div>
            <p>
              <input type="text" name="from" id="form" placeholder="From">
            </p>
            <p>
              <input type="text" name="to" id="form" placeholder="To">
            </p>
            <p>
              <input id="departure" type="text" name="Date" class="coustomdate " placeholder="Date" >
            </p>
          </div>
          <button class="remove"><img src="img/times.png" width="20px" alt=""></button>
        </li>
        <li >
          <div>
            <p>
              <input type="text" name="from" id="form" placeholder="From">
            </p>
            <p>
              <input type="text" name="to" id="form" placeholder="To">
            </p>
            <p>
              <input id="departure" type="text" name="Date" class="coustomdate " placeholder="Date" >
            </p>
          </div>
          <button class="remove"><img src="img/times.png" width="20px" alt=""></button>
        </li>
      </ol>
      <div class="emailandname">
        <li>
          <input id="email" type="email" name="email" class="coustomdate " placeholder="Email" >
        </li>
        <li>
          <input id="name" type="name" name="name" class="coustomdate " placeholder="Name(optional)" >
        </li>
      </div>
      <div class="pangclsnumsub">
        <li class="w-100">
          <input type="text" name="passenger" list="passenger" placeholder="Passenger">
          <datalist id="passenger">
            <option selected value="1 ADULT + 2CHILD">1 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 1 CHILD">1 ADULT + 1 CHILD</option>
            <option value="2 ADULT + 1 CHILD">2 ADULT + 1 CHILD</option>
            <option value="3 ADULT + 1 CHILD">3 ADULT + 1 CHILD</option>
            <option value="4 ADULT + 1 CHILD">4 ADULT + 1 CHILD</option>
            <option value="5 ADULT + 1 CHILD">5 ADULT + 1 CHILD</option>
            <option value="6 ADULT + 1 CHILD">6 ADULT + 1 CHILD</option>
            <option value="7 ADULT + 1 CHILD">7 ADULT + 1 CHILD</option>
            <option value="8 ADULT + 1 CHILD">8 ADULT + 1 CHILD</option>
            <option value="9 ADULT + 0 CHILD">9 ADULT + 0 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 2 CHILD</option>
            <option value="1 ADULT + 3 CHILD">1 ADULT + 3 CHILD</option>
            <option value="1 ADULT + 4 CHILD">1 ADULT + 4 CHILD</option>
            <option value="1 ADULT + 5 CHILD">1 ADULT + 5 CHILD</option>
            <option value="1 ADULT + 6 CHILD">1 ADULT + 6 CHILD</option>
            <option value="1 ADULT + 2 CHILD">1 ADULT + 7 CHILD</option>
          </datalist>
        </li>
        <li>
          <input type="text" name="number"  placeholder="number">
        </li>
        <li>
          <input type="text" list="class" name="class" placeholder="Economy">
          <datalist id="class">
            <option value="Economy">Economy</option>
            <option value="Premium economy"></option>
            <option value="Business"></option>
            <option value="Mix"></option>
          </datalist>
        </li>
        <li>
          <button id="add" class="btn btn-primary">ADD FLIGHT</button>
        </li>
        <li>
          <button class="btn btn-secondary" type="submit" >GET A FREE QUOTE</button>
        </li>
      </div>
      <p>By providing my contact details and clicking on "GET A FREE QUOTE" I agree to be contacted for travel information via phone, text messages and email. No purchase necessary. We respect your <a href="#">privacy</a>.</p>
      <a href="#howItWorkModal" class="d-dlock text-center w-100" data-toggle="modal" >How it Works?</a>
    </form>
  </div>
</div>
<div class="modal fade" id="howItWorkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content position-relative">
      <div class="modal-body m-0 p-0">
        <div class="row m-0 p-00">
          <div class="col-md-6 col-12 m-0 p-0">
            <img src="img/callcenter2.jpg" alt="" class="img-fluid h-100">
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
</div>
        </div>
    </div>
</section>
<!-- 
*****************************************************************
                        1 banner section end
*****************************************************************
 -->
 <!-- 
*****************************************************************
                        2nd section start
*****************************************************************
 -->
 section.
 <!-- 
*****************************************************************
                        2nd section end
*****************************************************************
 -->

<?php include "footer.php"  ?>