<?php
	require_once 'db.inc.php';

	class User extends DB {
		public function __construct() {
			parent::__construct();
		}

		public function create($login, $password) {
			$stmt = $this->db->prepare("INSERT INTO `users` (login, password) VALUES (?, ?)");
			$stmt->execute(array($login, md5($password)));
			}

		public function get($login, $password) {
			$hashed_pass = md5($password);

			$stmt = $this->db->prepare("SELECT * FROM `users` WHERE (login = ?) AND (password = ?)");
			$stmt->execute(array($login, $hashed_pass));

			return $stmt->fetch();
		}

		public function get_user_by_username($login) {
			$stmt = $this->db->prepare("SELECT * FROM `users` WHERE login = ?");
			$stmt->execute(array($login));

			return $stmt->fetch();
		}
	}