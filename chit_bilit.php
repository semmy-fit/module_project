<!DOCTYPE html>
<html lang="ru">
<head>
<title>Личный кабинет</title>
<meta http-equiv="content-type" content="text/html"; charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

   <div class="head">
        <a href="index.html">назад</a>
       <header><div class="title">Читательский билет</div>
       </header>
    </div>
</head>
<body>
    <br>
    <br>
    <br>
<a href="add_man.html?role=<?php $_REQUEST['role'] ?>"   id="add"> Добавить </a>
<br>
<a href="record.html?role=<?php $_REQUEST['role']?>"  id="NoLinks"  >Запись</a

 <p>
 <table border=1>
 <tr align="center">
 <td>Номер</td>
 <td>ФИО </td>
 <td>S_code</td>
 <td>Навзание</td>
 <td>Автор</td>
 <td>Кол_во_экземпляров_на_руках</td>
 </tr>
 <?php

    $number=$_REQUEST['Номер'];

$role=$_REQUEST['role'];

$roles=$role;





 $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());



 $query = "SELECT * FROM chit_bilet ORDER by Номер";
 $r = mysqli_query($link, $query) or die("error 1");



 if($roles=="5")
    {
         echo "<script>
             function raz(e) {
                     e.preventDefault();
                     alert(' Вы не имеете права удалить запись');
                  };
         </script>";

    }

    if($roles=="6")
    {
        echo "<script>
             function raz(e) {
                 e.preventDefault();
                 alert(' Вы не имеете права удалить запись');
               };
          </script>";

        echo "<script>
              function raz1(e) {
                  e.preventDefault();
                  alert(' Вы не имеете права изменить запись');
                };
      </script>";



    }
 while($arr = mysqli_fetch_assoc($r))
 {
 echo "<tr>";
 echo "<td>".$arr['Номер']."</td>";
 echo "<td>".$arr['ФИО']."</td>";
 echo "<td>".$arr['S_code']."</td>";
 echo "<td>".$arr['Название']."</td>";
 echo "<td>".$arr['Автор']."</td>";
 echo "<td>".$arr['Кол_во_экземпляров_на_руках']."</td>";
 
echo "<td> <a  onclick='raz(event);'  href=dell_man.php?Номер=".$arr['Номер']." > удалить </a></td>";
echo "<td> <a   onclick='raz1(event);'  href=update.html?Номер=".$arr['Номер']."  > изменить </aclass></td>";
 echo "</tr>";

 }
?>
    </table>
	</p>
     <div class="footer">
	<h1>Все о cайте</h1>
    </div>
    </body>
</html>