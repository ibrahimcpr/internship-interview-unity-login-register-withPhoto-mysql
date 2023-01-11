<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/project/sys/ayar.php');
if ($_POST['unity']=="Onayla"){
    $username=$_POST['username'];
    $status="Onaylandı";

    $update = mysqli_query($con,"UPDATE users SET status='Onaylandı' WHERE username='$username'");
  



}

if ($_POST['unity']=="Red"){
    $username=$_POST['username'];
    $status="Red";
    echo "red";
    $result = mysqli_query($con,"UPDATE users SET status='Red' WHERE username='$username'");
    
   
   
}


?>
