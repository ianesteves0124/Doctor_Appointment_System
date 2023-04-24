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
<?php
include "database/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


session_start();

if(isset($_POST['register']))
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

    
    try
    {
        $mail = new PHPMailer(true);
        //SERVER Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'das.online2023@gmail.com';
        $mail->Password = 'fsidifhnqdwdjvqe';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPDebug = 2; // enable debug output
        

        //CONTENT
        $mail->isHTML(true);
        $mail->setFrom('ianmiles.esteves@gmail.com','Doctors Appointment System');
        $mail->addAddress($email,$name);
        $mail->Subject = 'Doctors Appointment System Email Verification';
        $verification_code = substr(number_format(time() * rand(), 0, '', '',), 0, 6);
        $mail->Body    = '<p>Your verification code is: <b style = "font-size: 30px;">' . $verification_code . '</b></p>';

        $mail->send();
        header("Location: login.php?msg=user-account-created-succesfully");
        

        $sql1= "INSERT INTO `patient`(`patient_name`, `patient_email`, `patient_address`, `patient_contact`, `patient_password`, `patient_dob`,  `verification_code`, `email_verified_at`) 
        VALUES ('$name','$email','$address','$Contact','$password','$dob','$verification_code',NULL)";
        $sql2= "INSERT INTO `website_user`(`Email`, `usertype`) 
        VALUES ('$email','p')";

    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);
    
    // if ($result) {
    //     // header("Location: login.php?msg=account created successfully");
    //     echo "<script> alert('Congratulations! your account has been successfully created.'); location.replace('login.php') </script>";
    // }
    }
    catch (Exception $e) 
     {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
}
?>
    <center>
    <div class = "login_container" style="cursor: default;">
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
                <input type="date" class = "input-text" name="patient_dob" ><br>
            </td>
        </tr>
    
        <tr>
            <td>
            <input type="submit"  name = "register" value="Sign up" class="login-btn btn-primary btn"> <br>
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