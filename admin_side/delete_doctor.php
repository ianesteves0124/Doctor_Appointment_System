<?php
include "../database/connection.php";
session_start();

if (!isset($_GET['do']) || $_GET['do'] != 1) {
    
    switch($_GET['type']){
        case 'doctor':

            $query_del =  "SELECT * FROM `doctor` WHERE `doctor_id` = '".$_GET['id']."'";
            $result_del = mysqli_query($conn,$query_del);
            $email = mysqli_fetch_assoc($result_del)['doctor_email'];
            
            $sql = "DELETE FROM `doctor` WHERE `doctor_id` = '".$_GET['id']."'";
            $sql1 = "DELETE FROM `website_user` WHERE `website_user`.`Email` = '".$email."'";
            $result = mysqli_query($conn,$sql);
            $result = mysqli_query($conn,$sql1);
            
            if ($result) {
                echo "<script> alert('Deleted Successfully!'); location.replace('admin_doctor.php') </script>";
            }
            else {
                echo "Failed: " . mysqli_error($conn);
            }
    }
}

?>