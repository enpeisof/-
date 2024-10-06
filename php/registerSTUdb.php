<?php
   $id=$_POST['id'];
   $fname=$_POST['fname'];
   $fmname=$_POST['fmname'];
   $rank=$_POST['rank'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $position=$_POST['position'];

   include "connect.php";

   $qry="INSERT INTO student (userId,password,nom,prenom,grade,poste,email) VALUES ($id,'$pass','$fname','$fmname','$rank','$position','$email')";
   mysqli_query($connect,$qry);
   header("location: ../registerSTU.php");

?>