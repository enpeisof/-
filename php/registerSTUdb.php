<?php
  
   $fname=$_POST['fname'];
   $fmname=$_POST['fmname'];
   $year=$_POST['year'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $groupe=$_POST['groupe'];

   include "connect.php";

   $qry="INSERT INTO student (password,fstname,fmlname,year,groupe,email) VALUES ('$pass','$fname','$fmname',$year,'$groupe','$email')";
   mysqli_query($connect,$qry);

   $last_id = $connect->insert_id;

   header("location: ../registerSTU.php?id=$last_id");

?>