<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        //echo "null username/password/email";
        header('location: signup.php?err=null');

    }else { 
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "insert into users values('', '{$username}', '{$password}', '{$email}')";
        $status = mysqli_query($con, $sql);

        if($status){
            header('location: login.php');
        }else{
            echo "DB insert error!";
        }
        
    }


?>