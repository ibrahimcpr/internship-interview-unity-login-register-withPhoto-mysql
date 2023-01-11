<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/ayar.php');
if ($_POST['unity']=="Register"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $image=$_POST['image'];

    $result = mysqli_query($con,"SELECT username FROM users WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        echo "Kullanıcı adı zaten var";
    }else{
        $sorgu="INSERT INTO users (username,pasword,name,surname,age,image) VALUES ('$username', '$password', '$name', '$surname', '$age', '$image')";
        $sorguSonucu=mysqli_query($con,$sorgu);
        echo "Kayıt Başarılı";
        
    }
   
   
}

?>
