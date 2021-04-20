<?php
session_start();
unset($_SESSION["email"]);
header("Location:http://localhost/Saketshreyanshsyuvishreyash/index.php");

//logout.php

// include('config.php');

//Reset OAuth access token
// $google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
// header('location:index.php');
?>