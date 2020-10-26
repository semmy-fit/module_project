<?php
$info=$_POST['action'];

switch($info)
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

