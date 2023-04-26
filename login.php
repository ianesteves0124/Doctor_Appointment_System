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
    <title>Login Account</title>
    
</head>
<body>
<?php
    include("database/security.php");

if(isset($_POST['login']))
{

    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    $_SESSION['useremail'] = $email;

    $sql = "SELECT * FROM website_user WHERE Email = '$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);
        $utype=$row['usertype'];

        if($utype=='a')
        {
            $sql = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) == 1)
            {
                //   For Admin dashbord
                $_SESSION['user']=$email;
                $_SESSION['usertype']='a';

                header('Location: admin_side/admin_dashboard.php');

            }
            else
            {
                $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
            }

        }
        elseif($utype =='d')
        {
            $sql = "SELECT * FROM doctor WHERE doctor_email='$email' AND doctor_password='$password'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) == 1)
            {
                //  For Doctor dashbord
                $_SESSION['user']=$email;
                $_SESSION['usertype']='d';
                header("Location: doctor_side/doctor_dashboard.php?");
            }
            else
            {
                $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
            }

        }
        elseif ($utype == 'p') {
            $sql = "SELECT * FROM patient WHERE patient_email = '$email' AND patient_password = '$password'";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_object($result);
            
               
                    if ($user){
                        if($user->email_verified_at != null)
                        {
                            $_SESSION['user']=$email;
                            $_SESSION['usertype']='p';
                            header("Location: patient_side/home_page.php?");
                        }
                    }
                    else{
                        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                    }
                    
        }
        
    }
    else
    {
        $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">We cant found any acount for this email.</label>';
    }

}
else
{
    $error='<label for="promter" class="form-label">&nbsp;</label>';
}
?>

    <center>
    <div class="login_container" style="cursor: default;">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Welcome Back!</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                    <p class="sub-text">Login with your account to continue</p>
                </td>
            </tr>
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
                    <label for="userpassword" class="form-label">Password: </label>
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
                    <input type="submit" name = "login" value="Login" class="login-btn btn-primary btn"> <br>
                    <input type="submit" value="Cancel" onclick = "location.href = 'index.html';" class="login-btn btn-primary btn">
                </td>
            </tr>
        </div>
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Don't have an account&#63; </label>
                    <a href="signup.php" class="link-item">Sign Up</a>
                    <br><br><br>
                </td>
            </tr>       
                    </form>
        </table>

    </div>
</center>
</body>
</html>