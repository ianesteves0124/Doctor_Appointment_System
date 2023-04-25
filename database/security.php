<?php
session_start();
include('connection.php');

if($conn){

}
else{
    header("Location: connection.php");
}
?>