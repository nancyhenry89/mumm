<?php require_once('header.php'); ?>
<div class="container-fluid not-available-bg">
    <div class="container meals-not-available meals">
      <h2>Today’s menu</h2>
      <div class="row">
        <div class="col-md-2 today-date">
            <label>TODAY’S DATE</label>
            <div>Thursday, July 13</div>
        </div>
        <div class="col-md-2 location">
            <label>Location</label>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Vodafone - Horizon
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone - Horizon</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Orange</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Etisalat</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 sort">
            <label>Sort Dishes</label>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">All Dishes
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">All Dishes</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Popular Dishes</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Healthy</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Spicy</a></li>
                </ul>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <img class="sad" src="assets/img/sad.png"/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 note">
          There is no menu available for this day!
        </div>
      </div>
      <div class="row pick-day">
        <div class="col-md-12">
          <label>Pick another day</label>
          <div class="row">
              <div class='col-sm-6'>
                  <div class="form-group">
                      <div class='input-group date' id='datetimepicker1'>
                          <input type='text' class="form-control" />
                          <span class="input-group-addon calendar-icon">
                              <span class="glyphicon glyphicon-calendar"></span>
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                          </span>

                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
  </div>
  </div>
<?php require_once('footer.php');?>
