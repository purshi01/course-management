<?php
include '../con.inc.php';
$data=new database();
$data->connect();

if (isset($_POST['subject']) && !empty($_POST['subject']))
{

      $username=$_POST['fname'];
      $country=$_POST['country'];
      $subject=$_POST['subject'];
  if(!empty($username) && !empty($country))
   {
      $query="INSERT INTO `contactrequest` VALUE ('', '$username','$country','$subject')";
  
        if(mysqli_query($data->con,$query))
        {
           echo "<script language='javascript' type='text/javascript'>";
           echo "alert('New record created successfully');";
           echo "</script>";
           $URL="../index.php";
           echo "<script>location.href='$URL'</script>";
        }
        else
         {
           echo "<script language='javascript' type='text/javascript'>";
           echo "alert('Given data is not proffer Re enter again');";
           echo "</script>";
           $URL="../index.php";
           echo "<script>location.href='$URL'</script>";
        }
   }
   else
    {
      echo "<script language='javascript' type='text/javascript'>";
      echo "alert('username name and country should be fill');";
      echo "</script>";
      $URL="../index.php";
      echo "<script>location.href='$URL'</script>";
   }
}
else {

  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('Fill the Proffer data buddy -_-');";
  echo "</script>";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";



}

?>
