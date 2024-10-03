<?php
$user = "localhost";
$name = "root";
$password = "";
$db ="gdepinfo";



$connect = mysqli_connect($user,$name,$password,$db);

if ($connect){
}else{
    echo "Connection failed";
    die();  
}
?>