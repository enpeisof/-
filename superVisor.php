
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/superVisorStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>SuperVisor</title>
</head>
<body>
    <?php include "php/navBar.php"?>
    <div class="container-fluid main ">
      <div class="fullBox grid  container">
        <div class="left text-center g-col-6 m-3 py-1">
          <div class="imgBox">
            <img src="img/adminLogo.jpg" alt="">
          </div>
          <div class="name">
            <h3 id="name"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></h3>
          </div>
          <div class="mat">
            <h4 id="mat"><?php echo $_SESSION['userId']?></h4>
          </div>
          <div class="section">
            <h4 id="section">SuperVisor</h4>
          </div>
        </div>

        <div class="right g-col-6 m-3 ">
          <table class="table  table-borderless table-hover table-dark">
            <tbody>
              <tr>
                <td><h4>Grade :</h4></td>
                <td><h5><?php echo $_SESSION['grade']?></h5></td>
              </tr>
              <tr>
                <td><h4>Poste :</h4></td>
                <td><h5><?php echo $_SESSION['poste']?></h5></h5></td>
              </tr>
              <tr>
                <td><h4>Email :</h4></td>
                <td><h5><?php echo $_SESSION['email']?></h5></h5></td>
              </tr>
              <tr>
                <td><h4>Password </h4></td>
                <td><h5><input type="password" value="<?php echo $_SESSION['password']?>" name="" id="passInput" disabled><button type="button" id="passtoggleBtn" onclick="togglePassword();" class="btn btn-danger"><i class="fa-solid fa-lock" id="show-password"></i>Toggle</button><button type="button" id="passChangeBtn" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#changePass">Change</button></h5></td>
                
              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="js/supervisorScript.js"></script>

    <div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="Change-Password" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-light" id="changePass">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="changePassForm" action="changePass.php" method="post" onsubmit="return checkPass();">
  <div class="mb-3">
    <label for="newPassword" class="form-label text-light">New Password</label>
    <input type="password" class="form-control" id="newPassword" aria-describedby="passHelp">
    <div id="passHelp" class="form-text text-light">Password Must not contain any specail Char</div>
  </div>
  <div class="mb-3">
    <label for="newPasswordConfirme" class="form-label">Password</label>
    <input type="password" class="form-control" id="newPasswordConfirme">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary text-center" type="submit" form="changePassForm">Change</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>