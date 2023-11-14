<?php
    include('../dbConnection.php');
    
    if(isset($_POST['student_Signup']) && isset($_POST['student_Name']) && isset($_POST['student_Email']) && isset($_POST['student_Pass'])){
        $student_Name = $_POST['student_Name'];
        $student_Email = $_POST['student_Email'];
        $student_Pass = $_POST['student_Pass'];

        $sql1 = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$student_Name', '$student_Email', '$student_Pass')";

        if($conn->query($sql1) == TRUE)
        {
            echo json_encode("OK");
        }
        else
        {
            echo json_encode("FAILED");
        }
    }
?>
