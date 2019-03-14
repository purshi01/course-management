<?php
include '../con.inc.php';
$data= new database();
$data->connect();

 ?>
<style media="screen">
body
{
  background-image: url(http://c8.alamy.com/comp/J5GW7T/online-courses-sign-on-white-paper-man-hand-holding-paper-with-text-J5GW7T.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-color: #ffffff ;
}
.container {
    border-radius: 300px;
    background-color: #80d4ff;
    padding: 10px;
    height: 400px;
}
input[type=file],input[type=text]{
padding: 10px 10px 10px 10px;
margin: 100px 300px 30px 330px;
background-color: white;
border: 1px solid #DDDDDD;
height: 40px;
width: 700px;
font-size: 24px;
font-family: cursive;
}
input[type=submit] {
padding: 10px 0px 10px 10px;
margin: 50px 300px 30px 550px;
border: 1px solid #DDDDDD;
background-color: #4CAF50;
height: 40px;
width: 200px;
font-size: 20px;
font-family: cursive;
}


</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    SESSION_START();
    if(isset($_SESSION['tid']))
    {
        $tid=$_SESSION['tid'];
     echo " <form action='index.php' method='post'>

      <div class='container'>

        <h1> <center>Course details</center> <a href='noofcourses.php?tid=$tid' style='float:right;color:black'>If you want modify files again click here</a></h1> &ensp;&ensp;
        <br>
        <input type='text' name='cname' placeholder='Enter course Name' style='margin: 10px 300px 50px 330px;'required >
        <br />
        <input type='text' name='ctype' placeholder='course type'style='margin: 10px 300px 50px 330px;'required >
        <input type='submit' name='update' value='Update' style='margin: 10px 300px 500px 550px;'>
        </div></form>";


        }
else
{
  echo "I do NOT KNOW  WHO YOU ARE BUDDYYY!!!!";
}
   ?>

    </form>
  </body>
</html>
