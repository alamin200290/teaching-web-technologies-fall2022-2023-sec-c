<?php 

    $name = $_REQUEST['name'];

    sleep(4);

    if($name != null){
        echo "Success";
    }else{
        echo "Null value...";
    }

?>