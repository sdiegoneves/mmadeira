<?php
require_once("../Dal/EventDal.php");
class EventModel {
	private $dal;

	public function __construct() {
		$this->dal = new EventDal();
	}

	public function insertEvent($event) {

		if (empty($event)) {
			return false;
		}

		return $this->dal->insert($event);
	}

	public function getEvents($where = null) {
		return $this->dal->getEvents($where);
	}

	public function updateEvent($id, $event) {
		if (!is_numeric($id) || empty($id)) {
			return false;
		}

	}

	public function deleteEvent($id) {
		if (!is_numeric($id) || empty($id)) {
			return false;
		}

		
	}

}