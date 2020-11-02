<?php
session_start();

$regValue = $_GET['action'];
switch($regValue)
{
    case "about" :
        require_once("info.html"); // страница "О Нас"
        break;
    case "contacts" :
        require_once("contacts.html"); // страница "Контакты"
        break;
    case "registration" :
        require_once("registration.html"); // страница "Регистрация"
        break;
    case "autorisation" :
        require_once("autorisation.html"); // страница "Авторизация"
        break;
    case "gurnal" :
        require_once("gurnal.html"); // страница "Журнал"
        break;

    default :
        require_once("page404.php"); // страница "404"
        break;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf8">
    <title>О нас</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        ul.hr {
            text-align:left;
            text-decoration: none;
            margin: 0; /* Обнуляем значение отступов */
            padding: 6px; /* Значение полей */
        }
        ul.hr li {
            display: inline;
            margin-right: 5px;

            padding: 3px; /
        }
        a{
            text-decoration: none;
        }
    </style><!--Стиль горизонтального меню-->
    <div class="head">
        <a href="index.html">назад</a>
        <header><div class="title">Добро пожаловать </div>

        </header><!--Заголовок в шапке страницы-->
    </div>
</head>
<body background="images/phon1.png" >
<br>
<br>
<br>
<p><font color="white">В адресной строке введите GET запрос,чтобы открыть нужную вам страницу.
Для этого напишите знак вопроса в конце адреса и  добавьте имя action.
</p>
<p>Затем укажите,что вы хотите открыть:
    <br>
страница "О Нас" - about
    <br>
страница "Контакты" - contacts
    <br>
страница "Регистрация" -  registration
    <br>
страница "Авторизация" - autorisation
</p>
</font>
<div class="footer">
    <h1>Все о cайте</h1>
</div><!--нижняя панель сайта-->
</body>
</html>
