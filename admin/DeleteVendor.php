<?php

$server = "localhost";
$username ="root";
$password = "";
                      
$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con,'wedding');

$id = $_GET['id'];

$q = "delete from `vendors_testing` where id = $id";
mysqli_query($con, $q);
header('location: http://localhost/Saketshreyanshsyuvishreyash/admin/dashboard.php?vendordata=true')
?>