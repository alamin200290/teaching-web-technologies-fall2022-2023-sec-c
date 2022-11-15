<?php
    session_start();
    require_once('../models/userModel.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        //echo "null username/password/email";
        header('location: ../views/signup.php?err=null');

    }else { 
        $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
        $status = insertUser($user);
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB insert error!";
        }
        
    }


?>