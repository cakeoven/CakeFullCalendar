<?php
/**
 * Controllers/EventTypesController.php
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

App::uses('CalendarAppController', 'Calendar.Controller');

/**
 * Class EventTypesController
 *
 * @property EventType $EventType
 */
class EventTypesController extends CalendarAppController
{

	/**
	 *
	 */
	public function index() {

		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->paginate());
	}

	/**
	 *
	 */
	public function admin_index() {

		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->paginate());
	}

	/**
	 * @param int $id
	 * @throws Exception
	 */
	public function view($id = null) {

		if (!$id) {
			throw new Exception(__('Invalid view'));
		}
		$this->set('eventType', $this->EventType->read(null, $id));
	}

	/**
	 * @param int $id
	 */
	public function admin_view($id = null) {

		if (!$id) {
			$this->Session->setFlash(__('Invalid event type', true));
			$this->redirect(['action' => 'index']);
		}
		$this->set('eventType', $this->EventType->read(null, $id));
	}

	/**
	 * admin add
	 */
	public function admin_add() {

		if (!empty($this->data)) {
			$this->EventType->create();
			if ($this->EventType->save($this->data)) {
				$this->Session->setFlash(__('The event type has been saved', true));
				$this->redirect(['action' => 'index']);
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.', true));
			}
		}
	}

	/**
	 * admin edit method
	 *
	 * @param int $id
	 */
	public function admin_edit($id = null) {

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event type', true));
			$this->redirect(['action' => 'index']);
		}
		if (!empty($this->data)) {
			if ($this->EventType->save($this->data)) {
				$this->Session->setFlash(__('The event type has been saved', true));
				$this->redirect(['action' => 'index']);
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EventType->read(null, $id);
		}
	}

	/**
	 * admin delete
	 *
	 * @param int $id
	 */
	public function admin_delete($id = null) {

		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event type', true));
			$this->redirect(['action' => 'index']);
		}
		if ($this->EventType->delete($id)) {
			$this->Session->setFlash(__('Event type deleted', true));
			$this->redirect(['action' => 'index']);
		}
		$this->Session->setFlash(__('Event type was not deleted', true));
		$this->redirect(['action' => 'index']);
	}

	/**
	 * Called after the controller action is run, but before the view is rendered. You can use this method
	 * to perform logic or set view variables that are required on every request.
	 *
	 * @return void
	 * @link http://book.cakephp.org/2.0/en/controllers.html#request-life-cycle-callbacks
	 */
	public function beforeRender() {

		$colors = [
			'Blue' => 'Blue',
			'Red' => 'Red',
			'Pink' => 'Pink',
			'Purple' => 'Purple',
			'Orange' => 'Orange',
			'Green' => 'Green',
			'Gray' => 'Gray',
			'Black' => 'Black',
			'Brown' => 'Brown',
		];
		$this->set('colors', $colors);
	}
}
