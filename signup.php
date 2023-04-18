<?php
include "database/connection.php";

session_start();

if($_POST)
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name= validate($_POST['patient_name']);
    $email= validate($_POST['patient_email']);
    $address = validate($_POST['patient_address']);
    $Contact = validate($_POST['patient_contact']);
    $password = validate($_POST['patient_password']);
    $dob = validate(date('Y-m-d',strtotime($_POST['patient_dob'])));


    $sql1= "INSERT INTO `patient`(`patient_name`, `patient_email`, `patient_address`, `patient_contact`, `patient_password`, `patient_dob`) 
    VALUES ('$name','$email','$address','$Contact','$password','$dob')";
    $sql2= "INSERT INTO `website_user`(`Email`, `usertype`) 
    VALUES ('$email','p')";

    $result = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql2);

    if ($result) {
        header("Location: login.php?msg=account created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
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
    <link rel="stylesheet" href="css/signup.css">
    <link rel="icon" type="image/png" href="images/website icon.png">
    <title>Create Account</title>
</head>
<body>
    <center>
    <div class = "login_container">
    <table border = "0" style = "margin: 0; padding: 0; width: 60%;">
        <tr>
            <td>
                <p class = "header-text">Create an Account</p>
            </td>
        </tr>
    <div class = "form-body">
        <tr>
            <td>
                <p class = "sub-text">NOTE: FOR PATIENT ONLY!</p>
            </td>
        </tr>
        <tr>
            <form style = "font-family: monospace;" method = "POST">
                <td class = "label-td">
                    <label class = "form-label">Full Name:</label>
                </td>
        </tr>

        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text" name="patient_name" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label class = "form-label">Email:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="email" class = "input-text" name="patient_email" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label class = "form-label">Address:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text" name="patient_address" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label class = "form-label">Contact Number:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text" name="patient_contact" required>
            </td>
        </tr>

        <!-- <tr>
        <td class = "label-td">
                    <label class = "form-label">Password:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="password" class = "input-text" name="" required>
            </td>
        </tr> -->

        <tr>
        <td class = "label-td">
                    <label class = "form-label">Password:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="password" class = "input-text" name="patient_password" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label class = "form-label">Date of Birth:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="date" class = "input-text" name="patient_dob" >
            </td>
        </tr>
    
        <tr>
            <td>
            <input type="submit" value="Sign up" class="login-btn btn-primary btn"> <br>
            <input type="submit" value="Cancel" onclick = "location.href = 'index_main.html';" class="login-btn btn-primary btn">
            </td>
        </tr>
        </div>
        
        <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an Account&#63; </label>
                    <a href="login.php" class="link-item">Login</a>
                    <br><br><br>
                </td>
            </tr>  
         </form>

    </table>
    </div>
    </center>
</body>
</html>