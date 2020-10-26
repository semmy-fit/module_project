<!DOCTYPE html>
<html>
<head>
<title>Ввод информации о бд</title>
</head>
<body>
    <?php
     $var_value=$_POST['number'];
     $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

     $names=$_POST['name'];
     $s_codes=$_POST['code'];
     $b_name=$_POST['book_name'];
     $avtor=$_POST['author'];
     $count=$_POST['count_book'];

	
//$sql="update инструменты set Название='$name', Дата_поступления='.$data_p.',Фирма='.$phirma.',Модель='.$mod.',Описание='.$op.',Тип='.$type.',Стоймость='.$price.',Страна_производства='.$strana.',Отдел='.$otdels.' where ID_инструмента='.$id.'";
$sql="update chit_bilet set ФИО='$names',S_code='$s_codes',Название='$b_name',Автор='$avtor',Кол_во_экземпляров_на_руках='$count' where Номер='$var_value'";
$r=mysqli_query($link, $sql) or die("error update");
//  автоматический переход к странице администрирования (редирект)
    echo "sql='$r'<br>";
	if(isset($_POST['number']))
 echo "<HTML><HEAD>
 <META HTTP-EQUIV='Refresh' CONTENT='0; URL=chit_bilit.php?var_value='>
 </HEAD>";
 /*if($names)
 {
    echo "<HTML><HEAD>
 <META HTTP-EQUIV='Refresh' CONTENT='0; URL=chit_bilet.php'>
 </HEAD>";}*/
     ?> 


</body>
</html>