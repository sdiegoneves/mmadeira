<?php
require_once("../model/EventModel.php");

class EventController {

	private $eventModel;

	public function __construct() {
		$this->eventModel = new EventModel();
	}


	public function getEvents() {
		$id = $_GET['idEvent'];

		if (!empty($id)) {
			$events = $this->eventModel->getEvents(array('id' => $id));

		} else {
			$events = $this->eventModel->getEvents();
		}
	
		
		return json_decode($events);
	}

	public function insertEvent() {
		$event = $_POST;

		if (empty($event)) {
			return false;
		}

	}

	public function updateEvent($id, $event) {
		if (!is_numeric($id) || empty($id)) {
			return false;
		}

		return $this->eventModel->($id, $event);

	}

	public function deleteEvent($id) {
		if (!is_numeric($id) || empty($id)) {
			return false;
		}
		
	}
}