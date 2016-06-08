<?

//Создаем класс подключения к БД

class DB {
	//Параметры для подключения
	private $hostname = "localhost:3305";
	private $name = 'todo';
	private $user = 'root';
	private $pass = '';
	protected $db;

	public function __construct() { //Подключаемся...
		try {
			$this->db = new PDO('mysql:host='.$this->hostname.'; dbname='.$this->name, $this->user, $this->pass);
			return true;
		}
		catch (PDOException $error) {
			echo $error->getMessage();
		}
	}

	protected function get_array($query_tasks) { // Помещаем все данные из БД в массив
		$tasks = array();

		foreach($query_tasks as $row) {
			$tasks[] = $row;
		}

	    return $tasks;
	}
}