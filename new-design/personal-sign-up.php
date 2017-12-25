<?php require_once('header-login.php'); ?>
    <div class="container sign-up">
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
          <h4 class="sp">Welcome to mumm!</h4>
          <div>Join and enjoy your Mumm</div>
          <div class="row form">
            <div class="col-md-12">
                <label>First name</label>
                <input name="first-name"/>
            </div>
            <div class="col-md-12">
                <label>Last name</label>
                <input name="last-name"/>
            </div>
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
                <label>Retype password</label>
                <input name="password" type="password"/>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary full-width">Sign Up</button>
            </div>
            <div class="col-md-12 text-center">
                <span>Already have an account?</span>
                <a href="personal-sign-in.php" class="link sp">Login here</a>
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
