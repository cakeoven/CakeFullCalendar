<div class="toolbar toolbar-default">
    <?php echo $this->Html->link(__('Add'), ['action' => 'add'],
        ['class' => 'btn btn-success btn-sm', 'icon' => ['class' => 'fa fa-fw fa-plus']]) ?>
    <?php echo $this->Html->link(__('Events'),
        ['plugin' => 'calendar', 'controller' => 'events', 'action' => 'index'],
        ['class' => 'btn btn-primary btn-sm', 'icon' => ['class' => 'fa fa-fw fa-rss']]) ?>
    <?php echo $this->Html->link(__('Calendar'),
        ['plugin' => 'calendar', 'controller' => 'calendar', 'action' => 'index'],
        ['class' => 'btn btn-primary btn-sm', 'icon' => ['class' => 'fa fa-fw fa-calendar']]) ?>
</div>