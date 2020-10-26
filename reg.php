<?php

 $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

 function generateSalt()
	{
		$salt = '';
		$saltLength = 8; //длина соли
		for($i=0; $i<$saltLength; $i++) {
			$salt .= chr(mt_rand(33,126)); //символ из ASCII-table
		}
		return $salt;
	}
	//Если форма регистрации отправлена и ВСЕ поля непустые...
	if (
		!empty($_REQUEST['password'])
		and !empty($_REQUEST['password_confirm'])
		and !empty($_REQUEST['login'])
	) {
		//Пишем логин и пароль из формы в переменные (для удобства работы):
		$login = $_REQUEST['login']; 
		$password = $_REQUEST['password']; 
		$password_confirm = $_REQUEST['password_confirm']; //подтверждение пароля

		//Если пароль и его подтверждение совпадают...
		if ($password == $password_confirm) {
			/*
				Выполняем проверку на незанятость логина.
				Ответ базы запишем в переменную $isLoginFree. 

				ВЫБРАТЬ ИЗ таблицы_users ГДЕ логин = $login.
			*/
			$query = 'SELECT*FROM users WHERE login="'.$login.'"';
			$isLoginFree = mysqli_fetch_assoc(mysqli_query($link, $query));

			//Если $isLoginFree пустой - то логин не занят!
			if (empty($isLoginFree)) {
				//Генерируем соль с помощью функции generateSalt() и солим пароль...
				$salt = generateSalt(); //генерируем соль
				$saltedPassword = md5($password.$salt); //соленый пароль

				/*
					Формируем и отсылаем SQL запрос:

					ВСТАВИТЬ В таблицу_users УСТАНОВИТЬ 
					логин = $login, пароль = $saltedPassword, salt = $salt
				*/
				$query = 'INSERT INTO users SET login="'.$login.'", 
					password="'.$saltedPassword.'", salt="'.$salt.'"';
				mysqli_query($link, $query); 

				//Выведем сообщение об успешной регистрации:
				echo 'Вы успешно зарегистрированы!';
				reguire_once("lk.php");
			}
			//Если $isLoginFree НЕ пустой - то логин занят!
			else {
				echo 'Такой логин уже занят!';
			}
		}
		//Если пароль и его подтверждение НЕ совпадают - выведем ошибку:
		else {
			echo 'Пароли не совпадают!';
		}
	}
	//Не заполнено какого-либо из полей...
	else {
		echo 'Поля не могут быть пустыми!';
	}
?>