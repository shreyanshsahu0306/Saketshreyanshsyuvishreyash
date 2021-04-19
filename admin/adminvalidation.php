<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'wedding');

$user = $_POST['SuperUserName'];
$pass =$_POST['SuperUserPass'];

$s = " select * from admin where SuperUserName ='$user' && SuperUserPass = '$pass'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    header("Location: validation.php");
    $_SESSION['SuperUserName'] = $user;
}else{
    echo"(
        <script LANGUAGE='JavaScript'>
    window.alert('Invalid Super User ! ');
    window.location.href='index.html'
    </script>
    )";
}
