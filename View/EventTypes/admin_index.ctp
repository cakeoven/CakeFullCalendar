<?php $this->Html->addCrumb(__('Events'), ['plugin' => 'calendar', 'controller' => 'events', 'action' => 'index'],
    ['icon' => ['class' => 'fa fa-calendar fa-fw']]); ?>
<?php $this->Html->addCrumb(__('Types')); ?>
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
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('color'); ?></th>
            <th></th>
        </tr>
        <?php foreach ($eventTypes as $eventType): ?>
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
    <?php echo $this->element('pagination/pagination'); ?>
</div>

