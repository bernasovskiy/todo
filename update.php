<?
	require_once '/models/task.php';
	session_start();

	define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/libs/Smarty-3.1.28/libs/');

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			$id = trim(strip_tags($_GET['id']));
			$task = new Task();
			$task = $task->get_one($id);
			break;
		case 'POST':
			$id = trim(strip_tags($_POST['id']));
			$text = trim(strip_tags($_POST['text']));
			$task = new Task();
			$task = $task->update($text, $id);
			header("Location: /");
			break;
	}

	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	$smarty->template_dir = '/templates/';
	$smarty->compile_dir = '/templates_c/';
	$smarty->config_dir = '/configs/';
	$smarty->cache_dir = '/cache/';

	$smarty->assign('task', $task);

	$smarty->display('update.tpl');