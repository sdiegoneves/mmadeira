<?php
require_once("Connection.php");

class EventDal {
	private $connect;


	public function __construct() {
		$this->connect = new Connection();
	}

	public function insert(array $data) {
		$sql = "INSERT INTO event (title, date_event) values ('".$data['title']."', '".$data['date_event']."');";

		return $this->connect->execInsert($sql);
	}

	public function getEvents($where = null) {
		if (empty($where)) {
			$sql = "SELECT * FROM event;";

		} else {
			$sql = "SELECT * FROM event WHERE ";

			$count = 0;
			foreach ($where as $k=>$v) {
				$attr .= $k."='".$v."'";

				if (count($where) < $count) $attr.=" AND ";

				$count++;
			}

			$sql .= $attr;
		}	

		return $this->connect->execQuery($sql);
	}

	public function getEvent($id) {
		if (!is_numeric($id)) {
			return false;
		}

		$where = array('id' => $id);

		return $this->getEvents($where);
	}

	public function updateEvent($id, $data) {
		$sql = "UPDATE event SET title='".$data['title']."', date_event='".$data['date_event']."' WHERE id = ".$id;
		return $this->connect->execQuery($sql);	
	}

	public function deleteEvent($id) {
		$sql = "DELETE FROM event WHERE id=".$id;
		return $this->connect->execQuery($sql);		
	}

}