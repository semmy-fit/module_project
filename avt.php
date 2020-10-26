<?php

 $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

	//Если форма авторизации отправлена...
	if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login']; 
		$password = $_REQUEST['password']; 

		/*
			Формируем и отсылаем SQL запрос:
			ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login
		*/
		$query = 'SELECT*FROM users WHERE login="'.$login.'"';
		$result = mysqli_query($link,$query); //ответ базы запишем в переменную $result

		//Преобразуем ответ из БД в нормальный массив PHP:
		$user = mysqli_fetch_assoc($result); 

		//Если база данных вернула не пустой ответ - значит такой логин есть...
		if (!empty($user)) {
			//Получим соль:
			$salt = $user['salt'];

			//Посолим пароль из формы:
			$saltedPassword = md5($password.$salt);

			//Если соленый пароль из базы совпадает с соленым паролем из формы...
			if ($user['password'] == $saltedPassword) {
				//Стартуем сессию:
				session_start(); 

				//Пишем в сессию информацию о том, что мы авторизовались:
				$_SESSION['auth'] = true; 

				/*
					Пишем в сессию логин и id пользователя
					(их мы берем из переменной $user!):
				*/
				
				$_SESSION['login'] = $user['login']; 

				echo 'Вы успешно авторизовались!';
				 require_once "chit_bilit.php"; 
			}
			//Если соленый пароль из базы НЕ совпадает с соленым паролем из формы...
			else {
				//Выводим сообщение 'Неправильный логин или пароль'.
				echo 'Неправильный логин или пароль!';
			}
		} else {
			//Нет такого логина, выведем сообщение об ошибке.
			if (!empty($login) ) {echo "Нет такого логина!";}
		}
	}
?>