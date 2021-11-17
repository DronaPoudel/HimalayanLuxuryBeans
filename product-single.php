<?php include('./partials/nav.php') ?>

<section class="beans-cover pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-end">
                <h2 class = "text-uppercase mb-4 text-white">Guatemala Huehuetenango</h2>
            </div>
            
            <div class="col-lg-6 d-flex align-items-center">
                <img width= "100%" src="./assets/bagblueset.png" alt="">
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="stamp mb-5 pr-5">
            <div class="d-flex justify-content-end">
                <img src="./assets//Logo-rotated.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="beans-details container-fluid">
    <div class="row">
    <div class="col-md-6 bg-white shadow pt-3">
        <div class=" text-uppercase bread-crumb">
            <p>
                <a href="#">Beans</a> 
                <i class="fas fa-caret-right"></i> 
                <a href="#">Himalayan Luxury Beans Reserve</a> 
                <i class="fas fa-caret-right"></i> 
                <a href="#" class = "underline">GUATEMALA HUEHUETENANGO</a> 
            </p>
        </div>
        <div class="container w-75 py-5 my-3">
            <h4 class = "h4 uppercase">GUATEMALA HUEHUETENANGO</h4>
            <p class = "beans-description">Candied orange, dark chocolate and graham cracker notes Facing the devastating effects of coffee leaf rust, six extraordinary farmers in Huehuetenango planted a transformative rust-resistant varietal: Marsellesa. This bag—from the ﬁrst full harvest of these new trees—represents hope for the farmers of Latin America.</p>
        </div>
    </div>
    <div class="col-md-6 bg-pink p-5">
        <div class="coffee-order">
            <form action="">
                <label for="">size</label>
                <select class="mdb-select md-form m-0">
                    <option value="" disabled selected>8.8oz</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <br> <br>
                <label for="">Grind Options</label>
                <select class="mdb-select md-form m-0">
                    <option value="" disabled selected>Espresso (Fine)</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <br> <br>
                <div class="btn-group mt-4">
                    <button class = "btn mr-5"><a href="">ORDER</a></button>
                    <!-- <button class = "btn"></button> -->
                    <!-- Button trigger modal -->

 
                    <button type="button" class="btn text-white" data-toggle="modal" data-target="#exampleModalCenter">
                    ADD TO CART
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><h2>Item(s) added to cart successfully</h2></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-hlb" data-dismiss="modal">Checkout</button>
        <button type="button" class="btn btn-hlb"><a href="./beans.php">More Shopping</a></button>
      </div>
    </div>
  </div>
</div>
                </div>
            </form>
        </div>
    </div>
    
    </div>
</section>

<script>
    $(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<?php include('./partials/footer.php') ?>
<!-- <script src = "vendors/js/dropdown.min.js"></script> -->
<!-- <script src = "vendors/js/material-select.min.js"></script> -->
