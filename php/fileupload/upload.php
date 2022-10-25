<?php 

    //print_r($_FILES);

    $src= $_FILES['image']['tmp_name'];
    $dst = "upload/".$_FILES['image']['name'];

    if(move_uploaded_file($src, $dst)){
        echo "Success";
    }else{
        echo "Error";
    }
?>