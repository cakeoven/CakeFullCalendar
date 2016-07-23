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

	/**
	 * Name
	 *
	 * @var string
	 */
	var $name = 'EventType';

	/**
	 * @var string
	 */
	var $displayField = 'type';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	var $validate = [
		'name' => [
			'notempty' => [
				'rule' => ['notempty'],
			],
		],
	];

	var $hasMany = [
		'Event' => [
			'className' => 'Calendar.Event',
			'foreignKey' => 'type_id',
			'dependent' => false,
		],
	];
}
