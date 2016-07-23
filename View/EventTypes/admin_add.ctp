<?php
/**
 * Views/EventTypes/add.ctp
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
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
<?php echo $this->Form->create('EventType'); ?>
<div class="row">
	<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		<div class="well">
			<?php
			echo $this->Form->input('type');
			echo $this->Form->chosen('color', [
				'options' => $colors,
				'empty' => false,
			]);
			?>
			<?= $this->Html->link(
				__('back'),
				['controller' => 'events', 'action' => 'index', 'plugin' => 'calendar'],
				['class' => 'btn btn-success', 'icon' => ['class' => 'fa fa-arrow-left fa-fw']]
			); ?>
			<?php echo $this->Form->btnSubmit(); ?>
		</div>
	</div>
</div>
<?php echo $this->Form->end();
