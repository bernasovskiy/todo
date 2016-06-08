<?php
	session_start();
	require './models/user.php';
	$user = new User();

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

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

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('err', $err);

	$smarty->display('register.tpl');