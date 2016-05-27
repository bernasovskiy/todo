<?php
	require_once '/models/db.inc.php';

	class Task extends DB {
		private $task_per_page = 5;

		public function __construct() {
			parent::__construct();
		}

		function get_page_number($page_number) { // Присваиваем номер страницы равный '1' если не была запрошена ни одна страница
			return (!empty($page_number) and $page_number <= $this->page_count()) ? $page_number : 1;
		}

		private function count() { // Считаем общее количество задач
			$stmt = $this->db->query("SELECT count(id) as task_count FROM `tasks`");
			return $stmt->fetch()['task_count'];
		}

		public function page_count() { // Считаем сколько всего страниц
			$task_count = $this->count();
			return ceil($task_count / $this->task_per_page);
		}

		public function get_all($page) { // Получаем данные из БД на конкретную страницу по $task_per_page
			$stmt = $this->db->prepare("SELECT * FROM `tasks` LIMIT :offset, :lim");
			$stmt->bindValue(':offset', $this->task_per_page * (intval($page) - 1), PDO::PARAM_INT);
			$stmt->bindValue(':lim', $this->task_per_page, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function get_one($id) { // Получаем данные из БД по определенному id
			$stmt = $this->db->prepare("SELECT * FROM `tasks` WHERE id = ?");
			$stmt->execute(array($id));
			return $stmt->fetch();
		}

		public function done($id) { // Отмечаем задачу как выполненную в БД
			$stmt = $this->db->prepare("UPDATE `tasks` SET status = 1 WHERE id = ?");
			$stmt->execute(array($id));
		}

		public function undone($id) { // Отмечаем задачу как выполненную в БД
			$stmt = $this->db->prepare("UPDATE `tasks` SET status = 0 WHERE id = ?");
			$stmt->execute(array($id));
		}

		public function addition($text){ // Добавляем задачу в БД
			$stmt = $this->db->prepare("INSERT INTO `tasks`(text, status) VALUES(?, ?)");
			$stmt->execute(array($text, '0'));
		}

		public function update($id, $text) { // Изменяем данные задачи в БД
			$stmt = $this->db->prepare("UPDATE `tasks` SET text = ? WHERE id = ?");
			$stmt->execute(array($id, $text));
		}

		public function delete() { // Удаляем выполненные задачи из БД
			$stmt = $this->db->prepare("DELETE FROM `tasks` WHERE status = 1");
			$stmt->execute();
		}
	}