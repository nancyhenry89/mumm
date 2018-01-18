<?php require_once('personal-header.php'); ?>
<!-- rating popup start-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rating-popup">
Rating popup viewer
</button>
<!-- Modal -->
<div class="modal fade" id="rating-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body rating-popup">
            <h2>Thanks for using Mumm</h2>
            <p class="note">Kindly note you last order to proceed, rating your order helps us maintain the quality of the meals offered by our chefs</p>
            <div class="row rate-plate">
               <div class="col-md-5">
                  <div class="rate-plate-img">
                     <img src="assets/img/sample1.png"/>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="rate-dish-owner">
                     <div class="rate-dish-owner-img">
                        <img src="assets/img/ppl1.png"/>
                     </div>
                     <div class="rate-dish-owner-name">Manal's Kitchen Order</div>
                  </div>
                  <div class="rate-dish-title">Paleo Grilled Chicken Bowl</div>
                  <div class="star-rating">
                       <div class="star-rating__wrap">
                         <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                         <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                         <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                         <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                         <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                         <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                         <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                         <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                         <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                         <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                       </div>
                     </div>
               </div>
            </div>
          
            <div class="rating-comment">
               <textarea placeholder="Add a Comment"></textarea>
               <button type="button" class="btn btn-primary">Submit</button>
            </div>
            <div class="popup-done">
               <button type="button" class="btn btn-primary">Done</button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- Rating popup end-->
<div class="container faq">
   <div class="row">
      <div class="col-md-8">
         <div class=" faq-header">
            <div class="bread-crumb">
               <a href="#">Home</a>
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <a href="#">FAQ</a>
            </div>
            <h2>Frequently Asked Question</h2>
         </div>
         <div class="">
            <div class="row faq-content">
               <div class="col-md-12">
                  <ul class="nav nav-tabs">
                     <li class="active"><a data-toggle="tab" href="#Food">Food</a></li>
                     <li><a data-toggle="tab" href="#Cooks">Cooks</a></li>
                     <li><a data-toggle="tab" href="#Payment">Payment</a></li>
                     <li><a data-toggle="tab" href="#Account">Account</a></li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <div class="tab-content">
                     <div id="Food" class="tab-pane fade in active">
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                     </div>
                     <div id="Cooks" class="tab-pane fade">
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                     </div>
                     <div id="Payment" class="tab-pane fade">
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                     </div>
                     <div id="Account" class="tab-pane fade">
                        <div class="faq-item">
                           <div class="question">How long can I leave food out of the refrigerator?</div>
                           <div class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="contact">
            <p>Your Question is not here?</p>
            <button class="btn btn-primary">Contact us</button>
         </div>
      </div>
   </div>
</div>
<?php require_once('footer.php');?>
