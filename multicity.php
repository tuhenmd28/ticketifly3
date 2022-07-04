<?php include 'header.php' ; ?>

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-5 ">
        <div class="p-4">
          <h3>DISCOUNTED</h3>
            <h1>ROUND THE WORLD and <br>
           <p>MULTI-STOP FLIGHTS</p> 
           </h1>
           <div class="row">
            <div class="col">
              <ul>
                <li>Any Airline.</li>
                <li>Amy Route.</li>
                <li>Any budget.</li>
              </ul>
            </div>
            <div class="col">
              <span>FLIGNTS STARTING AT</span>
              <h5><sup>$</sup>755 <sup>*</sup> <samp>total</samp></h5>
            </div>
           </div>
           <h4>Multi-City Flights</h4>
           <p>Nothing can substitute the resources and skills of our Travel Professionals when you plan complex flight. No matter what you call it: Around-the-World, Round-the-World, Multi-Stop, Multi-Destination or Multi-City travel, only live travel experts can tailor routes of any complexity and get the best price for your airfare.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-5">
        <div>

          <form method="get" action=" #" >
              <div class="radiobtn">
                <ul>
                    <!-- <li>
                      <input type="radio" name="radio" value="Round-Trip" id="Round-Trip">
                      <label for="Round-Trip">Round-Trip</label>
                    </li>
                    <li>
                      <input type="radio" name="radio" value="One-Way" id="One-Way">
                      <label for="One-Way">One-Way</label>
                    </li> -->
                    <li>
                      <a  href="#multicity.php" class="multicity">Multi-City Flights</a>
                    </li>
                </ul>
              </div>
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
                  <button class="remove"></button>
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
            <p>
            Get multiple price quotes within minutes. No purchase necessary. By providing contact details and clicking on “GET A FREE QUOTE” you agree to be contacted for travel information via automated phone and text messages and by email.  Your consent to receive such messages is not a condition of purchase. We respect your  <a href="#">privacy</a>
            </p>
            <a href="#howItWorkModal" data-toggle="modal" >How it Works?</a>
            </form>
        </div>
          <!-- <button id="add" class="btn btn-primary">Add Area</button> -->
      </div>
    </div>
  </div>
</section>

<section class="list">
  <div class="container">
    <div class="row flex-column gy-5">
       <div class="col-12">
          <h3 class=" header-title">Why Book Multi-city Flights?</h3>
          <ul>
             <li><i class="fa-solid fa-circle-check"></i> Simply because you LOVE traveling</li>
             <li><i class="fa-solid fa-circle-check"></i> It’s an easy and cheap way to travel around the world</li>
             <li><i class="fa-solid fa-circle-check"></i> One multi-city flight is cheaper than multiple one-way tickets</li>
             <li><i class="fa-solid fa-circle-check"></i> You can explore as many destinations as you want</li>
          </ul>
       </div>
       <div class="col-12">
          <h3 class=" header-title">Why Trust Multi-city Flight Booking to Us?</h3>
          <ul>
             <li><i class="fa-solid fa-circle-check"></i> It’s not an easy DIY job</li>
             <li><i class="fa-solid fa-circle-check"></i> We have 20+ years of experience with multi-city flights</li>
             <li><i class="fa-solid fa-circle-check"></i> Our agents know where to find the cheapest tickets</li>
             <li><i class="fa-solid fa-circle-check"></i> We can hold a seat in case you need time to decide</li>
             <li><i class="fa-solid fa-circle-check"></i> Over 1,700 agents are available before, during and after your trip</li>
             <li><i class="fa-solid fa-circle-check"></i> We offer multi-city flights to more than 200 destinations</li>
             <li><i class="fa-solid fa-circle-check"></i> You get a free hotel room for overnight stays</li>
             <li><i class="fa-solid fa-circle-check"></i> We offer Hotel Booking, Transfer and other Services</li>
          </ul>
       </div>
    </div>
  </div>
</section>



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


  
<?php include 'footer.php' ; ?>
   
