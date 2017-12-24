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
        <img src="assets/img/logo-black.png" alt="logo"/>
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
            <li><a href="#">My Orders</a></li>
            <li><a href="#">My Favorites</a></li>
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
            <div class="cart-details collapse" id="cart">
              <div class="cart-title">Your Cart</div>
              <div class="cart-date">Wednesday July 12, 2017</div>
              <div class="cart-item"></div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</header>
