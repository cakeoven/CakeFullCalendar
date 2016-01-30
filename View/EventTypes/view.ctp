<?php
/**
 * View/EventTypes/view.ctp
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="toolbar toolbar-default">
    <?= $this->Html->link(
        __('Add'),
        ['action' => 'add'],
        ['class' => 'btn btn-success btn-sm', 'icon' => ['class' => 'fa fa-fw fa-plus']]
    ) ?>
    <?= $this->Html->link(
        __('Edit'),
        ['plugin' => 'calendar', 'action' => 'edit', $eventType['EventType']['id']],
        [
            'class' => 'btn btn-success btn-sm',
            'icon' => [
                'class' => 'fa fa-fw fa-pencil',
            ],
        ]
    ); ?>
    <?= $this->Html->link(
        __('Delete'),
        ['plugin' => 'calendar', 'action' => 'delete', $eventType['EventType']['id']],
        [
            'class' => 'btn btn-danger btn-sm',
            'icon' => [
                'class' => 'fa fa-fw fa-times',
            ],
        ],
        sprintf(__('Are you sure you want to delete %s?'), $eventType['EventType']['type'])
    ); ?>
    <?= $this->Html->link(
        __('Event Types'),
        ['plugin' => 'calendar', 'action' => 'index'],
        [
            'class' => 'btn btn-warning btn-sm',
            'icon' => [
                'class' => 'fa fa-fw fa-rss',
            ],
        ]
    ); ?>
    <?= $this->Html->link(
        __('Calendar'),
        ['plugin' => 'calendar', 'controller' => 'calendar'],
        [
            'class' => 'btn btn-warning btn-sm',
            'icon' => [
                'class' => 'fa fa-fw fa-calendar',
            ],
        ]
    ); ?>
</div>
<div class="eventTypes view">
    <dl class="dl-horizontal">
        <dt><?= __('Type'); ?></dt>
        <dd>
            <?= $eventType['EventType']['type']; ?>
            &nbsp;
        </dd>
        <dt><?= __('Color'); ?></dt>
        <dd>
            <?= $eventType['EventType']['color']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
