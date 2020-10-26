 <!DOCTYPE html>
<html>
<head>
<title>Удаление из бд</title>
</head>
<body>
<?php

     $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());
   $number=$_REQUEST['Номер'];
$sql="delete from chit_bilet where Номер=$number";
$r=mysqli_query($link, $sql) or die("error delete");
 echo "<HTML><HEAD>
 <META HTTP-EQUIV='Refresh' CONTENT='0; URL=chit_bilit.php'>
 </HEAD>";
 
     ?>
</body>
</html>