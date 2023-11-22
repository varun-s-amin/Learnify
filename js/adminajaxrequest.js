// Ajax Call for Student Login Verification
function checkStudentLogin() {
    var SI_Email = $("#SI_Email").val();
    var SI_Password = $("#SI_Password").val();
    $.ajax({
      url: "Student/addstudent.php",
      type: "post",
      data: {
        checkLogemail: "checklogmail",
        SI_Email: SI_Email,
        SI_Password: SI_Password
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
            window.location.href = "Admin/admindashboard.php";
          }, 1000);
        }
      }
    });
}