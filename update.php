<?
require_once '/models/task.inc.php';

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			$id = trim(strip_tags($_GET['id']));
			$task = new Task();
			$task = $task->get_one($id);
			break;
		case 'POST':
			$id = trim(strip_tags($_POST['id']));
			$text = trim(strip_tags($_POST['text']));
			$task = new Task();
			$task = $task->update($text, $id);
			header("Location: /");
			break;
	}

require_once 'view/update.php';