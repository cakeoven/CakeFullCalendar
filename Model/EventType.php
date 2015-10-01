<?php
/**
 * Model/EventType.php
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
App::uses('CalendarAppModel', 'Calendar.Model');

/**
 * Class EventStatus
 *
 * @param Event $Event
 */
class EventType extends CalendarAppModel
{
    var $name = 'EventType';
    var $displayField = 'name';
    var $validate = [
        'name' => [
            'notempty' => [
                'rule' => ['notempty'],
            ],
        ],
    ];

    var $hasMany = [
        'Event' => [
            'className' => 'FullCalendar.Event',
            'foreignKey' => 'event_type_id',
            'dependent' => false,
        ],
    ];

}
