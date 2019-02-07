<?php
class EventController {

	public function getEvents() {

	}

	public function insertEvent($event) {

		if (empty($event)) {
			return false;
		}

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