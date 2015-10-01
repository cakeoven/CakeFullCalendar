<?php
/*
 * View/EventTypes/view.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="eventTypes view">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventType['EventType']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Color'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventType['EventType']['color']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Type', true), array('plugin' => 'calendar', 'action' => 'edit', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event Type', true), array('plugin' => 'calendar', 'action' => 'delete', $eventType['EventType']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $eventType['EventType']['type'])); ?> </li>
		<li><?php echo $this->Html->link(__('Manage Event Types', true), array('plugin' => 'calendar', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'calendar', 'controller' => 'calendar')); ?></li>
	</ul>
</div>