<?php
include '../con.inc.php';
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Logged in successfully......</h1>
  </body>
</html>
<?php
}else {
  header('location:../index.php');
}

 ?>
