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
    $query="SELECT * FROM `student` WHERE `email`='".$username."' AND `password`='".$pass."'";
    $query_run=mysqli_query($data->con,$query);
    $count=mysqli_num_rows($query_run);
    if($count==1)
    {

      $_SESSION['username']=$username;

        header('location:../main.php');
    }
    else
    {
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('First sign up then try to sign in buddy!!!');";
    echo "</script>";
    $URL="../index.php";
    echo "<script>location.href='$URL'</script>";
  }

  }
}

?>
