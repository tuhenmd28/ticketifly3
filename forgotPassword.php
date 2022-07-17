<?php include 'header.php'; ?>
    <section class="signinbanner">
        <div class="formContent">
            <h1>forgot password</h1>
            <form   action="#" method="POST"  >
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required="">
                  </div>
                  <p class="text-center">We will email you instructions for resetting your password.</p>
                  <p class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Retrieve Password </button>
                  </p>
                  <p class="d-flex justify-content-center">
                    <a class=" mr-3" href="signup.php" data-account="regist">Create a new account</a>
                    <a class="" href="login.php" data-account="login">Return to Sign In</a>
                  </p>
                </form>
        </div>
    </section>
    
<?php include "footer.php" ;?>