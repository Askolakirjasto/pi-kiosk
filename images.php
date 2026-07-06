<?php

$dir="images/";

$images=[];

foreach(scandir($dir) as $file){

    if(preg_match('/\.(jpg|jpeg|png|gif|webp)$/i',$file)){
        $images[]=$file;
    }

}

header("Content-Type: application/json");

echo json_encode($images);

?>