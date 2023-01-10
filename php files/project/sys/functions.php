<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/hamle/sys/ayar.php');
function login($usr,$pwd){
    global $con;
    if ($result = mysqli_query($con,"SELECT pasword FROM users WHERE username='$usr'")){
        if (mysqli_num_rows($result)>0){
            //username doru
            $row = mysqli_fetch_assoc($result);
            if ($pwd==$row['pasword']) {
                //doğru
            
                if ($result = mysqli_query($con,"SELECT * FROM users WHERE username='$usr'")){
              
                    
                

                    $row = mysqli_fetch_assoc($result);
                    if($row['status']=="Beklemede")
                    return ["success"=>false, "message"=>"Yönetici Kaydınızı Henüz Onaylamadı"];
                    if($row['status']=="Red")
                    return ["success"=>false, "message"=>"Yönetici Kaydınızı Reddetti"];



                    return ["success"=>true, "message"=>"Giris başarılı","age"=>$row['age'],"image"=>$row['image'],"status"=>$row['status'],"name"=>$row['name'],"surname"=>$row['surname'],"username"=>$row['username'],"id"=>$row['id']];
              }
             
            }else{
                //yanlıs
                return ["success"=>false, "message"=>"Şifre yanlış"];
            }

        }else{
            // username yanlıs
        return ["success"=>false, "message"=>"Kullanıcı adı yanlış"];
        }
    }

}
?>