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
 * Class EventStatusesController
 *
 * @property EventStatus $EventStatus
 */
class EventStatusesController extends CalendarAppController
{

    /**
     *
     */
    public function index()
    {
        $this->EventStatus->recursive = 0;
        $this->set('eventStatuses', $this->paginate());
    }

    /**
     *
     */
    public function admin_index()
    {
        $this->EventStatus->recursive = 0;
        $this->set('eventStatuses', $this->paginate());
    }

    /**
     * @param int $id
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid event status', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('eventStatus', $this->EventStatus->read(null, $id));
    }

    /**
     * @param type $id
     */
    public function admin_view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid event status', true));
            $this->redirect(['action' => 'index']);
        }
        $this->set('eventStatus', $this->EventStatus->read(null, $id));
    }

    /**
     *
     */
    public function admin_add()
    {
        if (!empty($this->data)) {
            $this->EventStatus->create();
            if ($this->EventStatus->save($this->data)) {
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The event status could not be saved. Please, try again.', true));
            }
        }
    }

    /**
     * @param int $id
     */
    public function admin_edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid event type', true));
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->EventStatus->save($this->data)) {
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The event status could not be saved. Please, try again.'));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->EventStatus->read(null, $id);
        }
    }

    /**
     * @param int $id
     */
    public function admin_delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for event status', true));
            $this->redirect(['action' => 'index']);
        }
        if ($this->EventStatus->delete($id)) {
            $this->Session->setFlash(__('Event status deleted', true));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Event status was not deleted', true));
        $this->redirect(['action' => 'index']);
    }

}
