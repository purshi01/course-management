<?php
SESSION_START();
if(isset($_SESSION['admin']))
{
include "../con.inc.php";
$data=new database();
$data->connect();
?>
<style media="screen">
.login-form
{
  box-shadow: 5px 10px #140f0f;
  height: 300px;
  width: 400px;
  background-color: #80d4ff;
  margin:0 auto;
  border-radius: 25px;
}
body
{
  background-image: url(teacher.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-color: #ffffff ;
}
input[type=date],input[type=text] {
  float: top;
padding: 3px 0px 3px 3px;
margin-top: 20px;
border: 1px solid #DDDDDD;
height: 28px;
width: 280px;
font-size: 24px;
font-family: cursive;
}
input[type=email],input[type=password]{
padding: 3px 0px 3px 3px;
margin-top: 2px;
border: 1px solid #DDDDDD;
height: 28px;
width: 280px;
font-size: 24px;
font-family: cursive;
}
p
{
padding-top: 20px;
padding-bottom: 0px;
}
input[type=password]:focus,input[type=password]:focus,input[type=email]:focus {
box-shadow: 0 0 5px rgba(81, 203, 238, 1);
padding: 3px 0px 3px 3px;
margin: 5px 1px 3px 0px;
border: 1px solid rgba(81, 203, 238, 1);
}
.name-login
{
font-size: 35px;
}
.login-button
{
width: 90px;
height: 45px;
margin-top: 30px;
background-color: #3399ff;
box-shadow: 5px 3px #140f0f;
font-family: cursive;
font-size: 15px;
padding: 10px;
border-radius: 15px;
}
</style>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">

    function validate()
    {

        if(document.StudentRegistration.fname.value == " "  ) {
         alert( "Please Enter Teacher name!" );
         document.StudentRegistration.fname.focus() ;
         return false;
         }
         if( document.StudentRegistration.collegename.value == " " )
          {
            alert( "Please provide your collegename!" );
            document.StudentRegistration.collegename.focus() ;
            return false;
          }
       if( document.StudentRegistration.exp.value == " " )
        {
          alert( "Please provide your Experience!" );
          document.StudentRegistration.exp.focus() ;
          return false;
        }
        if( document.StudentRegistration.phonenum.value == " " || document.StudentRegistration.phonenum.value.length != 10 )
         {
           alert( "Please provide a Mobile No in the format 123." );
           document.StudentRegistration.phonenum.focus() ;
           return false;
         }

          if( document.StudentRegistration.salary.value == " " )
           {
             alert( "Please provide your salary!" );
             document.StudentRegistration.salary.focus() ;
             return false;
           }
          var email = document.StudentRegistration.email.value;
           atpos = email.indexOf("@");
           dotpos = email.lastIndexOf(".");
          if (email == "" || atpos < 1 || ( dotpos - atpos < 2 ))
          {
              alert("Please enter correct email ID")
              document.StudentRegistration.email.focus() ;
              return false;
          }
         if(document.StudentRegistration.passvalue.value != " " )
          {
                       if(document.StudentRegistration.passvalue.value < 6) {
                         alert("Error: Password must contain at least six characters!");
                         document.StudentRegistration.passvalue.focus();
                         return false;
                       }
                       if(document.StudentRegistration.passvalue.value == document.StudentRegistration.fname.value) {
                         alert("Error: Password must be different from Username!");
                        document.StudentRegistration.passvalue.focus();
                         return false;
                       }
                       re = /[0-9]/;
                       if(!re.test(document.StudentRegistration.passvalue.value)) {
                         alert("Error: password must contain at least one number (0-9)!");
                         document.StudentRegistration.passvalue.focus();
                         return false;
                       }
                       re = /[a-z]/;
                       if(!re.test(document.StudentRegistration.passvalue.value)) {
                         alert("Error: password must contain at least one lowercase letter (a-z)!");
                              document.StudentRegistration.passvalue.focus();
                         return false;
                       }
                       re = /[A-Z]/;
                       if(!re.test(document.StudentRegistration.passvalue.value)) {
                         alert("Error: password must contain at least one uppercase letter (A-Z)!");
                        document.StudentRegistration.passvalue.focus();
                         return false;
                       }
          }
            else
           {
             alert("Error: Your password and repassword miss match plzzs check!");
              document.StudentRegistration.passvalue.focus();
             return false;
           }
           return true;
     }

</script>
  </head>
<body>
  <form  action="addteacher.php" method="POST"  enctype="multipart/form-data" name="StudentRegistration" onsubmit="return(validate());">
<div class="login-form" style="height:400px;width:100%;margin-top:200px">
  <center>
  <h1>"Add Teacher details"<a href="../logout.php" style="float:right;font-size:30px;">Logout&emsp;</a></h1>
</center>

  <center>
          <input type="text" name="Additional Box" placeholder="Additional Box">
          <input type="text" name="tname" placeholder="Teacher name"  required="required" id="fname" >&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="college" placeholder="College name" required="required" id="collegename" >&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="exp" placeholder="Experience" required="required" id="exp">&emsp;&emsp;&emsp;&emsp;&emsp;
          <p>
          <input type="text" name="phonenum" placeholder="Phone num" required="required" id="phonenum" >&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="text" name="salary" placeholder="Salary" required="required" id="salary" >&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="email" name="email" placeholder="Email" required="required" id="email" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="password" name="passvalue" placeholder="Password" value="" required="required" id="passvalue">
        </p>
          <input class="login-button" type="submit" value="ADD">
         </center>
        <?php
           $id=$_SESSION['admin'];
            echo " <a href='newreq.php?id=$id' style='float:right;font-size:30px;'>New Request for courses&emsp;</a>";
         ?>


  </div>
 <?php

      if(isset($_POST['email']) && isset($_POST['passvalue']))
      {

                $tname=$_POST['tname'];
                $college=$_POST['college'];
                $exp=$_POST['exp'];
                $phonenum=$_POST['phonenum'];
                $salary=$_POST['salary'];
                $email=$_POST['email'];
                $password=$_POST['passvalue'];
                $query="INSERT INTO  `teacher` VALUE ('','$tname','$email','$password','$college','$exp','$salary','$phonenum')";
           if(mysqli_query($data->con,$query))
                {
                  echo "<script language='javascript' type='text/javascript'>";
                  echo "alert('Teacher details added successfully');";
                  echo "</script>";
                  $URL="addteacher.php";
                  echo "<script>location.href='$URL'</script>";

                }
            else
              {
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('Provide proffer details buddy');";
                echo "</script>";
                $URL="addteacher.php";
                echo "<script>location.href='$URL'</script>";

              }
      }
}
else {
echo "<center><h1>I DON'T KNOW WHO YOU ARE BUDDY SORRY!!!!!!</center></h1><br />";
}

?>
 </form>
</body>
</html>
