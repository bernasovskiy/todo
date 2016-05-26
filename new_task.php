<?
require_once '/models/task.inc.php';

$text = trim(strip_tags($_POST['text']));

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (empty($text)){
			$check = 'Заполните все поля';
			} else {
				$task = new Task();
				$task = $task->addition($text);
				header('Location: /');
			}
	}

require_once 'view/new_task.php';