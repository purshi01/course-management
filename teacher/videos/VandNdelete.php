<?php
include '../../con.inc.php';
$data=new database();
$data->connect();
if(isset($_GET['vid']))
{
      $id=$_GET['vid'];
      $query = "DELETE  FROM `video` WHERE vid='$id'";
      if(mysqli_query($data->con,$query))
      {
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('video deleted successfully')";
        echo "</script>";
        $URL="videos.php";
        echo "<script>location.href='$URL'</script>";
      }
}
else if(isset($_GET['nid']))
 {

          $id=$_GET['nid'];
          $query = "DELETE  FROM `notes` WHERE nid='$id'";
          if(mysqli_query($data->con,$query))
          {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Note deleted successfully')";
            echo "</script>";
            $URL="../notes.php";
            echo "<script>location.href='$URL'</script>";
          }
}
  else {
    echo "I DO NOT KNOW WHO YOU ARE!!!";
  }


 ?>
