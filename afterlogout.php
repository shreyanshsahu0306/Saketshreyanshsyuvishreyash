<?php
session_start();
unset($_SESSION["email"]);
header("Location:index-2.php");
?>