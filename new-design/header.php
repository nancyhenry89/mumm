<html>
<head>
  <title>Mumm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Muli|Titillium+Web" rel="stylesheet">  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 logo">
        <a href="landing.php"><img src="assets/img/logo-black.png" alt="logo"/></a>
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary">Schedule Order</button>
      </div>
      <div class="col-md-2">
        <div class="account-info">
          <div class="name">Mohamed Ahmed</div>
          <div class="balance">
            <label>Available Balance</label>
            <span>EGP 873</span>
          </div>
        </div>
        <div class="expand-account">
            <button type="button" class="btn" data-toggle="collapse" data-target="#my-account">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
          <div class="my-account-list collapse" id="my-account">
          <ul>
            <li><a href="my-orders.php">My Orders</a></li>
            <li><a href="my-favorites.php">My Favorites</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-md-1">
        <div class="cart">
          <div class="expand-cart">
              <button type="button" class="btn" data-toggle="collapse" data-target="#cart">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="cart-count">2</span>
              </button>
            <div class="cart-details order-summary collapse" id="cart">
              <div class="cart-title">Your Cart</div>
              <div class="cart-info">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <div class="cart-info-title">You have 2 orders in your cart!</div>
                <div class="cart-info-detail">Each order will be delivered separatly, with separate delivery fees!</div>
              </div>
                 <div class="order-item">
                    <div class="cook">
                       <img src="assets/img/ppl1.png"/>
                       <div class="cook-name">Manal’s Kitchen Order</div>
                       <a class="link">Remove order</a>
                    </div>
                    <div class="cook-item cart-item">
                       <div class="col-md-3 dish-quantity">
                          <a href="#" class="minus">-</a>
                          <label class="quantity-number"/>1</label>
                          <a href="#" class="plus">+</a>
                       </div>
                       <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
                       <div class="col-md-2 dish-price">
                          <div class="currency">EGP</div>
                          <div class="number">95</div>
                       </div>
                       <div class="col-md-1 remove-item"><a href="#">x</a></div>
                    </div>
                    <div class="cook-item cart-item">
                       <div class="col-md-3 dish-quantity">
                          <a href="#" class="minus">-</a>
                          <label class="quantity-number"/>1</label>
                          <a href="#" class="plus">+</a>
                       </div>
                       <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
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
                    <div class="cook-item cart-item">
                       <div class="col-md-3 dish-quantity">
                          <a href="#" class="minus">-</a>
                          <label class="quantity-number"/>1</label>
                          <a href="#" class="plus">+</a>
                       </div>
                       <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
                       <div class="col-md-2 dish-price">
                          <div class="currency">EGP</div>
                          <div class="number">95</div>
                       </div>
                       <div class="col-md-1 remove-item"><a href="#">x</a></div>
                    </div>
                    <div class="cook-item cart-item">
                       <div class="col-md-3 dish-quantity">
                          <a href="#" class="minus">-</a>
                          <label class="quantity-number"/>1</label>
                          <a href="#" class="plus">+</a>
                       </div>
                       <div class="col-md-6 dish-name">Paleo Grilled Chicken Bowl</div>
                       <div class="col-md-2 dish-price">
                          <div class="currency">EGP</div>
                          <div class="number">95</div>
                       </div>
                       <div class="col-md-1 remove-item"><a href="#">x</a></div>
                    </div>
                    <div class="price-cook">
                       <div class="item">
                          <div class="description">Subtotal</div>
                          <div class="price">
                             <div class="currency">EGP</div>
                             <div class="number">70</div>
                          </div>
                       </div>
                       <div class="item">
                          <div class="description">First Kitchen delivery fees</div>
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
                    <div class="cart-checkout">
                      <button class="btn btn-primary">Continue to checkout</button>
                    </div>
                 </div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</header>
