<?php
	session_start();
	require './models/user.php';
	$user = new User();

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		if ($user->get_user_by_username($_POST['login'])) {
			$err = 'Пользователь с таким логином уже существует в базе данных';
			} else {
				$user->create($_POST['login'], $_POST['password']);
				header('Location: /');
				}
	} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$err = "Заполните все поля";
	}

	require_once './view/register.php';