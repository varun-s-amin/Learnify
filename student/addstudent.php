<?php
if (!isset($_SESSION)) {
    session_start();
}
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

include('../dbConnection.php');

// check if name already exists
if (isset($_POST['checkname']) && isset($_POST['studentName'])) {
    $student_Name = $_POST['studentName'];
    $stmt = $conn->prepare("SELECT stu_name FROM student WHERE stu_name = ?");
    $stmt->bind_param("s", $student_Name);
    $stmt->execute();
    $stmt->store_result();
    $row = $stmt->num_rows;
    echo json_encode($row);
    $stmt->close();
}

// Check if email already exists
if (isset($_POST['checkemail']) && isset($_POST['studentEmail'])) {
    $student_Email = $_POST['studentEmail'];
    $stmt = $conn->prepare("SELECT stu_email FROM student WHERE stu_email = ?");
    $stmt->bind_param("s", $student_Email);
    $stmt->execute();
    $stmt->store_result();
    $row = $stmt->num_rows;
    echo json_encode($row);
    $stmt->close();
}

// Insert student
if (isset($_POST['student_Signup']) && isset($_POST['student_Name']) && isset($_POST['student_Email']) && isset($_POST['student_Pass'])) {
    $student_Name = $_POST['student_Name'];
    $student_Email = $_POST['student_Email'];
    $student_Pass = password_hash($_POST['student_Pass'], PASSWORD_DEFAULT);

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO student(stu_name, stu_email, stu_pass) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $student_Name, $student_Email, $student_Pass);

    if ($stmt->execute()) {
        echo json_encode("OK");
    } else {
        echo json_encode("FAILED");
    }

    $stmt->close();
}

// Student Login Verification
if (!isset($_SESSION['is_login'])) {
    if (isset($_POST['checkLogemail']) && isset($_POST['SI_Email']) && isset($_POST['SI_Password'])) {
        $stuLogEmail = $_POST['SI_Email'];
        $stuLogPass = $_POST['SI_Password'];
        $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email=?"; // Changed the query
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $stuLogEmail);
        $stmt->execute();
        $stmt->bind_result($dbEmail, $dbPass);
        $stmt->fetch();

        if (password_verify($stuLogPass, $dbPass)) {
            $_SESSION['is_login'] = true;
            $_SESSION['SI_Email'] = $stuLogEmail;
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

        $stmt->close();
    }
}
?>
