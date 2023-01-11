<?php  

require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/ayar.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/project/controlFun.php');

    $islem = deger();

    $request =["success" => false, "message" =>"","name"=>"","surname"=>"","id"=>"","image"=>"","age"=>"","status"=>""];
    if ($islem["success"]==true){
        $request["success"] = true;
        $request["message"] = $islem["message"];
        $request["name"] = $islem["name"];
        $request["surname"] = $islem["surname"];
        $request["age"] = $islem["age"];
        $request["id"]= $islem["id"];
        $request["image"]= $islem["image"];
        $request["status"]= $islem["status"];
        $request["username"]= $islem["username"];


    }
    echo json_encode($request, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    ?>
