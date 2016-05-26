<?php
	require_once '/models/task.inc.php';

	$page_number = ($_GET['page']);

	$task = new Task();
	$page = $task->get_page_number($page_number);
	$pages = $task->page_count();

	$tasks = $task->get_all($page);

require_once 'view/index.php';