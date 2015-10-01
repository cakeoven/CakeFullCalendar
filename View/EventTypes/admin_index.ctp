<?php $this->Html->addCrumb(__('Events'), array('plugin' => 'calendar', 'controller'=> 'events', 'action' => 'index'), array('icon' => array('class' => 'icon icon-calendar icon-fw')));?>
<?php $this->Html->addCrumb(__('Types'));?>
<div class="toolbar toolbar-default">
	<?php echo $this->Html->link(__('Add'), array('action' => 'add'), array('class' => 'btn btn-success btn-sm'))?>
	<?php echo $this->Html->link('', array('plugin' => 'calendar', 'controller' => 'calendar', 'action' => 'index'), array('class' => 'btn btn-success btn-sm', 'icon' => array('class' => 'icon icon-fw icon-calendar')))?>
</div>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
            <th><?php echo $this->Paginator->sort('color');?></th>
			<th></th>
		</tr>
		<?php foreach ($eventTypes as $eventType): ?>
			<tr>
				<td><?php echo $eventType['EventType']['type'];?>&nbsp;</td>
				<td><?php echo $eventType['EventType']['color'];?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Element->btnLinkView($eventType['EventType']['id']);?>
					<?php echo $this->Element->btnLinkEdit($eventType['EventType']['id']);?>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
	<?php echo $this->element('pagination/pagination'); ?>
</div>

