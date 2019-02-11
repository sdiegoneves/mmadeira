<?php
class Connection {
	private $dbName = "mysqlitedb";
	private $con;

	public function __construct() {
		$this->con = sqlite_open($this->dbName, 0666, $sqliteerror);
	}

	public function execInsert($query) {
		sqlite_query($this->con, 
			'CREATE TABLE IF NOT EXISTS event (
				id INTEGER PRIMARY KEY AUTOINCREMENT,
				title varchar(20), 
				date_event VARCHAR(10)
			)'
		);

		$rs = sqlite_query($this->con, $query);

		return $rs;
	}

	public function execQuery($query) {
		$result = sqlite_query($this->con, $query);

		return sqlite_fetch_array($result);
	}
}
?>