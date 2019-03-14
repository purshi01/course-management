
<?php
SESSION_START();
include '../con.inc.php';
$data=new database();
$data->connect();
if (isset($_POST['email']) && isset($_POST['passvalue']))
{
  $username=$_POST['email'];
  $pass=$_POST['passvalue'];
  if(!empty($username) && !empty($pass))
  {
    $query="SELECT * FROM `admin` WHERE `email`='".$username."' AND `password`='".$pass."'";
    $query_run=mysqli_query($data->con,$query);
    $count=mysqli_num_rows($query_run);
    if($count==1)
    {
      $_SESSION['admin']=$username;
       header('location:addteacher.php');
    }
    else
     {
       echo "<script language='javascript' type='text/javascript'>";
       echo "alert('Incorrect  username and password ');";
       echo "</script>";
       $URL="../index.php";
       echo "<script>location.href='$URL'</script>";
    }
}
}

?>
