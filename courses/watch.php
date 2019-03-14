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
    <?php
    SESSION_START();
if(isset($_GET['vid']))
{

  $id = $_GET['vid'];
  $query = "SELECT * FROM `video` WHERE vid='$id'";
  $result = mysqli_query($data->con,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
      $name = $row['vname'];
      $url = $row['url'];

  }
  echo "<center>Your Are Watching ".$name."<br /></center>";
  echo "<center><video controls src='$url' width='1120' height='630'></video></center>";

}

else {
  echo "Error!!!!!!";
}


     ?>
  </body>
</html>
