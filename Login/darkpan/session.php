<?php
include('conn.php');
session_start();
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM register WHERE email='$user_check' ");
$sql2 = mysqli_query($conn,"SELECT * FROM newsupload WHERE uin='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$email=$row['email'];
$session_username =$row['username'];
$session_phone = $row['phone'];
$session_email = $row['email'];

//$session_passport = $row['passport'];
// $session_uin = $row['uin'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




