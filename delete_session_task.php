<?php
	session_start();
	require_once './models/session_task.php';

	$session_task = new SessionTask($_SESSION);

	$session_task->remove($_POST['id']);

	header("Location: /today_tasks.php");