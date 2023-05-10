<?php
include 'database/connection.php';

if (isset($_POST['update'])) {
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    // Update the password in the database
    $sql = "UPDATE patient SET password = '$password' WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
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
                <td>
                    <br>
                    <input type="submit" name = "update" value="Update Password" class="login-btn btn-primary btn"> <br>
                    <input type="submit" value="Cancel" onclick = "location.href = 'login.php';" class="login-btn btn-primary btn">
                </td>
            </tr>
                </form>
</center>
</body>
</html>
