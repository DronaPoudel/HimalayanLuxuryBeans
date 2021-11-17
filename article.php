<?php include('./partials/nav.php') ?>

<section class="blog container my-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class = "py-4 h3">Why altitude matters ?</h3>
            <img class = "img-fluid" src="./assets/articleimg.png" alt="">
            <p class="py-3">Altitude does make a difference.</p>
            <p>At higher altitudes cooler temperatures slow down the growth rate of the coffee plant. At a slower growth rate the plants focus more on reproduction. The altitude at which a bean is grown has an affect on the beans flavor. Coffee grown at higher elevations tends to be of higher quality, and with that high quality comes more complex flavor notes than coffee grown at lower elevations. The difference in flavor and quality is due to two factors, water and temperature. At higher altitudes cooler temperatures slow down the growth rate of the coffee plant. At a slower growth rate the plants focus more on reproduction. The plant then devotes more energy to bean production which in turn produces more of the sugars that create those amazing tasting notes in your favorite coffee. Higher elevations also have better drainage than places lower in the watershed. Better drainage leads to less water in the beans concentrating the flavors created by the sugars.</p>
            <p> So what altitude should you look for when picking out beans? Well its really up to you and your flavor preferences. Beans that are grown at higher altitudes, above 1,300 meters (4,500 feet), tend to be more “acidic” and translate to flavors like fruits and berries in the cup. This may be labeled as SHB, super hard bean, or Altura, which is Spanish for height. If you are looking for a coffee that is more mellow and has a smooth taste a bean grown at a lower altitude would be best. Take a look at the chart below and use it as guide to find your new favorite bean.</p>
        </div>
        <div class="col-md-4">
            <h3 class = "py-4 h3">Rate this article</h3>
            <div class="comment">
                <div class="d-flex justify-content-between mx-5 mb-5">
                    <div class="user">
                        <h4 class = "h4">User 1</h4>
                        <!-- <span id="rateMe1"></span> -->
                        <div class="d-flex ">
                            <div class="star-rating">
                                <div class="star-rating_wrap">
                                    <input class="star-rating_input" id="star-rating-5" type="radio" name="rating" value="5">
                                    <label class="star-rating_ico fa fa-star fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                                    <input class="star-rating_input" id="star-rating-4" type="radio" name="rating" value="4">
                                    <label class="star-rating_ico fa fa-star fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                                    <input class="star-rating_input" id="star-rating-3" type="radio" name="rating" value="3">
                                    <label class="star-rating_ico fa fa-star fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                                    <input class="star-rating_input" id="star-rating-2" type="radio" name="rating" value="2">
                                    <label class="star-rating_ico fa fa-star fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                                    <input class="star-rating_input" id="star-rating-1" type="radio" name="rating" value="1">
                                    <label class="star-rating_ico fa fa-star fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            <div class="date">
                                <p class = "pl-3 pr-5">02/03/2021</p>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="like">
                        <i class="fas fa-2x fa-thumbs-up"></i>
                        <p>121</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between mx-5 mb-5">
                    <div class="user">
                        <h4 class = "h4">User 2</h4>
                        <!-- <span id="rateMe1"></span> -->
                        <div class="d-flex ">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>                                                                               
                            <div class="date">
                                <p class = "pl-3 pr-5">02/03/2021</p>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="like">
                        <i class="fas fa-2x fa-thumbs-up"></i>
                        <p>121</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between mx-5">
                    <div class="user w-100">
                        <h4 class = "h4">You</h4>
                        <!-- <span id="rateMe1"></span> -->
                        
                    <textarea class="form-control rounded-0" placeholder = "Your comment" id="exampleFormControlTextarea2" rows="3"></textarea>
                        
                    </div>
                    
                </div>
                <div class="d-flex justify-content-around mt-4">
                    <div class="star">
                    <div class="rating"> 
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label> 
                        <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label> 
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
</div> 
                    </div>
                    <button class = "btn btn-hlb"> <a href="#">SUBMIT</a> </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Rating Initialization
$(document).ready(function() {
  $('#rateMe1').mdbRate();
});
</script>




<?php include('./partials/footer.php') ?>