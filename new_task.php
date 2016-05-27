<?
require_once '/models/task.inc.php';
session_start();

$text = trim(strip_tags($_POST['text']));

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (empty($text)){
			$check = 'Добавьте задачу';
			} else {
				$task = new Task();
				$task = $task->addition($text);
				header('Location: /');
			}
	}

require_once 'view/new_task.php';