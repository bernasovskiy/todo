<?
require_once '/models/task.inc.php';
session_start();
$id = $_POST['id'];

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$task = new Task();
		$task = $task->undone($id);
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}