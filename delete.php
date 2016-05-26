<?
require_once '/models/task.inc.php';

	$task = new Task();
	$task = $task->delete();
	header('Location: /');