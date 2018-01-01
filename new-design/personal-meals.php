<?php require_once('header.php'); ?>
<div class="container personal-meals">
   <div class="row personal-meals-filters">
      <div class="col-md-8 menu-select">
         <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Single
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone - Horizon</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Orange</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Etisalat</a></li>
            </ul>
         </div>
         <div class="dropdown">
            <label>Dishes in</label>
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Maadi
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
      <div class="col-md-4 menu-select sort">
         <div class="dropdown">
             <label>Sort by</label>
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Latest
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone - Horizon</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Vodafone</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Orange</a></li>
               <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Etisalat</a></li>
            </ul>
         </div>
         <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Filter By
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
   </div>
   <div class="row personal-meals-content">
      <div class="col-md-12 cook-menu">
         <div class="row">
            <div class="col-md-2 info text-center">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cook-img">
                        <img src="assets/img/ppl1.png" alt="cook image"/>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="cook-name">Zeinab's Kitchen</div>
                  </div>
                  <div class="col-md-12">
                     <div class="rating-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="col-md-12 rating-details">
                     <div class="rating-number">4.5</div>
                     <div class="sep"> |</div>
                     <div class="rating-count">
                        100 Users
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-10 menu">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#Main">Main Course</a></li>
                        <li><a data-toggle="tab" href="#Soup">Soup</a></li>
                        <li><a data-toggle="tab" href="#Desserts">Desserts</a></li>
                        <li><a data-toggle="tab" href="#low-cal">Low Cal</a></li>
                     </ul>
                  </div>
                  <div class="col-md-12">
                     <div class="tab-content">
                        <div id="Main" class="tab-pane fade in active">
                           <div class="carousel slide" id="myCarousel">
                              <div class="carousel-inner">
                                 <div class="item active">
                                    <div class="col-md-4 meal-item">
                                       <div class="row">
                                          <div class="col-md-12 fav-img-cont">
                                             <img class="fav-img" src="assets/img/sample1.png" alt="Dish Image"/>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-10">
                                                   <div class="dish-title">Paleo Grilled Chicken Bowl</div>
                                                   <div class="rating">
                                                      <div class="rating-stars">
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star-half" aria-hidden="true"></i>
                                                      </div>
                                                      <div class="rating-number">4.5</div>
                                                   </div>
                                                   <div class="sep">|</div>
                                                   <div class="dish-owner">
                                                      by Manal’s Kitchen
                                                   </div>
                                                </div>
                                                <div class="col-md-2 dish-price">
                                                   <div class="currency">EGP</div>
                                                   <div class="price">95</div>
                                                </div>
                                             </div>
                                             <div class="row dish-desc">
                                                <div class="col-md-10 meals-text">
                                                   This healthy bowl is served chilled and includes grilled and sliced chicken breast, massaged kale, roasted red bell, roasted sweet potato, shredded red cabbage, julienned daikon and tri-color carrots, roasted cauliflower, served with a lemon-tahini dressing.
                                                </div>
                                                <div class="col-md-2 dish-add-btn">
                                                   <button class="btn btn-primary">ADD</button>
                                                </div>
                                             </div>
                                             <div class="row dish-tags">
                                                <div class="col-md-12">
                                                   <div class="tag-item">
                                                      <span class="tag-icon"></span>
                                                      <span class="tag-text">Spicy</span>
                                                   </div>
                                                   <div class="tag-item">
                                                      <span class="tag-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
                                                      <span class="tag-text">Healthy</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="col-md-4 meal-item">
                                       <div class="row">
                                          <div class="col-md-12 fav-img-cont">
                                             <img class="fav-img" src="assets/img/sample1.png" alt="Dish Image"/>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-10">
                                                   <div class="dish-title">Paleo Grilled Chicken Bowl</div>
                                                   <div class="rating">
                                                      <div class="rating-stars">
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star-half" aria-hidden="true"></i>
                                                      </div>
                                                      <div class="rating-number">4.5</div>
                                                   </div>
                                                   <div class="sep">|</div>
                                                   <div class="dish-owner">
                                                      by Manal’s Kitchen
                                                   </div>
                                                </div>
                                                <div class="col-md-2 dish-price">
                                                   <div class="currency">EGP</div>
                                                   <div class="price">95</div>
                                                </div>
                                             </div>
                                             <div class="row dish-desc">
                                                <div class="col-md-10 meals-text">
                                                   This healthy bowl is served chilled and includes grilled and sliced chicken breast, massaged kale, roasted red bell, roasted sweet potato, shredded red cabbage, julienned daikon and tri-color carrots, roasted cauliflower, served with a lemon-tahini dressing.
                                                </div>
                                                <div class="col-md-2 dish-add-btn">
                                                   <button class="btn btn-primary">ADD</button>
                                                </div>
                                             </div>
                                             <div class="row dish-tags">
                                                <div class="col-md-12">
                                                   <div class="tag-item">
                                                      <span class="tag-icon"></span>
                                                      <span class="tag-text">Spicy</span>
                                                   </div>
                                                   <div class="tag-item">
                                                      <span class="tag-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
                                                      <span class="tag-text">Healthy</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="col-md-4 meal-item">
                                       <div class="row">
                                          <div class="col-md-12 fav-img-cont">
                                             <img class="fav-img" src="assets/img/sample1.png" alt="Dish Image"/>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-10">
                                                   <div class="dish-title">Paleo Grilled Chicken Bowl</div>
                                                   <div class="rating">
                                                      <div class="rating-stars">
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star-half" aria-hidden="true"></i>
                                                      </div>
                                                      <div class="rating-number">4.5</div>
                                                   </div>
                                                   <div class="sep">|</div>
                                                   <div class="dish-owner">
                                                      by Manal’s Kitchen
                                                   </div>
                                                </div>
                                                <div class="col-md-2 dish-price">
                                                   <div class="currency">EGP</div>
                                                   <div class="price">95</div>
                                                </div>
                                             </div>
                                             <div class="row dish-desc">
                                                <div class="col-md-10 meals-text">
                                                   This healthy bowl is served chilled and includes grilled and sliced chicken breast, massaged kale, roasted red bell, roasted sweet potato, shredded red cabbage, julienned daikon and tri-color carrots, roasted cauliflower, served with a lemon-tahini dressing.
                                                </div>
                                                <div class="col-md-2 dish-add-btn">
                                                   <button class="btn btn-primary">ADD</button>
                                                </div>
                                             </div>
                                             <div class="row dish-tags">
                                                <div class="col-md-12">
                                                   <div class="tag-item">
                                                      <span class="tag-icon"></span>
                                                      <span class="tag-text">Spicy</span>
                                                   </div>
                                                   <div class="tag-item">
                                                      <span class="tag-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
                                                      <span class="tag-text">Healthy</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="col-md-4 meal-item">
                                       <div class="row">
                                          <div class="col-md-12 fav-img-cont">
                                             <img class="fav-img" src="assets/img/sample2.png" alt="Dish Image"/>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row">
                                                <div class="col-md-10">
                                                   <div class="dish-title">Paleo Grilled Chicken Bowl</div>
                                                   <div class="rating">
                                                      <div class="rating-stars">
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star" aria-hidden="true"></i>
                                                         <i class="fa fa-star-half" aria-hidden="true"></i>
                                                      </div>
                                                      <div class="rating-number">4.5</div>
                                                   </div>
                                                   <div class="sep">|</div>
                                                   <div class="dish-owner">
                                                      by Manal’s Kitchen
                                                   </div>
                                                </div>
                                                <div class="col-md-2 dish-price">
                                                   <div class="currency">EGP</div>
                                                   <div class="price">95</div>
                                                </div>
                                             </div>
                                             <div class="row dish-desc">
                                                <div class="col-md-10 meals-text">
                                                   This healthy bowl is served chilled and includes grilled and sliced chicken breast, massaged kale, roasted red bell, roasted sweet potato, shredded red cabbage, julienned daikon and tri-color carrots, roasted cauliflower, served with a lemon-tahini dressing.
                                                </div>
                                                <div class="col-md-2 dish-add-btn">
                                                   <button class="btn btn-primary">ADD</button>
                                                </div>
                                             </div>
                                             <div class="row dish-tags">
                                                <div class="col-md-12">
                                                   <div class="tag-item">
                                                      <span class="tag-icon"></span>
                                                      <span class="tag-text">Spicy</span>
                                                   </div>
                                                   <div class="tag-item">
                                                      <span class="tag-icon"><i class="fa fa-leaf" aria-hidden="true"></i></span>
                                                      <span class="tag-text">Healthy</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                              <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                           </div>
                        </div>
                        <div id="Soup" class="tab-pane fade">
                           soup
                        </div>
                        <div id="Desserts" class="tab-pane fade">
                           desserts
                        </div>
                        <div id="low-cal" class="tab-pane fade">
                           low
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
<?php require_once('footer.php');?>
