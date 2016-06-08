<?php
	session_start();
	require_once './models/session_task.php';

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	$session_task = new SessionTask($_SESSION);

	$tasks = $session_task->get_all();

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('tasks', $tasks);

	$smarty->display('today_tasks.tpl');