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
if(isset($_SESSION['cid']))
{

  $id = $_SESSION['cid'];
  $query = "SELECT * FROM `notes` WHERE cid='$id'";
  $result = mysqli_query($data->con,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
      $name = $row['nname'];
      $url = $row['url'];

  }
  echo "<center>".$name."<br /></center>  ";
  echo "<embed src='$url' type='application/pdf'   height='900px' width='100%' class='responsive'>";

}

else {
  echo "Error!!!!!!";
}


     ?>
  </body>
</html>
