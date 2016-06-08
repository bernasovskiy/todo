<?
require_once '/models/task.php';
	session_start();

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	if (isset($_POST['text']) && isset($_SESSION['user_id'])) {
		$task = new Task();

		$text = $_POST['text'];
		$user_id = $_SESSION['user_id'];

		$task->addition($task_text, $user_id);
		header('location: /');
	} else {
		$check = 'Добавьте задачу';;
	}

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('check', $check);
	$smarty->assign('text', $text);

	$smarty->display('new_task.tpl');