<?php
include 'con.inc.php';
$data=new database();
$data->connect();
 ?>
<style media="screen">

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
if(isset($_GET['nid']))
{

  $id = $_GET['nid'];
  $query = "SELECT * FROM `notes` WHERE nid='$id'";
  $result = mysqli_query($data->con,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
      $name = $row['nname'];
      $url = $row['url'];

  }
  echo "<center>".$name."<br /></center>";
  echo "<embed src='$url' type='application/pdf'   height='900px' width='100%' class='responsive'>";
  $_SESSION['cid'];
}

else {
  echo "Error!!!!!!";
}


     ?>
  </body>
</html>
