<?php
$user = "localhost";
$name = "root";
$password = "";
$db ="gdepmec2023/2024";



$connect = mysqli_connect($user,$name,$password,$db);

if ($connect){
}else{
    echo "Connection failed";
    die();  
}
?>