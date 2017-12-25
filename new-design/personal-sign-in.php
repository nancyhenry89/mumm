<?php require_once('header-landing.php'); ?>
    <div class="container sign-up sign-in">
      <div class="row">
        <div class="col-md-6">
          <div class="sign-up-banner">
            <img src="assets/img/sign-up.png"/>
            <h3>
              <div>Healthy Home</div>
              <div>cooked goodness,</div>
              <div>delivered fresh</div>
              <div>to your door!</div>
            </h3>
          </div>
        </div>
        <div class="col-md-5 sign-up-content">
          <h4 class="sp">Welcome back!</h4>
          <div>Sign in to your account</div>
          <div class="row form">
            <div class="col-md-12">
                <label>E-mail</label>
                <input name="email"/>
            </div>
            <div class="col-md-12">
                <label>Password</label>
                <input name="password" type="password"/>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="col-md-12">
              <a href="personal-sign-up.php">
                <button class="btn btn-primary full-width">Sign Up</button>
              </a>
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="link sp float">Forgot password?</a>
                <a href="#" class="link sp float-op">Create account</a>
            </div>
            <div class="col-md-12 text-center">
                <div class="sep-or">Or</div>
            </div>
            <div class="col-md-12 social-login">
                <button id="facebook-login" class="btn btn-primary full-width">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <span>Sign in with facebook</span>
                </button>
            </div>
            <div class="col-md-12 social-login">
                <button id="google-login" class="btn btn-primary full-width">
                  <i class="fa fa-google" aria-hidden="true"></i>
                  <span>Sign in with Google</span>
                  </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid plates">
      <div class="plate plate1">
        <img src="assets/img/plate1.png">
      </div>
      <div class="plate plate2">
        <img src="assets/img/plate2.png">
      </div>
        <div class="plate plate3">
        <img src="assets/img/plate3.png">
      </div>
        <div class="plate plate4">
        <img src="assets/img/plate4.png">
      </div>
    <div class="container get-started text-center">
      <div class="row">
        <div class="col-md-12">
          <h5>Love to cook?</h5>
          <div>Join Mumm as a Cook Now!</div>
          <button class="btn btn-primary">GET STARTED</button>
        </div>
      </div>
    </div>
  </div>
<?php require_once('footer.php');?>
