<?php
include 'con.inc.php';
$data=new database();
$data->connect();
?>
<!DOCTYPE html>
<html>
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
  <?php
  SESSION_START();
  if(isset($_SESSION['username']))
  {

     echo '<center><h1 class="head">Videos</h1> </center>';

      if(isset($_GET['cid']))
      {
          $cid=$_GET['cid'];
          $query = "SELECT * FROM `video` WHERE cid=$cid";
          $result = mysqli_query($data->con,$query);
          while ($row = mysqli_fetch_assoc($result))
          {
                  $name = $row['vname'];
                  $vid = $row['vid'];

              echo "<center><h2 class='city'><a href='watch.php?vid=$vid' style='color:black' >".$name."</a></h2></center>";


          }
      }
}
else
 {

   //$username=$_SESSION['username'];
   echo "<script language='javascript' type='text/javascript'>";
   echo "alert('First SignUp buddy -_-');";
   echo "</script>";
   $URL="index.php";
   echo "<script>location.href='$URL'</script>";

  }
 ?>
</body>
</html>
