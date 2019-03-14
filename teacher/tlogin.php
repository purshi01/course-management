<?php

SESSION_START();
include '../con.inc.php';
$data=new database();
$data->connect();
if (isset($_POST['email']) && isset($_POST['passvalue']))
{

  $tname=$_POST['email'];
  $pass=$_POST['passvalue'];
  if(!empty($tname) && !empty($pass))
  {

    $query="SELECT * FROM `teacher` WHERE `email`='".$tname."' AND `password`='".$pass."'";
    $query_run=mysqli_query($data->con,$query);
    $count=mysqli_num_rows($query_run);
    if($count==1)
    {
             $row = mysqli_fetch_assoc($query_run);
              $_SESSION['tid'] = $row['tid'];
               header('location:../courses/cname.php');

      }
    else
    {

      echo "<script language='javascript' type='text/javascript'>";
      echo "alert('Incorrect  username and password ');";
      echo "</script>";
      $URL="../index.php";
      echo "<script>location.href='$URL'</script>";
  }

}else {

    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Usename and password should not be blank');";
    echo "</script>";
    $URL="../index.php";
    echo "<script>location.href='$URL'</script>";
}

}


?>
