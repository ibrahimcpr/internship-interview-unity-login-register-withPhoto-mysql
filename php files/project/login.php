<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/ayar.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/functions.php');
$request =["success" => false, "message" =>"","name"=>"","surname"=>"","id"=>"","image"=>"","age"=>"","status"=>""];
if(isset($_GET['usr']) && isset($_GET['pwd'])){
    if($_GET['usr'] != '' && $_GET['pwd'] !=''){
        //get başarılı
        $islem = login($_GET['usr'], $_GET['pwd']);
        
        if ($islem["success"]==true){
            $request["success"] = true;
            $request["message"] = $islem["message"];
            $request["name"] = $islem["name"];
            $request["surname"] = $islem["surname"];
            $request["age"] = $islem["age"];
            $request["username"] = $islem["username"];
            $request["id"]= $islem["id"];
            $request["image"]= $islem["image"];
            $request["status"]= $islem["status"];
        }else{
            $request["message"] = $islem["message"];
        }

        echo json_encode($request, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }else{
        $request["message"] = $islem["boş alan bıraktınız"];
        echo json_encode($request, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    }


?>
