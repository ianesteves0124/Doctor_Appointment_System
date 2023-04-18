<?php
include "../database/connection.php";

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

    $name= validate($_POST['doctor_name']);
    $email= validate($_POST['doctor_email']);
    $Description= validate($_POST['description']);
    $Contact= validate($_POST['contact']);
    $address= validate($_POST['clinic_address']);
    $password= validate($_POST['doctor_password']);
    $specialty = validate($_POST['specialty']);

    $sql1= "INSERT INTO `doctor`(`doctor_name`, `doctor_email`, `doctor_password`, `description`, `contact`, `clinic_address`, `specialty`)
     VALUES ('$name','$email','$password','$Description','$Contact','$address','$specialty')";
    $sql2= "INSERT INTO `website_user`(`Email`, `usertype`) 
    VALUES ('$email','p')";

    $result = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql2);

    if ($result) {
        header("Location: add_doctor.php?msg=Doctor added successfully");
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
            <form action = "" method = "POST">
                <td class = "label-td">
                    <label for="user_name" class = "form-label">Full Name:</label>
                </td>
        </tr>

        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text"name="user_name" id="user_name" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_email" class = "form-label">Email:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="email" class = "input-text"name="user_email" id="user_email" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_address" class = "form-label">Address:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text"name="user_address" id="user_address" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_contact" class = "form-label">Contact Number:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="text" class = "input-text"name="user_contact" id="user_contact" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_password" class = "form-label">Password:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="password" class = "input-text"name="user_password" id="user_password" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_password" class = "form-label">Confirm Password:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="password" class = "input-text"name="user_password" id="user_password" required>
            </td>
        </tr>

        <tr>
        <td class = "label-td">
                    <label for="user_dob" class = "form-label">Date of Birth:</label>
                </td>
        </tr>
        <tr>
            <td class = "label-td">
                <input type="date" class = "input-text" name="user_dob" id="user_dob" required>
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