<!-- header starts -->
<?php
    include("./main/header.php");
?>
<!-- header ends -->

<!-- banner starts-->
<div class="container-fluid bg-dark">
    <class class="row">
        <img src="" alt="course banner" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;"/>
    </class>
</div>
<!-- banner ends-->


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Course Name:</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet</p>
                    <p class="card-text">Duration:</p>
                    <form action="" method="post">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                        <span class="font-weight-bolder">&#8377 200</span></p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Enroll now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson number</th>
                        <th scope="col">Lesson name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- Start contact us -->
  <?php 
      include('./contact.php');
  ?>
<!-- End contact us -->

<!-- footer starts -->
<?php
    include("./main/footer.php");
?>
<!-- footer starts -->