<?php
 $number=$_REQUEST['Номер'];
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf8">
<title>Изменение информации в читательском билете</title>
</head>
<body>    

<form action='edit_man.php' method='POST'>
Изменение читательского билета:<br>
Введите:<br>
Номер<input name='number' type='text'><br>
ФИО:<input name='name' type='text'><br>
S_code:<input name='code' type='text'><br>
Название:<input name='book_name' type='text'><br>
Автор:<input name='author' type='text'><br>
Кол-во экземпляров на руках:<input name='count_book' type='text'><br>

<input type='submit'  value='Добавить'>
</body>
</html>