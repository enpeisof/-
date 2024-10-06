<?php
   $fname=$_POST['fname'];
   $fmname=$_POST['fmname'];
   $rank=$_POST['rank'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $position=$_POST['position'];

   include "connect.php";

   $qry="INSERT INTO supervisor (password,fstname,fmlname,rank,position,email) VALUES ('$pass','$fname','$fmname','$rank','$position','$email')";
   mysqli_query($connect,$qry);
   
   $last_id = $connect->insert_id;

   // Redirect to the form page and pass the new supervisor's ID in the query string
   
   header("location: ../registerSUP.php?id=$last_id");

?>