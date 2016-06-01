<?php
	class SessionTask {
		private $tasks = array();
		private $current_session;

		public function __construct(&$current_session) {
			if (!isset($current_session['tasks'])) {
				$current_session['tasks'] = array();
			}

			$this->tasks = $current_session['tasks'];
			$this->current_session = &$current_session;
		}

		public function get_all() {
			return $this->tasks;
		}

		public function remove($id) {
			foreach ($this->current_session['tasks'] as $index => $task) {
				if ($task['id'] == $id) {
					unset($this->current_session['tasks'][$index]);
				}
			}
		}

		public function add($id, $task, $status) {
			$this->current_session['tasks'][] = array(
				'id' => $id, 'text' => $task, 'status' => $status
			);
		}
	}