
    <?php include('./partials/nav.php') ?>

     <section class = "hero"> 
      <!-- Carousel Wrapper -->
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">

      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

      <li data-target="#carousel-example-1z" data-slide-to="1"></li>

      <li data-target="#carousel-example-1z" data-slide-to="2"></li>

    </ol>
    <!-- Indicators -->

    <!-- Slides -->
    <div class="carousel-inner" role="listbox">

      <!-- First slide -->
      <div class="carousel-item active">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="./assets/banner.png"
            alt="First slide">

          <div class="mask rgba-black-light">

           

          </div>

        </div>

      </div>
      <!-- First slide -->

      <!-- Second slide -->
      <div class="carousel-item h-100">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/slider1.jpg"
            alt="Second slide">

          <div class="mask rgba-stylish-strong">

            

          </div>

        </div>

      </div>
      <!-- Second slide -->

      <!-- Third slide -->
      <div class="carousel-item">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city8.jpg"
            alt="Third slide">

          <div class="mask rgba-black-light">

            

          </div>

        </div>

      </div>
      <!-- Third slide -->

    </div>
    <!-- Slides -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carousel-example-1z" onclick="$('#myCarousel').carousel('prev')" role="button" data-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" onclick="$('#myCarousel').carousel('next')" role="button" data-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>

      <span class="sr-only">Next</span>

    </a>
    <!-- Controls -->

  </div>
  <!-- Carousel Wrapper -->
      <div class="container floater animated slideInUp fast">
        <div class="card  mb-3 text-start hoverable p-5">
          <h1><b>Organic Cofee</b></h1>
          <p>Our coffee beans are grown in the foot hills of Himalayas. All coffee beans are locally grown in Kavre region, at the altitude of 3018 meters, which is ideally perfect to grow a great coffee beans.</p>
          <a href = "article.php"> <button class = "btn btn-brown ml-0"> READ MORE </button>  </a>
        </div>
      </div>
     </section>

     <section class="info-section container">
       <div class="row">
        <div class="col-md-3 col-sm-6 col-12 px-3 my-4 animated slideInLeft">
          <h2 class="h2 title">Why altitude matters ?</h2>
          <br>
          <p class="h5">Altitude does make a difference</p>
          <br>
          <p>At higher altitudes cooler temperatures slow down the growth rate of the coffee plant. At a slower growth rate the plants focus more on reproduction. The plant then devotes more energy to bean.</p>
          <div class="d-flex justify-content-center">
            <a href = "#"> <button class = "btn btn-brown ml-0"> READ MORE </button>  </a>
          </div>
        </div>
         <div class="col-md-9 col-sm-6 col-12 d-flex align-items-center pr-0 animated slideInRight">
          <img class="img-fluid" src="./assets/altitude_tea.png" alt="">
         </div>
       </div>
    </section>

    <section class="articles-exerpt mt-5">
      <div class="container">
        <h2 class = "h2 title">Recent Articles</h2>
        <br>
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-2 animated slideInUp faster">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Which roast is best for you ?</p>
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-2 animated slideInUp fast">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Deep dive into our flavour profile</p>
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-2 animated slideInUp slow">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Article</p>
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-2 animated slideInUp slow">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Article</p>
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-sm-2 wow slideInUp delay-1s">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Article</p>
            </a>
          </div>

          <div 
          data-toggle= "animation"
          data-animation= "slideInUp"
          data-animation-start= "onLoad"
          class="col-lg-2 col-md-4 col-sm-2 wow">
            <a href="#">
              <img src="./assets/beans.png" alt="">
              <p>Article</p>
            </a>
          </div>
          
        </div>
      </div>
    </section>

    <section class="stamp">
      <div class="container">
        <div class="row d-flex justify-content-end py-5">
          <img src="./assets//Logo.png" alt="">
        </div>
      </div>
    </section>

    <?php include('./partials/footer.php') ?>

    
    <!-- WOW js -->

      <!-- Navbar JS -->


