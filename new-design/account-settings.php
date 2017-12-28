<?php require_once('header.php'); ?>
    <div class="container account-settings">
    <h2>Account Settings</h2>
    <h3>Profile</h3>
    <div class="row form profile">
            <div class="col-md-6">
                <label>First name</label>
                <input name="first-name"/>
            </div>
            <div class="col-md-6">
                <label>Last name</label>
                <input name="last-name"/>
            </div>
            <div class="col-md-12">
                <label>E-mail address</label>
                <input name="email"/>
            </div>
            <div class="col-md-12">
                <label>Phone no.</label>
                <input name="phone"/>
            </div>
            <div class="col-md-12">
                <label>Company name</label>
                <input name="company-name"/>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary">Update Profile</button>
            </div>
        </div>
    <h3>Password</h3>
    <div class="row form password">
            <div class="col-md-12">
                <label>Current password</label>
                <input name="company-name"/>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="col-md-12">
                <label>New password</label>
                <input name="company-name"/>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="col-md-12">
                <label>Re-enter new password</label>
                <input name="company-name"/>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary">Change Password</button>
            </div>
    </div>
    <h3>Account balance</h3>
    <div class="row account-balance">
        <div class="col-md-12 info">
            <label>Available</label>
            <div class="time">from 1 July, 2017 till 21 July, 2017</div>
        </div>
        <div class="col-md-12">
            <div class="amount">
                <div class="currency">EGP</div>
                <div class="remaining">873</div>
                <div class="total">From EGP 1,000</div>
            </div>
        </div>
    </div>
    <h3>Settings</h3>
    <div class="row settings">
        <div class="checkbox">
        <input type="checkbox" value="">
        <label>
        <span>Notify me every</span>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Week
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Week</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Month</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Day</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Year</a></li>
            </ul>
        </div>
        <span>with my upcoming favorites</span>
        </label>
        </div>
        <div class="checkbox">
        <input type="checkbox" value="">
        <label>
        <span>Receive reminder email in the</span>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> AM - 11 AM
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">9 AM - 11 AM</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10 AM - 12 AM</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">9 AM - 11 AM</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">9 AM - 11 AM</a></li>
            </ul>
        </div>
        </label>
        </div>
        <div class="checkbox">
        <input type="checkbox">
        <label>Receive special offers / event emails</label>
        </div>
    </div>
  </div>
<?php require_once('footer.php');?>
