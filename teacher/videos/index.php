<?php
include "../../con.inc.php";
$data=new database();
$data->connect();
SESSION_START();
if((isset($_SESSION['sid']) && !empty($_SESSION['sid'])) || isset($_POST['cid']))
{

?>
<style media="screen">
.container {
    border-radius: 300px;
    background-color: #80d4ff;
    padding: 10px;
    max-height: 400px;
}
body
{
  background-image: url(http://c8.alamy.com/comp/J5GW7T/online-courses-sign-on-white-paper-man-hand-holding-paper-with-text-J5GW7T.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-color: #ffffff ;
}
input[type=file],input[type=text]{
padding: 10px 10px 10px 10px;
margin: 25px 300px 30px 330px;
background-color: white;
border: 1px solid #DDDDDD;
height: 40px;
width: 700px;
font-size: 24px;
font-family: cursive;
}
input[type=submit] {
padding: 10px 0px 10px 10px;
margin: 50px 300px 30px 550px;
border: 1px solid #DDDDDD;
background-color: #4CAF50;
height: 40px;
width: 200px;
font-size: 20px;
font-family: cursive;
}
.vid{
margin: 100px 0px 10px 100px;
}

</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Video uploaded and playback videos</title>
  </head>
  <body>
    <?php
    if(empty($_SESSION['sid']))
    {
      $_SESSION['cid'] = $_POST['sid'];

    }
    else {
        $_SESSION['cid'] = $_SESSION['sid'];

    }
     ?>

<form  action="index.php" method="post" enctype="multipart/form-data">
<div class="container">
    <h2> <a class="vid" href="videos.php">Uploaded Videos</a><a href="../../logout.php" style="float:right;">Logout&emsp;&emsp;&emsp;</a></h2>
  <?php
echo "<center><h1>Upload Videos Here</h1></center>";
?>
<input type="hidden" name="sid" value="<?php
if(empty( $_SESSION['sid']))
{
  echo $_POST['sid'];
}
else {
  echo  $_SESSION['sid'];
}
?>">
<input type="text" name="topic" placeholder="Topic">
<input type="file" name="file" value="Browser">
<input type="submit" name="submit" value="Upload">
</form>

<form  action="index.php" method="post" enctype="multipart/form-data">
<div class="container">
  <?php

  echo "<h2> <a class='vid' href='../notes.php'>Uploaded notes</a></h2>";

echo "<center><h1>Upload Notes here</h1></center>";
?>
<input type="hidden" name="sid" value="<?php
if(empty( $_SESSION['sid']))
{
  echo $_POST['sid'];
}
else {
  echo  $_SESSION['sid'];
}
?>">
<input type="text" name="topic" placeholder="Topic">
<input type="file" name="file" value="Browser">
<input type="submit" name="notes" value="Upload">
    <br />
</div>
</form>

  <?php
  if(isset($_POST['submit']))
  {
            if(isset($_POST['sid']) && !empty($_POST['sid']))
             {
                             $name=$_POST['topic'];
                             $temp=$_FILES['file']['tmp_name'];
                             $file_type = $_FILES['file']['type'];
                             $tid=$_SESSION['tid'];
                             $cid=$_POST['sid'] ;
                             if (!empty($name))
                             {
                               if (($file_type == "video/webm") || ($file_type == "video/mp4") || ($file_type == "video/ogv"))
                                {
                                              if ($_FILES['file']['error'] > 0)
                                                    {
                                                      echo "<script language='javascript' type='text/javascript'>";
                                                      echo "alert('Unexpected error occured, please try again later');";
                                                      echo "</script>";
                                                    }
                                                    else {
                                                                if (file_exists("../teacher/videos/uploaded/".$name))
                                                                {
                                                                  echo "<script language='javascript' type='text/javascript'>";
                                                                  echo "alert('.$name. name Already exists !!!');";
                                                                  echo "</script>";

                                                                }
                                                                else {

                                                                          move_uploaded_file($temp,"uploaded/".$name);
                                                                          $url="http://localhost/course/teacher/videos/uploaded/$name";
                                                                           $query="INSERT INTO `video` VALUE ('', '$name','$url','$cid','$tid')";
                                                                           if(mysqli_query($data->con,$query))
                                                                           {
                                                                             echo "<script language='javascript' type='text/javascript'>";
                                                                             echo "alert('Video uploaded successfull');";
                                                                             echo "</script>";

                                                                            }

                                                                     }
                                                          }
                                }

                                  else {
                                    echo "<script language='javascript' type='text/javascript'>";
                                    echo "alert('Invalid video format!!!!!');";
                                    echo "</script>";
                                      }


                            }
                              else {

                                echo "<script language='javascript' type='text/javascript'>";
                                echo "alert('Plzzz select a video to upload');";
                                echo "</script>";

                              }

           }


  }


        else if(isset($_POST['notes']))
          {
               if(isset($_POST['sid']) && !empty($_POST['sid']))
                {
                                $name=$_POST['topic'];
                                $temp=$_FILES['file']['tmp_name'];
                                $file_type = $_FILES['file']['type'];
                                $tid=$_SESSION['tid'];
                                $cid=$_POST['sid'] ;
                                if (!empty($name))
                                {
                                  if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "application/pdf"))
                                   {
                                                 if ($_FILES['file']['error'] > 0)
                                                       {

                                                           echo "<script language='javascript' type='text/javascript'>";
                                                           echo "alert('Unexpected error occured, please try again later');";
                                                           echo "</script>";
                                                       }
                                                       else {
                                                                   if (file_exists("../teacher/notes/uploaded/".$name))
                                                                   {
                                                                     echo "<script language='javascript' type='text/javascript'>";
                                                                     echo "alert('.$name. name Already exists !!!');";
                                                                     echo "</script>";

                                                                   }
                                                                   else {
                                                                     echo "<script language='javascript' type='text/javascript'>";
                                                                     echo "alert('Notes uploaded unsuccessfull');";
                                                                     echo "</script>";
                                                                             move_uploaded_file($temp,"../notes/uploaded/".$name);
                                                                             $url="http://localhost/course/teacher/notes/uploaded/$name";
                                                                              $query="INSERT INTO `notes` VALUE ('', '$name','$url','$cid','$tid')";
                                                                              if(mysqli_query($data->con,$query))
                                                                              {
                                                                                echo "<script language='javascript' type='text/javascript'>";
                                                                                echo "alert('Notes uploaded successfull');";
                                                                                echo "</script>";
                                                                               }

                                                                        }
                                                             }
                                   }
                                     else {
                                       echo "<script language='javascript' type='text/javascript'>";
                                       echo "alert('Invalid notes format!!!!!');";
                                       echo "</script>";
                                         }


                               }
                                 else {

                                   echo "<script language='javascript' type='text/javascript'>";
                                   echo "alert('Plzzz select a notes to upload');";
                                   echo "</script>";

                                 }

              }
     }
}
  else {
    echo "<center><h1>Seriously I do NoT KnOw WhO yOu ArE BUDDY!!!!!!</center></h1>";
  }
  ?>


  </body>
</html>
