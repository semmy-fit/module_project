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
<a href="add_man.html"> Добавить </a>
<br>
<a href="record.html">Запись</a>
<p>
<table border=1>
    <tr align="center">
        <td>login</td>
        <td>password </td>
        <td>salt</td>
        <td>email</td>
        <td>role</td>

    </tr>
    <?php


    $roles=$_REQUEST['role'];
    echo "$roles";

    $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

    $query = "SELECT * FROM users ORDER by login";
    $r = mysqli_query($link, $query) or die("error 1");

    while($arr = mysqli_fetch_assoc($r))
    {
        echo "<tr>";
        echo "<td>".$arr['login']."</td>";
        echo "<td>".$arr['password']."</td>";
        echo "<td>".$arr['salt']."</td>";
        echo "<td>".$arr['email']."</td>";
        echo "<td>".$arr['role']."</td>";
        $key=$arr['email'];
        $code=$key;
        $code=$_GET['email'];


        echo "<td> <a  id='noLink' href=dell_users.php?codes=".$arr['login']." > удалить </a></td>";
        echo "<td> <a id='noLink1' href=edit_users.html?codes=".$arr['login']." > изменить </a></td>";
        echo "</tr>";

    }

    if($roles=="4")
    {

        echo " <script>
                document.getElementById('noLink1').addEventListener('click', function(e) {
                 e.preventDefault();
                  alert('У вас недостаточно прав для выполнгения записи');
               }, false);
               document.get
               
                document.getElementById('noLink').addEventListener('click', function(e) {
                 e.preventDefault();
                  alert('У вас недостаточно прав добавления');
               }, false);
               document.get
               
               
                  </script> ";

    }
    ?>
</table>
</p>
<div class="footer">
    <h1>Все о cайте</h1>
</div>
</body>
</html>