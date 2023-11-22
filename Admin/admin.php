<?php 
include('../dbConnection.php');
if(!isset($_SESSION)){ 
  session_start(); 
}
// setting header type to json, We'll be outputting a Json data
header('Content-type: application/json');

 // Admin Login Verification
 if(!isset($_SESSION['is_admin_login'])){
   if(isset($_POST['checkLogemail']) && isset($_POST['Admin_Email']) && isset($_POST['Admin_Password'])){
     $Admin_Email = $_POST['Admin_Email'];
     $Admin_Password = $_POST['Admin_Password'];
     $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$Admin_Email."' AND admin_pass='".$Admin_Password."'";
     $result = $conn->query($sql);
     $row = $result->num_rows;
     
     if($row === 1){
       $_SESSION['is_admin_login'] = true;
       $_SESSION['Admin_Email'] = $Admin_Email;
       echo json_encode($row);
     } else if($row === 0) {
       echo json_encode($row);
     }
   }
 }

?>