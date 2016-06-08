<?
require_once '/models/task.php';
session_start();

	$task = new Task();
	$task = $task->delete();
	header('Location: /');