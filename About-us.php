<?php include('./partials/nav.php') ?>

<section class="faq-banner">
        <img class = "faq-banner-img img-fluid" src="assets/beanscover.jpg" alt="">
    <div class="faq-banner-text w-100">
      <div class="container">
          <div class="row">
              <div class="col-md-3 faq-title">
                  <h2>HIMALAYAN LUXURY BEANS</h2>
              </div>
              <div class="col-md-9 d-flex align-items-center faq-desc">
                  <p>We are the coffee farmer and roaster based on Kathmandu, Nepal. Our coffee beans are grown in the foot hills of Himalayas. All coffee beans are locally grown in Kavre region, at the altitude of 3018 meters, which is ideally perfect to grow a great coffee beans.</p>
              </div>
          </div>
          <div class="stamp mb-5 pr-5">
            <div class="row d-flex justify-content-end">
                <img src="./assets//Logo-rotated.png" alt="">
            </div>
          </div>
      </div>
    </div>
</section>
<div class="container my-5 contact-us">
    <div class="row pt-5">
        <div class="col-md-6">
            <h3 class = "h3 title-chocolate">Contact Us</h3>
            <br>
            <div class="py-3 Nepal">
                <p>Nepal</p>
                <p>Phone: 987654321</p>
                <p>Email: himalayanbeans@gmail.com</p>
            </div>
            <div class="py-3 Japan">
                <p>Japan</p>
                <p>Phone: 987654321</p>
                <p>Email: himalayanbeans@gmail.com</p>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class = "h3 title-small">Send Feedback</h3>
            <br>
            <div class="border px-4 py-5 feedback-form">
               <form action="">
                <input type="text" id="exampleForm2" placeholder = "Name" class="form-control">
                    <input type="text" id="exampleForm2" placeholder = "Email Address" class="form-control">
                    <input type="text" id="exampleForm2" placeholder = "Phone" class="form-control">
                    <textarea class="form-control rounded-0" placeholder = "Feedback" id="exampleFormControlTextarea2" rows="3"></textarea>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="#"> <button class = "btn btn-hlb">Submit</button> </a>
                    </div>
               </form>
               
            </div>
        </div>
    </div>
</div>

<section class="farm-location">
    <div class="container">
    <h2 class = "h2 pt-4 my-5 title-small">Visit Our Farm</h2>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17829.282339560476!2d85.34462205!3d27.694520599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2snp!4v1636887191745!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br>
                <style></style>
                <style></style>
            </div>
        </div>
    </div>
</section>

<section class="farm-location">
    <div class="container">
        <h2 class = "h2 pt-4 my-5 title-small">Visit Our Store</h2>
        <div class="mapouter">
            <!-- <iframe
            width="100%"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe> -->
        <iframe width="100%" height="500" id="gmap_canvas" 
            src="https://maps.google.com/maps?q=Katunje%20besi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
    </div>
</section>



<?php include('./partials/footer.php') ?>