<?php
session_start();
if ($_SESSION['set']!=1){
    header ('location: ../index.php');
    exit();
}
session_unset();
session_destroy();
header("location: ../index.php");
die();
?>