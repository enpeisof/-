<?php
   $fname=$_POST['fname'];
   $fmname=$_POST['fmname'];
   $rank=$_POST['rank'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $ac_grade=$_POST['ac_grade'];

   include "connect.php";

   $qry="INSERT INTO teacher (password,fstname,fmlname,rank,ac_grade,email) VALUES ('$pass','$fname','$fmname','$rank','$ac_grade','$email')";
   mysqli_query($connect,$qry);
   
   $last_id = $connect->insert_id;

   // Redirect to the form page and pass the new supervisor's ID in the query string
   
   header("location: ../registerTCH.php?id=$last_id");

?>