<?php
	session_start();

	require './models/user.php';

	$user = new User();

	if (isset($_POST['login']) && isset($_POST['password'])) {
		$res = $user->get($_POST['login'], $_POST['password']);

		if ($res) {
			$_SESSION['login'] = $res['login'];
			$_SESSION['user_id'] = $res['id'];

		header('Location: /');
		} else {
			header("Location: /register.php");
		}
	}
