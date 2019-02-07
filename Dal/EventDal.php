<?php
class EventDal {
	private $db;
	private $host;
	private $password;
	private $connect;


	public function __construct() {

	}

	public function insert(array $data) {
		 $sql = "INSERT INTO event (title, date_event) values ('".$data['title']."', '".$data['date_event']."')";


	}

}