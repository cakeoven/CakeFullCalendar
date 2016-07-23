<?php

App::uses('CalendarAppModel', 'Calendar.Model');

/**
 * Class EventStatus
 *
 * @param Event $Event
 */
class EventStatus extends CalendarAppModel
{

	var $displayField = 'status';

	var $validate = [
		'status' => [
			'notempty' => [
				'rule' => ['notempty'],
			],
		],
	];

	var $hasMany = [
		'Event' => [
			'className' => 'Calendar.Event',
			'foreignKey' => 'status_id',
			'dependent' => false,
		],
	];
}
