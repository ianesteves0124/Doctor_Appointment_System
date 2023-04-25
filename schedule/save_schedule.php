<?php 
include('../database/security.php');
$useremail = $_SESSION['user'];
$docsql = "SELECT * FROM doctor WHERE doctor_email = '".$_SESSION['user']."'";
$usersql = mysqli_query($conn,$docsql);
$user_fetch = mysqli_fetch_assoc($usersql);
$userid = $user_fetch['doctor_id'];
$username = $user_fetch["doctor_name"];
$user_spe = $user_fetch["specialty"];

if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('../doctor_side/doctor_dashboard.php') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `schedule_list` (`sched_doc_id`,`title`,`description`,`start_datetime`,`end_datetime`) VALUES ('$userid','$title','$description','$start_datetime','$end_datetime')";
}else{
    $sql = "UPDATE `schedule_list` set `sched_doc_id` = '{$userid}', `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('../doctor_side/doctor_dashboard.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>