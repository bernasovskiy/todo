<?php
	session_start();
	require_once '/models/task.inc.php';

	$user_id = $_SESSION['user_id'];

	$task = new Task();

	$tasks = $task->get_by_author($user_id);

require_once 'view/user_tasks.php';