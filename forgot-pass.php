<?php
include 'database/connection.php';

if (isset($_POST['update'])) {
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    // Check if the email exists in the database
    $checkEmailQuery = "SELECT * FROM patient WHERE patient_email = '$email'";
    $emailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($emailResult) > 0) {
        // Email exists, update the password
        $updatePasswordQuery = "UPDATE patient SET patient_password = '$password' WHERE patient_email = '$email'";
        $updateResult = mysqli_query($conn, $updatePasswordQuery);

        if ($updateResult) {
            echo "<script> alert('Your password updated successfully!'); location.replace('login.php') </script>";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    } else {
        // Email does not exist in the database
        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email does not exist</label>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="images/website icon.png">
    <title>Forgot Password | Doctor Appointment System</title>
</head>
<body>
<center>
<div class="login_container" style="cursor: default;">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Create New Password</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <form action="" method="POST" >
                <td class="label-td">
                    <label for="useremail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email" name="useremail" class="input-text" placeholder="Email Address" required>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <label for="userpassword" class="form-label">New Password: </label>
                </td>
            </tr>

            <tr>
                <td class="label-td">
                    <input type="Password" name="userpassword" class="input-text" placeholder="Password" required>
                </td>
            </tr>

            <tr>
                <td><br>
                <?php echo $error ?>
                </td>
            </tr>
    
            <tr>
                <td>
                    <input type="submit" name = "update" value="Update Password" class="login-btn btn-primary btn"> <br>
                    <input type="submit" value="Cancel" onclick = "location.href = 'login.php';" class="login-btn btn-primary btn">
                </td>
            </tr>
                </form>
</center>
</body>
</html>
