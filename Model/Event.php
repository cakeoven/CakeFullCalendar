<?php
/**
 * Model/Event.php
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

App::uses('CalendarAppModel', 'Calendar.Model');

/**
 * Class Event
 *
 * @property EventType   $EventType
 * @property EventStatus $EventStatus
 */
class Event extends CalendarAppModel
{
    /**
     * @var string
     */
    public $displayField = 'title';

    public $validate = [
        'title' => [
            'notempty' => [
                'rule' => ['notempty'],
            ],
        ],
        'unique' => [
            'rule' => ['isUnique', 'title'],
            'message' => 'An event with this title already exists',
        ],
        'start' => [
            'notempty' => [
                'rule' => ['notempty'],
            ],
        ],
    ];

    public $belongsTo = [
        'EventType' => [
            'className' => 'Calendar.EventType',
            'foreignKey' => 'type_id',
        ],
        'EventStatus' => [
            'className' => 'Calendar.EventStatus',
            'foreignKey' => 'status_id',
        ],
    ];

    /**
     * Validates the data to be saved
     *
     * @todo Write code about validation with all day event
     * @param array $options
     * @return void
     */
    public function beforeValidate($options = [])
    {
        parent::beforeValidate($options);
    }
}
