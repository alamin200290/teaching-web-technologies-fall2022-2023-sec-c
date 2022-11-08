<?php 

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "success";
    // }else{
    //     echo "DB connection error!";
    // }

    $sql ="select * from users";
    $result = mysqli_query($con, $sql);
    echo mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }

?>