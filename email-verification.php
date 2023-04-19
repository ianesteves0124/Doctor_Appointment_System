

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/website icon.png">
    <title>Verify Account</title>
</head>
<body>
<?php
include 'database/connection.php';

if (isset($_POST['verify'])) {
    $email = $_POST['patient_email'];
    $verification_code = $_POST['verification_code'];

    $sql = "UPDATE patient WHERE SET email_verified_at = NOW() WHERE patient_email = '".$_GET['id']."''
    AND verification_code = '".$verification_code."'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn) == 0) {
        die ("Verification code failed.");
    }
    else{
        echo "<p> You are now verified, you can now login your account</p>";
        exit();
    }
}
?>
  <form method = "POST">
    <input type="hidden" name = "email" value = "<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder = "Enter code here" required>
    <input type="submit" name="verify" value="Verify Email">
  </form>  
</body>
</html>