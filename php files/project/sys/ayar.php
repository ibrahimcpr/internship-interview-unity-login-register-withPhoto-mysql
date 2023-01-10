<?php 
$host = '';
$username = '';
$password = '';
$db = '';
$con= mysqli_connect($host,$username,$password,$db);

if(mysqli_errno($con)){
    //Başarısız
    echo "başarısız";
}
mysqli_set_charset($con,'UTF8');

?>