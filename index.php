<?php
	session_start();
	require_once '/models/task.php';

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}

	$page_number = ($_GET['page']);

	$task = new Task();
	$page = $task->get_page_number($page_number);
	$pages = $task->page_count();

	$tasks = $task->get_all($page);

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('tasks', $tasks);
	$smarty->assign('user_id', $user_id);
	$smarty->assign('pages', $pages);

	$smarty->display('index.tpl');