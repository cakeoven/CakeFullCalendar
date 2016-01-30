<?php
/**
 * View/FullCalendar/index.ctp
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php $this->Html->addCrumb($this->Html->icon('calendar', __('Calendar'))); ?>
    <div class="toolbar toolbar-default">
        <?= $this->Html->link(
            __('Add'),
            ['plugin' => 'calendar', 'controller' => 'events', 'action' => 'add'],
            ['class' => 'btn btn-success btn-sm', 'icon' => ['class' => 'fa fa-plus fa-fw']]
        ) ?>
        <?= $this->Html->link(
            __('Events'),
            ['plugin' => 'calendar', 'controller' => 'events', 'action' => 'index'],
            ['class' => 'btn btn-success btn-sm', 'icon' => ['class' => 'fa fa-rss fa-fw']]
        ) ?>
        <div class="btn-group">
            <?= $this->Html->button('', [
                'class' => 'btn btn-primary btn-sm dropdown-toggle',
                'data-toggle' => 'dropdown',
                'icon' => 'cog',
            ]); ?>
            <ul class="dropdown-menu">
                <li><?= $this->Html->link(
                    __(
                        'Events Types',
                        true
                    ),
                    ['plugin' => 'calendar', 'controller' => 'event_types', 'admin' => true]
                ); ?>
                </li>
                <li><?= $this->Html->link(
                    __(
                        'Events Status',
                        true
                    ),
                    ['plugin' => 'calendar', 'controller' => 'event_statuses', 'admin' => true]
                ); ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="calendar"></div>
    <script type="text/javascript">
        plgFcRoot = '<?= $this->Html->url('/');?>' + "calendar";
    </script>
<?php
echo $this->Html->script('Calendar.jquery-ui', ['inline' => true]);
echo $this->Html->script('Calendar.functions', ['inline' => false]);
