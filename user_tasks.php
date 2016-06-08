<?php
	session_start();
	require_once '/models/task.php';

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	$user_id = $_SESSION['user_id'];

	$task = new Task();

	$tasks = $task->get_by_author($user_id);

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('tasks', $tasks);
	$smarty->assign('user_id', $user_id);

	$smarty->display('user_tasks.tpl');