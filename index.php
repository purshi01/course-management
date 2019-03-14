<?php

include 'con.inc.php';
$dat=new database();
$dat->connect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="valid.js">
    </script>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript">

function fun(vara)
{
  switch (vara) {
    case '1':
               location.href = "http://localhost/course/main.php";
       break;
    case '2':location.href = "http://localhost/course/home.html";
                    break;
    case '3':document.getElementsByClassName('stdlogin')[0].innerHTML='<div class="container"><form action="contact/contactdetails.php" method="POST"  name="StudentRegistration" onsubmit="return(validate());"><br><label for="fname" >USERNAME : -  </label><input type="text" id="fname" name="fname" placeholder="Your name.." size="30"><br/><label for="country" >Country</label>  <select name="country"><option value="australia">Australia</option><option value="india">INDIA</option><option value="usa">USA</option></select>  <label for="subject">Subject</label> <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><input type="submit" value="Submit"> </form></div>';
              break;
    case '4':document.getElementsByClassName('stdlogin')[0].innerHTML='<div class="container"><form action="new/newreq.php" method="POST" name="StudentRegistration" onsubmit="return(validate());"> <label for="subject">Request for New Courses</label><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" style="width:200px"></textarea>  <input type="submit" value="Submit"><form/> </div>';
                  break;
    case '5':document.getElementsByClassName('stdlogin')[0].innerHTML='<form  action="std/signup.php" method="POST" name="StudentRegistration" onsubmit="return(validate());">   <div class="login-form" style="height:699px;padding-top:0px">  <center><span class="name-login">STUDENT SIGN UP</span>  <p><input type="text" name="fname" placeholder="Firstname" size="30" id="fname" required="required"></p>  <p><input type="text" name="lname" placeholder="Lastname" size="30" id="lname" required="required"></p><p><input type="date" name="dob" placeholder="dd-mm-yyyy" size ="30" id="dob" required="required"><p/><p><input type="text" name="phonenum" placeholder="Phone num" size="30" id="phonenum" required="required"><p/><p><input type="text" name="collegename" placeholder="Collegename" id="collegename" required="required"><p/><input type="email" name="email" placeholder="Email" id="email" required="required"></p><p><input type="password" name="passvalue" placeholder="Password" size="30" required="required" id="passvalue"></p>  <p><input type="password" name="repassvalue" placeholder="RE Enter password" size="30" required="required" id="repassvalue"></p>  <input class="login-button" type="submit" value="SIGNUP"> </center> </div></form>';
                    break;
    case '7':document.getElementsByClassName('stdlogin')[0].innerHTML='<div class="login-form"><center><span class="name-login">TEACHER LOG IN</span><form  action="teacher/tlogin.php" method="POST" name="StudentRegistration" onsubmit="return(validate());"> <p><input type="email" name="email" placeholder="Email" id="email" required="required"></p> <p><input type="password" name="passvalue" placeholder="Password" id="passvalue" required="required" ></p><input class="login-button" type="submit" value="LOGIN"></form></center> </div>';
                    break;
    case '8':document.getElementsByClassName('stdlogin')[0].innerHTML='<div class="login-form"><center><span class="name-login">ADMIN LOG IN</span><form  action="admin/adlogin.php" method="POST" name="StudentRegistration" onsubmit="return(validate());"> <p><input type="email" name="email" placeholder="Email" id="email" required="required"></p> <p><input type="password" name="passvalue" placeholder="Password" id="passvalue" required="required" "></p><input class="login-button" type="submit" value="LOGIN"></form></center> </div>';
                    break;
    case '6':document.getElementsByClassName('stdlogin')[0].innerHTML='<div class="login-form"><center> <span class="name-login">STUDENT LOG IN</span><form action="std/auth.php" method="POST" name="StudentRegistration" onsubmit="return(validate());"> <p><input type="email" name="email" placeholder="Email" id="email" required="required"></p> <p><input type="password" name="passvalue" placeholder="Password" id="passvalue" required="required" id="myInput"></p><input class="login-button" type="submit" value="LOGIN"></form></center> </div>';
            break;
          default:

        }
      }

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
/* FIXME:  */    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 30px;
    background-color: #80d4ff;
    padding: 20px;
}
    body
    {
      background-image: url(http://www.kardiniachurch.com/images/pages/21/courses-top-background.jpg);
      background-size: 100%;
      background-repeat: no-repeat;
      background-color: #ffffff ;
    }
      .login-form
      {
        box-shadow: 5px 10px #140f0f;
        height: 300px;
        width: 400px;
        background-color: #80d4ff;
        margin:0 auto;
        border-radius: 25px;
      }
         input[type=date],input[type=password],input[type=text],input[type=email] {
      padding: 3px 0px 3px 3px;
      margin: 5px 1px 3px 0px;
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
      background-color: #3399ff;
      box-shadow: 5px 3px #140f0f;
      font-family: cursive;
      font-size: 15px;
      padding: 10px;
      border-radius: 15px;
      }
    </style>
  </head>
<body>
<nav class="navbar navbar-inverse" style="height: 60px;">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="#" onclick="fun('1')">Courses</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.html" onclick="fun('2')">Home</a></li>
      <li><a href="#contact" onclick="fun('3')">Feed Back</a></li>
      <li><a href="#new" onclick="fun('4')">Request New Courses</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#stdsignup" onclick="fun('5')"><span class="glyphicon glyphicon-user"></span>Student Sign Up</a></li>
        <li  class="active"><a href="#stdlogin" onclick="fun('6')"><span class="glyphicon glyphicon-log-in"></span>Student Login</a></li>
        <li><a href="#teachlogin" onclick="fun('7')"><span class="glyphicon glyphicon-log-in"></span>Teacher Login</a></li>
        <li><a href="#adminlogin" onclick="fun('8')"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
          <li><a href = "./logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
     </ul>
  </div>

</nav>
<div class="stdlogin">

</div>
  </body>
</html>
