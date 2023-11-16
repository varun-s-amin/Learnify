<!-- header starts -->
<?php
    include("./main/header.php");
?>
<!-- header starts -->

<!-- start view background-->
  <div class="container-fluid remove-vid-marg" style="margin: 0%; padding: 0%;">
    <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="videos/banvid.mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to Meschool</h1>
      <small class="my-content">Learn and Implement</small><br>
      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#Register">Get Started</a>
    </div>
  </div>
  <!-- end background-->


  <!-- start text banner-->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>&nbsp;100+ Online Courses</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-person-chalkboard">&nbsp;</i>Expert Instructors</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>&nbsp;Lifetime Access</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-indian-rupee-sign"></i>&nbsp;Money back Guarantee</h5>
      </div>
    </div>
  </div>
  <!-- end text banner-->



  <!-- popular courses start -->
  <div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card">
          <img src="images/guitar.jpeg" style="height: 200px; width: 100%;" class="card-img-top img-fluid"
            alt="Guitar" />
          <div class="card-body">
            <h5 class="card-title">Learn guitar the easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quaerat
              quibusdam adipisci magnam pariatur est voluptate eveniet, architecto illo tempore aliquid
              distinctio repellendus possimus accusamus libero quam dicta aperiam quas.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377; 2000</del></small> <span
                class="font-weight-bolder">&#8377; 200</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="images/guitar.jpeg" style="height: 200px; width: 100%;" class="card-img-top img-fluid"
            alt="Python" />
          <div class="card-body">
            <h5 class="card-title">Learn Python</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quaerat
              quibusdam adipisci magnam pariatur est voluptate eveniet, architecto illo tempore aliquid
              distinctio repellendus possimus accusamus libero quam dicta aperiam quas.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377; 2000</del></small> <span
                class="font-weight-bolder">&#8377; 200</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="images/guitar.jpeg" style="height: 200px; width: 100%;" class="card-img-top img-fluid"
            alt="Python" />
          <div class="card-body">
            <h5 class="card-title">Learn Python</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quaerat
              quibusdam adipisci magnam pariatur est voluptate eveniet, architecto illo tempore aliquid
              distinctio repellendus possimus accusamus libero quam dicta aperiam quas.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377; 2000</del></small> <span
                class="font-weight-bolder">&#8377; 200</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View All Courses</a>
    </div>
  </div>
  <!-- popular courses end -->




  <!-- Start contact us -->
  <?php 
      include('./contact.php');
  ?>
  <!-- End contact us -->

  <!-- Start student's feedback -->
  <div class="container-fluid mt-5" style="background-color:#4B7289" id="Feedback">
    <h1 class="text-center p-4">Student's Feedback</h1>
    <div class="row">
      <div class="col-md-12">
        <div id="testimonial-slider" class="owl-carousel owl-theme">
          <div class="item">
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo beatae vel, ad
              debitis facilis ea sapiente ipsum quia ut. Possimus repellat architecto hic fugiat magni distinctio facilis
              maxime rem corrupti.</p>
            <div class="pic">
              <img src="images/guitar.jpeg" style="display: inline; height: 10%; width: fit-content;" alt="" />
            </div>
            <div class="testomonial-prof"></div>
            <h4>Sonam</h4>
            <small>Web Developer</small>
          </div>
          <div class="item">
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo beatae vel, ad
              debitis facilis ea sapiente ipsum quia ut. Possimus repellat architecto hic fugiat magni distinctio facilis
              maxime rem corrupti.</p>
            <div class="pic">
              <img src="images/guitar.jpeg" style="display: inline; height: 10%; width: fit-content;" alt="" />
            </div>
            <div class="testomonial-prof"></div>
            <h4>Sonam</h4>
            <small>Web Developer</small>
          </div>
          <div class="item">
            <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo beatae vel, ad
              debitis facilis ea sapiente ipsum quia ut. Possimus repellat architecto hic fugiat magni distinctio facilis
              maxime rem corrupti.</p>
            <div class="pic">
              <img src="images/guitar.jpeg" style="display: inline; height: 10%; width: fit-content;" alt="" />
            </div>
            <div class="testomonial-prof"></div>
            <h4>Sonam</h4>
            <small>Web Developer</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End student's feedback -->

  <!-- Social media icons -->
  <div class="container-fluid text-white text-center p-1" style="background-color: blue;">
    <div class="row">
        <div class="col-6 col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-6 col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
        <div class="col-6 col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
        </div>
        <div class="col-6 col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>
</div>
<!-- End social media icons -->


  <!-- footer starts -->

<?php
    include("./main/footer.php");
?>
  <!-- footer ends -->
