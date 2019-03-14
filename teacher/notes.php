<?php
include "../con.inc.php";
$data=new database();
$data->connect();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
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
        <center><h1 class="head">Uploaded Notes</h1> </center>
         <div class="container">
<?php
SESSION_START();
$query = "SELECT * FROM `notes` WHERE `cid`='".$_SESSION['sid']."'";
$result = mysqli_query($data->con,$query);
while ($row = mysqli_fetch_assoc($result))
{
    $id = $row['nid'];
    $name = $row['nname'];

      echo "<center><h2 class='city'><a href='showpdf.php?id=$id' style='color:black' >".$name."&nbsp&nbsp&nbsp</a><a href='videos/VandNdelete.php?nid=$id'><span class='glyphicon glyphicon-trash'></span></a></h2></center>";

}
?>

  </body>
</html>
