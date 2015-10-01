<?php

/**
 * Controller/EventsController.php
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
App::uses('CalendarAppController', 'Calendar.Controller');

/**
 * @package    Plugins
 * @subpackage Calendar
 * @property Event $Event
 */
class EventsController extends CalendarAppController
{

    /**
     *
     */
    public function index()
    {
        $this->Event->recursive = 1;
        $this->set('events', $this->paginate());
    }

    /**
     * @param int $id
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->redirect(['action' => 'index']);
        }
        $this->set('event', $this->Event->findById($id));
    }

    /**
     *
     */
    public function add()
    {
        if (!empty($this->data)) {
            $this->Event->create();
            if ($this->Event->save($this->data)) {
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(
                    __('The event could not be saved. Please, try again.'),
                    'CakeBootstrap.alert_danger'
                );
            }
        }
        $this->set('statuses', $this->Event->EventStatus->find('list'));
        $this->set('types', $this->Event->EventType->find('list'));
    }

    /**
     * @param type $id
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->Event->save($this->data)) {
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'alert',
                    ['class' => 'alert-danger']);
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Event->read(null, $id);
        }
        $this->set('statuses', $this->Event->EventStatus->find('list'));
        $this->set('types', $this->Event->EventType->find('list'));
    }


    /**
     *
     */
    public function admin_index()
    {
        $this->Event->recursive = 1;
        $this->set('events', $this->paginate());
    }

    /**
     * @param type $id
     */
    public function admin_view($id = null)
    {
        if (!$id) {
            $this->redirect(['action' => 'index']);
        }
        $this->set('event', $this->Event->findById($id));
    }

    /**
     *
     */
    public function admin_add()
    {
        if (!empty($this->data)) {
            $this->Event->create();
            if ($this->Event->save($this->data)) {
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'alert',
                    ['class' => 'alert-danger']);
            }
        }
        $this->set('statuses', $this->Event->EventStatus->find('list'));
        $this->set('types', $this->Event->EventType->find('list'));
    }

    /**
     * @param type $id
     */
    public function admin_edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->redirect(['action' => 'index']);
        }
        if (!empty($this->data)) {
            if ($this->Event->save($this->data)) {
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'alert',
                    ['class' => 'alert-danger']);
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Event->read(null, $id);
        }
        $this->set('statuses', $this->Event->EventStatus->find('list'));
        $this->set('types', $this->Event->EventType->find('list'));
    }

    /**
     * @param type $id
     */
    public function admin_delete($id = null)
    {
        if (!$id) {
            $this->redirect(['action' => 'index']);
        }
        if ($this->Event->delete($id)) {
            $this->redirect(['action' => 'index']);
        }
        $this->redirect(['action' => 'index']);
    }

    /**
     * The feed action is called from "webroot/js/functions.js" to get the list of events (JSON)
     *
     * @param int|null $id
     */
    public function feed($id = null)
    {
        $this->layout = "ajax";
        $data = [];
        $vars = $this->params['url'];
        $conditions = [
            'conditions' => [
                'UNIX_TIMESTAMP(start) >=' => $vars['start'],
                'UNIX_TIMESTAMP(start) <=' => $vars['end'],
            ],
        ];
        $events = $this->Event->find('all', $conditions);
        foreach ($events as $event) {
            if ($event['Event']['all_day'] == 1) {
                $allday = true;
                $end = $event['Event']['start'];
            } else {
                $allday = false;
                $end = $event['Event']['end'];
            }
            $data[] = [
                'id' => $event['Event']['id'],
                'title' => $event['Event']['title'],
                'start' => $event['Event']['start'],
                'end' => $end,
                'allDay' => $allday,
                'url' => Router::url('/') . 'calendar/events/view/' . $event['Event']['id'],
                'details' => $event['Event']['details'],
                'color' => $event['EventType']['color'],
            ];
        }
        $this->set("json", json_encode($data));
    }

    /**
     * The update action is called from "webroot/js/functions.js"
     * to update date/time when an event is dragged or resized
     */
    public function update()
    {
        $vars = $this->params['url'];
        $this->Event->id = $vars['id'];
        $this->Event->saveField('start', $vars['start']);
        $this->Event->saveField('end', $vars['end']);
        $this->Event->saveField('all_day', $vars['allday']);
    }

}
