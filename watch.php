<?php
include 'con.inc.php';
$data=new database();
$data->connect();
 ?>
<style media="screen">
body{
  background-color:black;
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
if(isset($_GET['vid']))
{

  $id = $_GET['vid'];
  $query = "SELECT * FROM `video` WHERE vid='$id'";
  $result = mysqli_query($data->con,$query);
  while ($row = mysqli_fetch_assoc($result))
  {
      $name = $row['name'];
      $url = $row['url'];

  }
  echo "Your Are Watching ".$name."<br />";
  echo "<center><video controls src='$url' width='700' height='700'></video></center>";

}

else {
  echo "Error!!!!!!";
}


     ?>
  </body>
</html>
