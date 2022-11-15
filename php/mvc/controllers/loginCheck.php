<?php
    session_start();
    // include "db.php";
    // include_once "db.php";
    // require "db.php";
    require_once "../models/userModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = ['username'=>$username, 'password'=>$password];

    $status = login($user);

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: ../views/login.php?err=null&&msg=abc');
        //echo "test";
    }else if($status){
        $_SESSION['valid'] = 'true';
        $_SESSION['username'] = $username;
        header('location: ../views/home.php');
    }else{
        echo "invalid user";
    }

?>