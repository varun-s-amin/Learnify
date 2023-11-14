function addStudent()
{
    var studentName = $("#SU_Username").val();
    var studentEmail = $("#SU_Email").val();
    var studentPass = $("#SU_Password").val();
    var regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    //check form fields on form filling 
    if(studentName.trim() == "")
    {
        $("#statusM1").html('<small style="color:red;">Please Enter your name</small>');
        $("#studentName").focus();
        return false;
    }
    else if(studentEmail.trim() == "")
    {
        $("#statusM2").html('<small style="color:red;">Please Enter your email</small>');
        $("#studentEmail").focus();
        return false;
    }else if(studentEmail.trim != "" && !regex.test(studentEmail)){
        $("#statusM2").html('<small style="color:red;">Please Enter your valid email e.g. example@emailid.com</small>');
    }
    else if(studentPass.trim() == "")
    {
        $("#statusM3").html('<small style="color:red;">Please Enter your password</small>');
        $("#studentPass").focus();
        return false;
    }
    else
    {
        $.ajax(
            {
                url:'student/addstudent.php',
                method: 'POST',
                dataType: "json",
                data:{
                    student_Signup : "student_Signup",
                    student_Name : studentName,
                    student_Email : studentEmail,
                    student_Pass : studentPass
                },
                success:function(data)
                {
                    console.log(data);
                    if(data == "OK")
                    {
                        $('#successMsg').html("<span class='alert alert-success'>Registration Completed</span>");
                        clearstudentField();
                    }
                    else if(data == "FAILED")
                    {
                        $('#successMsg').html("<span class='alert alert-danger'>Unable to Register</span>");
                    }
                }
            });
    } 
}



//empty all fields and status message also

function clearstudentField()
{
    $("Student_SU").trigger("reset");
    $("#statusM1").html(" ");
    $("#statusM2").html(" ");
    $("#statusM3").html(" ");
}