<?php 
    //print_r($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "invalid username/password";
    }else if($username == $password){
        echo "valid user";
    }else{
        echo "invalid user!";
    }

?>