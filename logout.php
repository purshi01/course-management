<?php
SESSION_START();
  if(isset($_SESSION['username']) || isset($_SESSION['admin']) || isset($_SESSION['tid']) || isset($_SESSION['sid']) || isset($_GET['cid'])) {
    SESSION_DESTROY();
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('Log Out Successfully');";
    echo "</script>";
    $URL="index.php";
    echo "<script>location.href='$URL'</script>";
  }
  else {
        header('location:./index.php') ;
  }
 ?>
