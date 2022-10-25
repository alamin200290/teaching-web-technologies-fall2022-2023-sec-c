<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        //echo "null username/password/email";
        header('location: signup.php?err=null');

    }else {
        $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        $_SESSION['user'] = $user;
        
        header('location: login.php');

        // if(isset($_SESSION['users'])){
        //     $_SESSION['users'] = [];
        //     $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        //     $users = $_SESSION['users'];
        //     array_push($users, $user);
        //     $_SESSION['users'] = $users;
        // }else{
        //     $users = [];
        //     $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        //     $users = $_SESSION['users'];
        //     array_push($users, $user);
        //     $_SESSION['users'] = $users;
        // }
        //print_r($users);

      
    }


?>