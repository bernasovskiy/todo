<?
require_once '/models/task.inc.php';
$id = $_POST['id'];

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$task = new Task();
		$task = $task->done($id);
		header('Location: /');
	}