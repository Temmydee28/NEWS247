<?php
include('conn.php');
session_start();
$user_check=$_SESSION['uin'];

$sql = mysqli_query($conn,"SELECT * FROM newsupload WHERE uin='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$uin=$row['uin'];
$session_time=$row['time'];
$session_author =$row['author'];
$session_headline =$row['headline'];
$session_content =$row['content'];
$session_photo =$row['coverphoto'];
$session_photocredit =$row['photocredit'];
$session_embed =$row['embed'];
$session_category =$row['category'];
$session_link=$row['link'];
$session_view=$row['postview'];


if(!isset($user_check))
{
header("Location: ../");
}
?>