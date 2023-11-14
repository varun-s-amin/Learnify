<!--footer starts-->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyrights &copy; 2023 || Designed and Developed in ❤️ by Varun and Vinit || <a href="#login" data-toggle="modal" data-target="#adminLogin">Admin Login</a></small>
  </footer>
<!--footer ends-->

  <!-- Start Sign up page-->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="Register" tabindex="-1" aria-labelledby="RegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="RegisterLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Start signup page-->
          <form id="Student_SU">
            <div class="form-group">
              <i class="fa-solid fa-user"></i>
              <label for="SU_Username">Name</label>
              <small id="statusM1"></small>
              <input type="text" class="form-control" id="SU_Username" name="SU_Username">
            </div>
            <div class="form-group">
              <i class="fa-solid fa-envelope"></i>
              <label for="SU_Email">Email address</label>
              <small id="statusM2"></small>
              <input type="email" class="form-control" id="SU_Email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fa-solid fa-key"></i>
              <label for="SU_Password">Password</label>
              <small id="statusM3"></small>
              <input type="password" class="form-control" id="SU_Password">
            </div>
          </form>
          <!-- end signup page-->
        </div>
        <div class="modal-footer">
          <span id="successMsg"></span>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="addStudent()"
            id="signup_btn">Sign up</button>
          <button type="button" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sign up page-->



  <!-- Start login page-->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Login">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Start login page-->
          <form class="StudentLogin">
            <div class="form-group">
              <i class="fa-solid fa-envelope"></i>
              <label for="SI_Email">Email address</label>
              <input type="email" class="form-control" id="SI_Email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <i class="fa-solid fa-key"></i>
              <label for="SI_Password">Password</label>
              <input type="password" class="form-control" id="SI_Password">
            </div>
          </form>
          <!-- end Login page-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign in</button>
          <button type="button" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End login page-->


  <!-- Start admin login page-->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminLogin">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="adminLogin" tabindex="-1" aria-labelledby="adminLoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Start admin page-->
          <form class="AdminLogin">
            <div class="form-group">
              <i class="fa-solid fa-envelope"></i>
              <label for="Admin_Email">Email address</label>
              <input type="email" class="form-control" id="Admin_Email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <i class="fa-solid fa-key"></i>
              <label for="Admin_Password">Password</label>
              <input type="password" class="form-control" id="Admin_Password">
            </div>
          </form>
          <!-- end admin page-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign in</button>
          <button type="button" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End admin login page-->


  <script src="js/jquery.min.js"></script>
  <script src="js/owlcarousal.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/c2139d71c2.js" crossorigin="anonymous"></script>
  <script src="js/ajaxrequest.js"></script>

</body>

</html>