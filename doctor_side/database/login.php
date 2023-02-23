<?php
session_start();
// $host = "localhost";  
// $user = "id20335682_das_db";  
// $password = "DaS!2022.+++";

// $db_name = "id20335682_appointment_system"; // CALLING FOR DATABASE IN WEBHOSTING

$host = "localhost";  
$user = "root";  
$password = "";

$db_name = "id20335682_appointment_system"; 

  $conn = mysqli_connect($host, $user, $password, $db_name);

  if(!$conn){
     echo "Connection failed!";
  }


if(isset($_POST['uname']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    
        $sql = "SELECT * FROM doctor_credential WHERE username = '$uname' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $uname && $row['password'] === $pass){
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../doctor_dashboard.php");
            }

            
        }else{
            header("Location: ../doctor_login_page.php?error= Incorrect Username or Password");
            exit();
        } 
}
else{
    
}
?>