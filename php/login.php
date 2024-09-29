<?php
include "connect.php";
if ($connect){
if (isset($_POST['loginBtn'])){
    if(isset($_POST['userId'])){
        if(isset($_POST['password'])){
            $user = $_POST['userId'];
            $pass = $_POST['password'];
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user)){
                
                header("location: ../index.php?error=userId  contains special characters");
                exit();
            }
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass)){
                
                header("location: ../index.php?error=passWord contains special characters");
                exit();
            }

            $checkUserQuery = "select * from supervisor where $user = userId";
            $checkUserLog = mysqli_query($connect,$checkUserQuery);
            if (mysqli_num_rows($checkUserLog)===1){
                $checkUserPassQuery = "select * from supervisor where $user = userId and '$pass' = password";
                $checkUserPassLog = mysqli_query($connect,$checkUserPassQuery);
                if (mysqli_num_rows($checkUserPassLog) === 1){
                    $userInfo = mysqli_fetch_assoc($checkUserPassLog);
                    if($userInfo['password']!= $pass){
                        header("location: ../index.php?error=Password Is Wrong");
                        exit();
                    }
                    if($userInfo['userId']!= $user){
                        header("location: ../index.php?error=userId Is Wrong");
                        exit();
                    }
                    session_id("superVisor");
                    session_start();   
                    $_SESSION['set']=1;
                    $_SESSION['userId'] = $user;
                    $_SESSION['password'] = $pass;
                    $_SESSION['nom'] = $userInfo['nom'];
                    $_SESSION['prenom'] = $userInfo['prenom'];
                    $_SESSION['grade'] = $userInfo['grade'];
                    $_SESSION['poste'] = $userInfo['poste'];
                    $_SESSION['email'] = $userInfo['email'];
                    header("location: ../home.php");
                    exit();

                }else{
                    header("location: ../index.php?error=Password Is Wrong");
                    exit();
                }

            }else{
                header("location: ../index.php?error=user Do Not Exist");
                exit();
            }




        }else{
            header("location: ../index.php?error=passWord Empty Or Invalid");
            exit();
        }



    }else{
        header("location: ../index.php?error=UserId Empty Or Invalid");
        exit();
    }
}else{
    header("location: ../index.php?error=Acces Denied");
    exit();
}





}




?>