<?php
SESSION_START();
include '../con.inc.php';
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

if (isset($_POST['email']) && isset($_POST['passvalue']))
{

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $username=$fname.$lname;
      $dob=$_POST['dob'];
      $phonenum=$_POST['phonenum'];
      $collegname=$_POST['collegename'];
      $email=$_POST['email'];
      $pass=$_POST['passvalue'];

    if(!empty($username) && !empty($pass))
      {

                $query="INSERT INTO `student` VALUE ('', '$username','$email','$collegname','$pass','$phonenum','$dob')";
                if(mysqli_query($data->con,$query))
                {
                  $_SESSION['username']=$email;
                  echo '<script language="javascript">';
                 echo 'alert("signup successfull now u can Log in -_-")';
                  echo '</script>';
                  $URL="../main.php";
                  echo "<script>location.href='$URL'</script>";
                }
                else
                 {
                    echo '<script language="javascript">';
                    echo 'alert("Provide proffer data buddy!!!!!!!")';
                    echo '</script>';
                    $URL="../index.php";
                    echo "<script>location.href='$URL'</script>";

                 }
   }
}
else
{
echo '<script language="javascript">';
echo 'alert("INCORRECT DATA!!!!!!!!!!!!!!!!!")';
echo '</script>';
$URL="../index.php";
echo "<script>location.href='$URL'</script>";

}
  ?>
</body>
</html>
