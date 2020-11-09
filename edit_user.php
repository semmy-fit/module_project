
<?php

$link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());
$login = $_REQUEST['login'];
$password = $_REQUEST['password'];
$mail=$_REQUEST['mail'];
session_start();

$codes=$_REQUEST['code'];

$sql="UPDATE `users` SET `login`='$login', `password`='$password',`email`='$mail'  WHERE `salt`='$codes' ";
$r=mysqli_query($link, $sql) or die("error ");
echo "<HTML><HEAD>
 <META HTTP-EQUIV='Refresh' CONTENT='0; URL=table_users.php'>
 </HEAD>";

?>
