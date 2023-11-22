$(document).ready(function () {
    // Ajax call to verify the form already exists email verification
    $("#SU_Email").on("keypress blur", function () {
        var regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var studentEmail = $("#SU_Email").val(); // Corrected selector

        $.ajax({
            url: 'http://localhost/Learnify/student/addstudent.php',
            method: 'POST',
            data: {
                checkemail: "checkemail",
                studentEmail: studentEmail,
            },
            success: function (data) {
                // console.log(data);
                if (data != 0) {
                    $("#statusM2").html('<small style="color:red;">Email already exists</small>');
                    $("#signup_btn").attr("disabled", true);
                } else if (!regex.test(studentEmail)) {
                    $("#statusM2").html('<small style="color:red;">Please Enter a valid email e.g. example@emailid.com</small>');
                    $("#signup_btn").attr("disabled", true);
                } else if (data == 0 && regex.test(studentEmail)) {
                    $("#statusM2").html('<small style="color:green;">There you go</small>');
                    $("#signup_btn").attr("disabled", false);
                }
                if (studentEmail == "") {
                    $("#statusM2").html('<small style="color:red;">Please Enter your email</small>');
                }
            },
        });
    });
});


$(document).ready(function () {
    // Ajax call to verify if the student name already exists
    $("#SU_Username").on("keypress blur", function () {
        var studentName = $("#SU_Username").val();
        
        $.ajax({
            url: 'http://localhost/Learnify/student/addstudent.php',
            method: 'POST',
            data: {
                checkname: "checkname", // Updated key for name check
                studentName: studentName,
            },
            success: function (data) {
                // console.log(data);
                 if (studentName == "") {
                    $("#statusM1").html('<small style="color:red;">Please Enter your name</small>');
                    $("#signup_btn").attr("disabled", true);
                } else {
                    $("#statusM1").html('<small style="color:green;">Name is available</small>');
                    $("#signup_btn").attr("disabled", false);
                }
            },
        });
    });
});



function addStudent() {
    var studentName = $("#SU_Username").val();
    var studentEmail = $("#SU_Email").val();
    var studentPass = $("#SU_Password").val();
    var regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    // Check form fields on form filling
    if (studentName.trim() == "") {
        $("#statusM1").html('<small style="color:red;">Please Enter your name</small>');
        $("#SU_Username").focus();
        return false;
    } else if (studentEmail.trim() == "") {
        $("#statusM2").html('<small style="color:red;">Please Enter your email</small>');
        $("#SU_Email").focus();
        return false;
    } else if (!regex.test(studentEmail)) {
        $("#statusM2").html('<small style="color:red;">Please Enter a valid email e.g. example@emailid.com</small>');
        $("#SU_Email").focus();
        return false;
    } else if (studentPass.trim() == "") {
        $("#statusM3").html('<small style="color:red;">Please Enter your password</small>');
        $("#SU_Password").focus();
        return false;
    } else {
        $.ajax({
            url: 'http://localhost/Learnify/student/addstudent.php',
            method: 'POST',
            data: {
                student_Signup: "student_Signup",
                student_Name: studentName,
                student_Email: studentEmail,
                student_Pass: studentPass,
            },
            success: function (data) {
                console.log(data);
                if (data == "OK") {
                    $('#successMsg').html("<span class='alert alert-success'>Registration Completed</span>");
                    clearStudentField(); // Corrected function name
                } else if (data == "FAILED") {
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
                }
            },
        });
    }
}


// Ajax Call for Student Login Verification
function checkStudentLogin() {
    var Admin_Email = $("#Admin_Email").val();
    var Admin_Password = $("#Admin_Password").val();
    $.ajax({
      url: "Student/addstudent.php",
      type: "post",
      data: {
        checkLogemail: "checklogmail",
        Admin_Email: Admin_Email,
        Admin_Password: Admin_Password
      },
      success: function(data) {
        console.log(data);
        if (data == 0) {
          $("#statusLogMsg").html(
            '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
          );
        } else if (data == 1) {
          $("#statusLogMsg").html(
            '<div class="spinner-border text-success" role="status"></div>'
          );
          // Empty Login Fields
          clearStuLoginField();
          setTimeout(() => {
            window.location.href = "index.php";
          }, 1000);
        }
      }
    });
}


// Empty all fields and status message also
function clearStudentField() { // Corrected function name
    $("#Student_SU").trigger("reset");
    $("#statusM1").html(" ");
    $("#statusM2").html(" ");
    $("#statusM3").html(" ");
}
