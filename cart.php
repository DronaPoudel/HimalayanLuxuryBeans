<?php include('./partials/nav.php') ?>

<section class="cart">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 bg-white p-5 shadow">
            <h3 class = "h3">My Cart</h3>
            <br>
              <div class="d-flex select-title">
                  <div class="select-all d-flex align-items-center">
                      <input type="checkbox"> 
                  </div>
                <p> &nbsp Select all <span>(2 items)</span></p>
              </div>
              <div class="border card p-3 mb-4">
                  <div class="row">
                      <div class="col-md-9">
                          <div class="row">
                              <div class="col-md-4 d-flex">
                                <input class = "h-100" type="checkbox">
                                <a class="col" href="./product-single.php">
                                    <div class="coff-packet">
                                        <img src="assets/bagred.png" alt="">
                                    </div>
                                    <h5 class = "h5 text-uppercase text-center">Holiday Blend</h5>
                                </a>
                              </div>
                              <div class="col-md-6 d-flex align-items-center">
                                  <p class= "">
                                  Candied orange, dark chocolate and graham cracker notes Facing the devastating effects of coffee leaf rust, six...
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 actions">
                        <div class="options">
                            <p><span>Size: </span> 8.8oz </p>
                            <p><span>Grind options </span> Espresso (Fine) </p>
                            <p class = "chocolate price">Rs. 450</p>
                        </div>
                        <div class="options-icons pt-3 d-flex justify-content-center">
                        <div class="card-actions">
                            <a class="fas fa-pen" href="#"></a> 
                            <a class="fas fa-heart" href="#"></a>
                            <a class="fas fa-trash" href=""></a>
                        </div>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="border card p-3 mb-4">
                  <div class="row">
                      <div class="col-md-9">
                          <div class="row">
                              <div class="col-md-4 d-flex">
                                <input class = "h-100" type="checkbox">
                                <a class="col" href="./product-single.php">
                                    <div class="coff-packet">
                                        <img src="assets/bagblue.png" alt="">
                                    </div>
                                    <h5 class = "h5 text-uppercase text-center">GUATEMALA HUEHUETENANGO</h5>
                                </a>
                              </div>
                              <div class="col-md-6 d-flex align-items-center">
                                  <p class= "">
                                  Candied orange, dark chocolate and graham cracker notes Facing the devastating effects of coffee leaf rust, six...
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 actions">
                        <div class="options">
                            <p><span>Size: </span> 8.8oz </p>
                            <p><span>Grind options </span> Espresso (Fine) </p>
                            <p class = "chocolate price">Rs. 450</p>
                        </div>
                        <div class="options-icons pt-3 d-flex justify-content-center">
                        <div class="card-actions">
                            <a class="fas fa-pen" href="#"></a> 
                            <a class="fas fa-heart" href="#"></a>
                            <a class="fas fa-trash" href=""></a>
                        </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-4 p-5">
                <h3 class = "h3">Order Summary</h3>
                <br>
                <div class="order">
                    <div class="d-flex">
                        <p class = "chocolate mr-4"><span>Delivery Address: </span> Baneshwor, Kathmandu</p>
                        <a class="fas fa-pen chocolate" href="#"></a> 
                    </div>
                        <div class="items">
                            <p><span>Items:</span></p>
                            <table class = "mb-2">
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                                
                                <tr class = "spacer">
                                    <td>Guatemala Huehuetenango</td>
                                    <td>Rs.450</td>
                                </tr>
                                
                                <tr>
                                    <td>Guatemala Huehuetenango</td>
                                    <td>Rs.450</td>
                                </tr>
                                
                            </table>
                            <hr>
                            <p><span>Total Price :</span> 900</p>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#"> <button class = "btn btn-lg btn-hlb">Checkout</button> </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./partials/footer.php') ?>