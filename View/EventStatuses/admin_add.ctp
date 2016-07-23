<?php
/*
 * Views/EventTypes/add.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php $this->Html->addCrumb(__('Event Statuses'));?>
<?php $this->Html->addCrumb(__('Create'));?>
<?php echo $this->Form->create('EventStatus');?>
<div class="row">
	<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		<div class="well">
			<?php echo $this->Form->input('status', ['placeholder' => false]); ?>
			<?php echo $this->Form->btnSubmit();?>
		</div>
	</div>
</div>
<?php echo $this->Form->end();