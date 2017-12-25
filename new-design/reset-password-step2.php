<?php require_once('header-login.php'); ?>
    <div class="container reset-password">
  <div class="text-center">Reset password for <span id="user-email"><b>d.stevenson@gmail.com</b></span></div>
      <div class="form row">
        <div class="col-md-12">
            <label>New password</label>
            <input name="password" type="password"/>
            <i class="fa fa-eye" aria-hidden="true"></i>
        </div>
        <div class="col-md-12">
            <label>Re-Enter new password</label>
            <input name="password" type="password"/>
            <i class="fa fa-eye" aria-hidden="true"></i>
        </div>
      <div class="col-md-12">
          <button class="btn btn-primary full-width">Update Password</button>
      </div>
      </div>
  </div>

<?php require_once('footer.php');?>
