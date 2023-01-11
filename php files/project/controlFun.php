<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/ayar.php');
    
    function deger(){
        global $con;
        if ($result = mysqli_query($con,"SELECT * FROM users WHERE status='Beklemede'LIMIT 1")){
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0)
            return ["success"=>true, "message"=>"","age"=>$row['age'],"image"=>$row['image'],"status"=>$row['status'],"name"=>$row['name'],"surname"=>$row['surname'],"username"=>$row['username'],"id"=>$row['id']];
            else{
                return ["succes"=> false,"message"=> "Beklemede Kayıt İşlemi Bulunmuyor"];
               

        
    
            }

    }

}


    










?>
