<?php
include "../../con.inc.php";
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
    <?php

if(isset($_GET['id']))
{

  $id = $_GET['id'];
  $query = "SELECT * FROM `video` WHERE vid='$id'";
  $result = mysqli_query($data->con,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
      $name = $row['vname'];
      $url = $row['url'];

  }
  echo "Your Are Watching ".$name."<br />";
  echo "<video controls src='$url' width='560' height='315'></video>";

}

else {
  echo "Error!!!!!!";
}


     ?>
  </body>
</html>
