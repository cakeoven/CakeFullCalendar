<?php
/*
 * View/EventTypes/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php $this->Html->addCrumb(
    __('Events'),
    ['plugin' => 'calendar', 'controller' => 'events', 'action' => 'index'],
    ['icon' => ['class' => 'fa fa-calendar fa-fw']]
); ?>
<?php $this->Html->addCrumb(__('Types')); ?>
<h2><?php __('Event Types'); ?></h2>
<?= $this->element('toolbar') ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('color'); ?></th>
            <th></th>
        </tr>
        <?php foreach ($eventTypes as $eventType) : ?>
            <tr>
                <td><?php echo $eventType['EventType']['type']; ?>&nbsp;</td>
                <td><?php echo $eventType['EventType']['color']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Element->btnLinkView($eventType['EventType']['id']); ?>
                    <?php echo $this->Element->btnLinkEdit($eventType['EventType']['id']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    echo $this->element('pagination/paging');
    echo $this->element('pagination/pagination');
    ?>
</div>

