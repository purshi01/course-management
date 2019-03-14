<?php
SESSION_START();
if(isset($_SESSION['tid']))
{
include '../con.inc.php';
$data=new database();
$data->connect();
?>

<!DOCTYPE html>
<html>
<style>
.city
 {
  background-color: tomato;
  color: white;
  padding: 10px;
}
</style>
<body>
<?php

      if(isset($_POST['cname']) && isset($_POST['ctype']))
      {

              $cname = $_POST['cname'];
              $ctype = $_POST['ctype'];
                $tid = $_SESSION['tid'];
              $query1 = "SELECT * FROM `course` WHERE `cname`='".$cname."' AND `ctype`='".$ctype."'";
              $result = mysqli_query($data->con,$query1);
              $count = mysqli_num_rows($result);
                  if($count==1)
                  {
                    echo "<script language='javascript' type='text/javascript'>";
                    echo "alert('Course is already created if u want to modify videos click above link');";
                    echo "</script>";
                    $URL="cname.php";
                    echo "<script>location.href='$URL'</script>";
                  }

                else {


                              $query="INSERT INTO  `course` VALUE ('','$cname','$ctype','$tid')";
                              if(mysqli_query($data->con,$query))
                              {

                                      $cid = mysqli_insert_id($data->con);
                                          session_start();
                                          $_SESSION['sid'] = $cid;
                                          $_SESSION['tid'] = $tid;
                                          header("location:../teacher/videos/index.php");
                                          exit();

                              }
                              else
                               {
                                echo "<h1>Invalid entry</h1>" ;
                              }
                        }
       }
        else
        {

          echo "<h1>Fill the both details<br /></h1>";
        }

}
else
 {
  echo "I DO NOT KNOW WHO YOU ARE!!!!!!";
}


 ?>
</body>
</html>
