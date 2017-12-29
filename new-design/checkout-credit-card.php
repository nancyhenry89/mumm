<?php require_once('header.php'); ?>
    <div class="container checkout">
      <div class="container checkout-header">
          <div class="row">
            <div class="col-md-12">
              <div class="checkout-steps">
                <div class="step">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <div>Cart</div>
                </div>
                <div class="step">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <div>Information</div>
                </div>
                <div class="step incomplete">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <div>Confirmation</div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <h2>I want my order</h2>
            </div>
            <div class="col-md-12 order-time">
              <button class="btn btn-primary">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <span>in 60 mins</span>
              </button>
              <button class="btn btn-primary selected">
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  <span>LATER</span>
              </button>
            </div>
            <div class="col-md-12 selection">
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">select date
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Week</a></li>
                  </ul>
              </div>
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">select time
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Week</a></li>
                  </ul>
              </div>
            </div>
          </div>
      </div>
      <div class="container checkout-content">
        <div class="col-md-8">
          <div class="row client-info">
            <h2>Your Information</h2>
            <div class="row form profile">
                    <div class="col-md-6">
                        <label>First name</label>
                        <input name="first-name"/>
                    </div>
                    <div class="col-md-6">
                        <label>Last name</label>
                        <input name="last-name"/>
                    </div>
                    <div class="col-md-6">
                        <label>E-mail address</label>
                        <input name="email"/>
                    </div>
                    <div class="col-md-6">
                        <label>Contact number</label>
                        <input name="phone"/>
                    </div>
                    <div class="col-md-6">
                        <label>Gender</label>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Male
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Male</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Female</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Date of Birth</label>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon calendar-icon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="row client-info">
            <h2>Delivery Address</h2>
            <div class="sp">* Required fields</div>
            <div class="row radio">
              <div class="col-md-12">
              <form>
                 <label class="radio-inline">
                   <input type="radio" name="optradio">
                   <i class="fa fa-home" aria-hidden="true"></i>
                   <span>Home</span>
                 </label>
                 <label class="radio-inline">
                   <input type="radio" name="optradio">
                   <i class="fa fa-suitcase" aria-hidden="true"></i>
                   <span>Company</span>
                 </label>
             </form>
             </div>
            </div>
            <div class="row form">
              <div class="col-md-4">
                <label>Name<span class="sp">*</span></label>
                <input name="name"/>
              </div>
              <div class="col-md-4">
                <label>Building number<span class="sp">*</span></label>
                <input name="Building number"/>
              </div>
              <div class="col-md-4">
                <label>Street name<span class="sp">*</span></label>
                <input name="Street name"/>
              </div>
              <div class="col-md-4">
                <label>Area<span class="sp">*</span></label>
                <input name="Area"/>
              </div>
              <div class="col-md-4">
                <label>Floor<span class="sp">*</span></label>
                <input name="Floor"/>
              </div>
              <div class="col-md-4">
                <label>Flat</label>
                <input name="Flat"/>
              </div>
              <div class="col-md-4">
                <label>Landmark</label>
                <input name="name"/>
              </div>
              <div class="col-md-4">
                <label>Extension<span class="sp">*</span></label>
                <input name="Extension"/>
              </div>
            </div>
            <div class="row map">
              <div class="col-md-12">
                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                  <div  id="map-canvas"></div>
              </div>
            </div>
          </div>
            <div class="row payment-details">
              <div class="text-center form">
                <h2>Payment Details</h2>
                <div class="col-md-12 payment-type">
                  <button class="btn btn-primary">
                      <i class="fa fa-check-circle" aria-hidden="true"></i>
                      <span>CASH</span>
                  </button>
                  <button class="btn btn-primary selected">
                      <i class="fa fa-check-circle" aria-hidden="true"></i>
                      <span>CREDIT CARD</span>
                  </button>
                </div>
                <div class="col-md-12">
                    <label>Card number<span class="sp">*</span></label>
                    <input name="Card-number"/>
                </div>
                <div class="col-md-6">
                    <label>Expiry date<span class="sp">*</span></label>
                    <div class="form-group">
                        <div class='input-group date' id='expiry-date'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon calendar-icon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Security code<span class="sp">*</span></label>
                    <input name="security-code"/>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default" id="promo-code" type="button">Add Promotional Code</button>
                </div>
                <div class="col-md-12 payment-summary">
                  <div class="item">
                    <div class="description">First Kitchen fees</div>
                    <div class="price">
                      <div class="currency">EGP</div>
                      <div class="number">70</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="description">First Kitchen fees</div>
                    <div class="price">
                      <div class="currency">EGP</div>
                      <div class="number">70</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 payment-total">
                  <div class="description">Total</div>
                  <div class="price">
                    <div class="currency">EGP</div>
                    <div class="number">160</div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary"  type="button">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <span>Confirm Order</span>
                  </button>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4 order-summary">
          <h3>Order Summary</h3>
          <div class="order-item">
            <div class="cook">
              <img src="assets/img/ppl1.png"/>
              <div class="cook-name">Manal’s Kitchen Order</div>
              <a class="link">Remove order</a>
            </div>
            <div class="cook-item">
              <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
              <div class="col-md-3 dish-quantity">
                <a href="#" class="minus">-</a>
                <label class="quantity-number"/>1</label>
                <a href="#" class="plus">+</a>
              </div>
              <div class="col-md-2 dish-price">
                <div class="currency">EGP</div>
                <div class="number">95</div>
              </div>
              <div class="col-md-1 remove-item"><a href="#">x</a></div>
            </div>
            <div class="cook-item">
              <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
              <div class="col-md-3 dish-quantity">
                <a href="#" class="minus">-</a>
                <label class="quantity-number"/>1</label>
                <a href="#" class="plus">+</a>
              </div>
              <div class="col-md-2 dish-price">
                <div class="currency">EGP</div>
                <div class="number">95</div>
              </div>
              <div class="col-md-1 remove-item"><a href="#">x</a></div>
            </div>
            <div class="price-cook">
              <div class="item">
                <div class="description">First Kitchen fees</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="item">
                <div class="description">First Kitchen fees</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="item">
                <div class="description">14% VAT</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="payment-total">
                <div class="description">Total</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">160</div>
                </div>
              </div>
            </div>
          </div>
          <div class="order-item">
            <div class="cook">
              <img src="assets/img/ppl1.png"/>
              <div class="cook-name">Manal’s Kitchen Order</div>
              <a class="link">Remove order</a>
            </div>
            <div class="cook-item">
              <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
              <div class="col-md-3 dish-quantity">
                <a href="#" class="minus">-</a>
                <label class="quantity-number"/>1</label>
                <a href="#" class="plus">+</a>
              </div>
              <div class="col-md-2 dish-price">
                <div class="currency">EGP</div>
                <div class="number">95</div>
              </div>
              <div class="col-md-1 remove-item"><a href="#">x</a></div>
            </div>
            <div class="cook-item">
              <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
              <div class="col-md-3 dish-quantity">
                <a href="#" class="minus">-</a>
                <label class="quantity-number"/>1</label>
                <a href="#" class="plus">+</a>
              </div>
              <div class="col-md-2 dish-price">
                <div class="currency">EGP</div>
                <div class="number">95</div>
              </div>
              <div class="col-md-1 remove-item"><a href="#">x</a></div>
            </div>
            <div class="price-cook">
              <div class="item">
                <div class="description">First Kitchen fees</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="item">
                <div class="description">First Kitchen fees</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="item">
                <div class="description">14% VAT</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">70</div>
                </div>
              </div>
              <div class="payment-total">
                <div class="description">Total</div>
                <div class="price">
                  <div class="currency">EGP</div>
                  <div class="number">160</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grand-total">
            <div class="payment-total">
              <div class="description">Total</div>
              <div class="price">
                <div class="currency">EGP</div>
                <div class="number">160</div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <div class="questin">Want to add more dishes? </div>
            <div class="link sp">Click here to go back to our menu</div>
          </div>
        </div>
      </div>
    </div>
<?php require_once('footer.php');?>
