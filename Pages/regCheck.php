<?php
    session_start();
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $dp = $_POST['dp'];

    if($username == "" || $password == "" || $email == ""){
        //echo "null username/password/email";
        header('location: Signup.php?err=null');

    }else {
        $user = ['username'=> $username, 'name'=> $name, "password"=> $password, "email"=> $email, "gender"=> $gender, "dob"=>$dob, "dp"=>$dp];
        $_SESSION['user'] = $user;
        
        header('location: Login.php');
    }


?>