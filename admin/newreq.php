<style media="screen">
.city
 {
  background-color: #80d4ff;
  color: black;
  padding: 30px;
  border-radius:300px;
  font-size: 30px
}
</style>
<?php
SESSION_START();
include '../con.inc.php';
$data=new database();
$data->connect();
if(isset($_GET['id']))
{

   echo '<center><h1 class="head">Newrequest</h1> </center>';

    if(isset($_GET['id']))
    {
        $cid=$_GET['id'];
        $query = "SELECT * FROM `newrequest`";
        $result = mysqli_query($data->con,$query);
        while ($row = mysqli_fetch_assoc($result))
        {
                $name = $row['newrequest'];

            echo "<center><h2 class='city'>".$name."</a></h2></center>";


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
