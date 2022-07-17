<?php include 'header.php'; ?>
    <section class="signinbanner">
        <div class="formContent">
            <h1>login</h1>
        <form  action="#" method="get" >
                  <div class="form-group ">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="password" name="user_pass" placeholder="Password" required="required">
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <button class="btn btn-primary  mr-2 mb-2 " type="submit">Login in </button>
                    <p class="mb-2">
                      <a class="" href="forgotPassword.php" data-account="forgot">Forgot your password?</a>
                    </p>
                  </div>
                  <div class="d-inline-block my-2 w-100">
                    <div class="social-sign">
                      <div class="divider divider-horizontal">
                        <h5 class="font-weight-normal mx-2">Or click to login</h5>
                      </div>
                      <ul class="social-sign__list row">
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/facebook.png" alt="#">
                            <span class="nav-text">Connect with Facebook</span>
                          </a>
                        </li>
                        <li class="col col-sm-6">
                          <a class="nav-link" href="#">
                            <img class="nav-icon img-fluid mr-2" src="img/google-plus.png" alt="#">
                            <span class="nav-text">Connect with Google</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </form>
        </div>
    </section>
    
<?php include "footer.php" ;?>