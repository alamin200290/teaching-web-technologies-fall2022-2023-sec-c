<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: login.php?err=null&&msg=abc');
    }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
        //$_SESSION['status'] = 'true';
        setcookie('status', 'true', time()+3600, '/');
        header('location: home.php');
    }else{
        echo "invalid user";
    }


?>