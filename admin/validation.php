<?php
session_start();
if (isset($_SESSION['SuperUserName'] )) {
  header("Location:dashboard.php");
}
else{
    header("Location:index.html");
}

?>
