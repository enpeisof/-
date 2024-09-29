<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, 
    initial-scale=1.0"
    />
    <title>GDEP Login Panel</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap"
    />
    <link rel="stylesheet" href="css/loginPanel.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>

  <body>
    <div class="wrapper">
      <div class="login-box">
        <center><h1>GDEP</h1></center>
        <div class="login-header">
          <span>superVisor</span>
        </div>
        <div class="error">
          <?php if (isset ($_GET['error'])) { ?>
          <h3 id="error">
            <?php echo $_GET['error'] ?>
          </h3>
          <?php } ?>
        </div>
        <form action="php/login.php" method="post" id="loginForm">
          <div class="input-box">
            <input
              type="number"
              id="user"
              class="input-field"
              name="userId"
              required
            />

            <label for="user" class="label">Matricule </label>
            <i class="bx bx-user icon"></i>
          </div>
          <div class="input-box">
            <input
              type="password"
              id="pass"
              class="input-field"
              autocomplete="off"
              name="password"
            />
            <label for="pass" class="label">Password</label>
            <i class="bx bx-lock-alt icon" id="show-password"> </i>
          </div>
          

          <div class="input-box">
            <input
              type="submit"
              class="input-submit"
              value="Login"
              id="input-submit"
              name="loginBtn"
              disabled
            />
          </div>
        </form>
      </div>
    </div>
    <script src="js/loginPanel.js"></script>
  </body>
</html>
