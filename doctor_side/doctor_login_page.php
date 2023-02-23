
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="doctor_login_page.css">
  <title>DAS: Login Account</title>
</head>
<body>
<div class="center">
<img class = "logo" src="../images/Doc App logo 2.png" alt="Website Logo" width="250" height="170">
    <h1>LOGIN ACCOUNT</h1>
    <form action = "database/login.php" method="post">
      <div class="txt_field">
        <input type="text" name = "uname" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name = "password" required>
        <span></span>
        <label>Password</label>
      </div>
      <?php if (isset($_GET['error'])) { ?>
        <p class = "error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
      <!-- <div class="pass">Forgot Password?</div> -->
      <!-- <input type="submit" onclick="location.href='doctor_dashboard.php'; " value="Login"> -->
      <button type = "submit">LOGIN</button>
    </form>
  </div>
  
  <button class="btnchangeuser" onclick = "location.href = '../main_page.php';" style="float:right">Change User</button> 
</body>
</html>