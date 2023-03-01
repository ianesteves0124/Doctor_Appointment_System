<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Side</title>
</head>
<body>
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
</body>
</html>