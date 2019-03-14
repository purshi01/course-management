<?php
include '../con.inc.php';
$data=new database();
$data->connect();
if (isset($_POST['subject']) && !empty($_POST['subject']))
{
  $text=$_POST['subject'];
  if(!empty($text)&& $text!='    ')
  {
    $query="INSERT INTO newrequest (newid,newrequest) VALUES ('','$text')";
    if(mysqli_query($data->con,$query))
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Thank you for your new Course Request');";
    echo "</script>";
    $URL="../index.php";
    echo "<script>location.href='$URL'</script>";

  }
    else
    {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('text should not be null');";
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
