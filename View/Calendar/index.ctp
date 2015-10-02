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
        <?= $this->Html->link(__('Add'), [
            'plugin' => 'calendar',
            'controller' => 'events',
            'action' => 'add',
        ], [
            'class' => 'btn btn-success btn-sm',
            'icon' => [
                'class' => 'fa fa-plus fa-fw',
            ],
        ]) ?>
        <?= $this->Html->link(__('Events'), [
            'plugin' => 'calendar',
            'controller' => 'events',
            'action' => 'index',
        ], [
            'class' => 'btn btn-success btn-sm',
            'icon' => [
                'class' => 'fa fa-rss fa-fw',
            ],
        ]) ?>
    </div>
    <div id="calendar"></div>
    <script type="text/javascript">
        plgFcRoot = '<?= $this->Html->url('/');?>' + "calendar";
    </script>
<?= $this->Html->script('Calendar.functions', ['inline' => false]);
