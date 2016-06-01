<?
require_once '/models/task.inc.php';
	session_start();

	if (isset($_POST['text']) && isset($_SESSION['user_id'])) {
		$task = new Task();

		$task_text = $_POST['text'];
		$user_id = $_SESSION['user_id'];

		$task->addition($task_text, $user_id);
		header('location: /');
	} else {
		$check = 'Добавьте задачу';;
	}

	require_once 'view/new_task.php';