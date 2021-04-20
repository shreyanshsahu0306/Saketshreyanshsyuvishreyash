<?php

session_start();

$email ="";
$errors = array();

// connect to database
//$conn = mysqli_connect('localhost','root','','weddingz');

include 'config.php';

// REGISTER USER
if(isset($_POST['reg_user'])){
    // receive all input from user
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    // form validation to check that form is correctly filled
    if(empty($fullname)) { array_push($errors, "NAME IS REQUIRED");}
    if(empty($phonenumber)) { array_push($errors, "PHONE-NUMBER IS REQUIRED");}
    if(empty($email)) { array_push($errors, "E-MAIL IS REQUIRED");}
    if(empty($password)) { array_push($errors, "PASSWORD IS REQUIRED");}

    if($password != $confirmpassword){
        array_push($errors, "THE TWO PASSWORDS DO NOT MATCH");
    }

    // user with same email should not be already exits

    $user_check_query = "SELECT * FROM users WHERE EMAIL = '$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['EMAIL'] === $email){
            array_push($errors, "EMAIL ALREADY EXITS");
            // echo"(<script LANGUAGE='JavaScript'>
            // window.alert('EMAIL ALREADY EXITS');
            // window.location.href='signup.php'
            // </script>)";
        }
    }

    if(count($errors)==0){
        $user = "user";
        $query = "INSERT INTO `users`( `FULLNAME`, `EMAIL`, `PHONE`, `PASSWORD`) VALUES ('$fullname','$email','$phonenumber','$password')";
        mysqli_query($conn, $query);

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
    include 'errors.php';
}

// LOGIN USER 

if(isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $result = mysqli_query($conn, $query);
    if ((mysqli_num_rows($result)) == 1){
        
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      //  $_SESSION['user'] = $login_user;
    }
    // if admin login
    elseif($email == 'admin@123' && $password == 'admin123'){
        $_SESSION['email'] = $email;
        header('location:admin/dashboard.php');
    }
    else{
       // array_push($errors, "Wrong username/password combination");
       echo"(<script LANGUAGE='JavaScript'>
    window.alert('Invalid User ! Please SIGN-UP');
    window.location.href='login.php'
    </script>)";
    }
    include 'errors.php';

}

?>