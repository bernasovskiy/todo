<?php
	session_start();

	require './models/user.php';

	$user = new User();

	if (isset($_POST['login']) && isset($_POST['password'])) {
		$res = $user->get($_POST['login'], $_POST['password']);

		$_SESSION['login'] = $res['login'];
		header('Location: /');
		} else {
			header("Location: /register.php");
	}
