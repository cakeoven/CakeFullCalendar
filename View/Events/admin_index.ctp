<?php
/**
 * View/Events/index.ctp
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
        ['class' => 'btn btn-success btn-sm', 'icon' => ['class' => 'fa fa-plus fa-fw']]
    ) ?>
    <?= $this->Html->link(
        __('Calendar'),
        ['plugin' => 'calendar', 'controller' => 'calendar', 'action' => 'index'],
        ['class' => 'btn btn-primary btn-sm', 'icon' => ['class' => 'fa fa-calendar fa-fw']]
    ) ?>
    <div class="btn-group">
        <?= $this->Html->button('', [
            'class' => 'btn btn-primary btn-sm dropdown-toggle',
            'data-toggle' => 'dropdown',
            'icon' => ['class' => ['fa fa-cog fa-fw']],
        ]); ?>
        <ul class="dropdown-menu">
            <li><?= $this->Html->link(
                __('Types'),
                ['plugin' => 'calendar', 'controller' => 'event_types', 'action' => 'index'],
                ['icon' => ['class' => 'fa fa-list fa-fw']]
            ) ?>
            </li>
            <li><?= $this->Html->link(
                __('Status'),
                ['plugin' => 'calendar', 'controller' => 'event_statuses', 'action' => 'index'],
                ['icon' => ['class' => 'fa fa-list fa-fw']]
            ) ?>
            </li>
        </ul>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped small">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('type_id'); ?></th>
                <th><?= $this->Paginator->sort('status_id'); ?></th>
                <th><?= $this->Paginator->sort('title'); ?></th>
                <th><?= $this->Paginator->sort('start'); ?></th>
                <th><?= $this->Paginator->sort('end'); ?></th>
                <th><?= $this->Paginator->sort('all_day'); ?></th>
                <th class="text-nowrap"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event) : ?>
                <tr>
                    <td><?= $event['EventType']['type']; ?></td>
                    <td><?= $event['EventStatus']['status']; ?></td>
                    <td><?= $event['Event']['title']; ?></td>
                    <td>
                        <time><?= $event['Event']['start']; ?>
                    </td>
                    <td>
                        <time>
                            <?php
                            if ($event['Event']['all_day'] == 0) {
                                echo $event['Event']['end'];
                            } else {
                                echo 'N/A';
                            }
                            ?>
                        </time>
                    </td>
                    <td class="text-center">
                        <?= $this->Html->status($event['Event']['all_day']); ?>
                    </td>
                    <td class="text-nowrap">
                        <?= $this->Element->btnLinkView($event['Event']['id']); ?>
                        <?= $this->Element->btnLinkEdit($event['Event']['id']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    echo $this->element('pagination/paging');
    echo $this->element('pagination/pagination');
    ?>
</div>