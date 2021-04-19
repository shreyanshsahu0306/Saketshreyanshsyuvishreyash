<?php
session_start();
$server = "localhost";
$username ="root";
$password = "";
                      
$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con,'wedding');

if(!$con){
    die("conection faild".mysqli_connect_error());
}

$VendorName = $_POST['VendorName'];
$VendorEmail = $_POST['VendorEmail'];
$VendorBusinessName = $_POST['VendorBusinessName'];
$BusinessCategory = $_POST['BusinessCategory'];
$VendorContact = $_POST['VendorContact'];
$VendorCharges = $_POST['VendorCharges'];
$VendorLocation = $_POST['VendorLocation'];
$VendorOtherDetails = $_POST['VendorOtherDetails'];
$VendorImg = $_POST['VendorImg'];

$sql = "INSERT INTO `vendors_testing`(`name`, `email`, `businessName`, `contact`, `category`, `ServiceCharge`, `Location`, `OtherDetails`, `image`) 
        VALUES ('$VendorName','$VendorEmail','$VendorBusinessName','$VendorContact','$BusinessCategory','$VendorCharges','$VendorLocation','$VendorOtherDetails','$VendorImg')";

// echo "$sql";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    // $_SESSION['user'] = $user ;
  } 
  else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();
?>