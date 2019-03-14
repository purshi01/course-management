<?php
include "../con.inc.php";
$data=new database();
$data->connect();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
    .city
     {
      background-color: #80d4ff;
      color: black;
      padding: 30px;
      border-radius:300px;
      font-size: 30px
    }
    body
    {
      background-image: url(http://c8.alamy.com/comp/J5GW7T/online-courses-sign-on-white-paper-man-hand-holding-paper-with-text-J5GW7T.jpg);
      background-size: 100%;
      background-repeat: no-repeat;
      background-color: #ffffff ;
    }
    .head{
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;font-size:60px;border-radius:300px

    }
    </style>
    <body>
        <center><h1 class="head">Number of Courses you are teaching...</h1> </center>
   <?php

if(isset($_GET['tid']))
{
      $tid = $_GET['tid'];
      $query = "SELECT * FROM `course` WHERE tid=$tid";
      $result = mysqli_query($data->con,$query);
      while ($row = mysqli_fetch_assoc($result))
      {

              $cname = $row['cname'];
              $cid = $row['cid'];

          echo "<center><h2 class='city'><a href='modvideo.php?cid=$cid' style ='color:black' >".$cname."</a></h2></center>";

      }
    }
    else {
      echo "<h1><center>I DO NOT KNOW WHO YOU ARE!!!!!!!</center></h1>";
    }
     ?>
    </body>
    </html>

  </body>
</html>
