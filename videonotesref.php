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
    <center><h1 class="head">Courses</h1> </center>
<?php
            $cid=$_GET['cid'];
      echo "<center><h2 class='city'><a href='videosondb.php?cid=$cid' style ='color:black' >Videos</a></h2></center>";
        echo "<center><h2 class='city'><a href='notesondb.php?cid=$cid' style ='color:black' >Notes</a></h2></center>";

 ?>
</body>
</html>
