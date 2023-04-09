<link rel="icon" type="image/png" href="../images/website icon.png">
<?php 
//include('header_nav.php'); ?> <!-- TO CALL TOP NAVIGATIONS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patient_side_css/login_form_patient.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doctor Appointment System</title>
</head>
<body>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Login using Social Media Account</h2>
      <!-- <div class="vl">
        <span class="vl-innertext">or</span>
      </div> -->

      <div class="col">
        <div class = "signin">
        <!-- <a href="home_page.php" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a> -->
        <a href="home_page.php" class="google btn"><i class="fa fa-google fa-fw"> </i> Login with Google+
          </a>
      </div>
</div>

      <!-- <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div> -->
      
    </div>
  </form>
</div>

<!-- <div class="bottom-container">
  <div class="row">
    <div class="col">
       <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div> -->


</body>
</html>