<?php 

    $data = $_REQUEST['json'];
    $user = json_decode($data);
    echo $user->name;
    
    // sleep(4);
    // if($name != null){
    //     echo "Success";
    // }else{
    //     echo "Null value...";
    // }
    //$user = ['id' => 12, 'name'=> 'alamin'];
    //echo json_encode($user);
?>