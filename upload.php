<?php

foreach($_FILES["images"]["tmp_name"] as $i=>$tmp){

    $name = basename($_FILES["images"]["name"][$i]);

    move_uploaded_file($tmp,"images/".$name);

}

header("Location: admin.php");