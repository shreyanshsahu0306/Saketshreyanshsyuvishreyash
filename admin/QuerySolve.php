<?php
$server = "localhost";
$username ="root";
$password = "";
                      
$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con,'wedding');

if(!$con){
    die("conection faild".mysqli_connect_error());
}
$id = $_GET['id'];
//  UPDATE `query` SET `Status` = '0' WHERE `query`.`id` = 1;
$q = "UPDATE query SET Status = 1 WHERE id = $id ";
    // echo $q;
mysqli_query($con, $q);
header('Location: http://localhost/Saketshreyanshsyuvishreyash/admin/dashboard.php?Query=true')  

// mysqli_close($con);
?>