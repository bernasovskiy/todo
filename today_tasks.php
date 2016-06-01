<?php
	session_start();
	require_once './models/session_task.php';

	$session_task = new SessionTask($_SESSION);

	$tasks = $session_task->get_all();

	require_once './view/today_tasks.php';