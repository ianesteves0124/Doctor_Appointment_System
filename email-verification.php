<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/website icon.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Verify Account</title>
</head>
<body>
<?php
include 'database/connection.php';

if (isset($_POST["verify"]))
    {
        $email = $_POST["email"];
        $verification_code = $_POST["verification_code"];
 
 
        // mark email as verified
        $sql = "UPDATE patient SET email_verified_at = NOW() WHERE patient_email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
        $result  = mysqli_query($conn, $sql);
 
        if (mysqli_affected_rows($conn) == 0)
        {
            die("Verification code failed.");
        }
 
        echo "<p>You can login now.</p> <a href='login.php'>HERE</a>";
        exit();
    }
?>

  <center>
    <div class="login_container" style="margin-top:50px; padding-top:20px; padding-bottom:20px;">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text" style="font-size:30px; margin-bottom:30px;">Welcome to our the best Doctor's Appointment System</p>
                </td>
            </tr>
            <div class="form-body">
                <tr>
                    <td>
                        <p class="sub-text" style="font-size:15px; font-weight:400; letter-spacing: 1px;">Before you access the website, let's first validate your email.</p>
                    </td>
                </tr>
                <tr>
                    <td class="label-td" style="text-align:center;">
                        <label for="verification_code" class="form-label">Verification Code:</label>
                    </td>
                </tr>

                <tr>
                    <td class="label-td" style="text-align:center;">
                    <form method = "POST">
                        <input type="hidden" name = "email" value = "<?php echo $_GET['email']; ?>" required>
                        <input type="text" name="verification_code" class="form-control" placeholder="Enter the code here" required>
                        <br>
                        <input type="submit"  class="btn btn-primary" name="verify" value="Verify Email">
                        <br>
                    </form>
                    </td>
                </tr>
            </div>   
        </table>
    </div>
  </center>



</body>
</html>