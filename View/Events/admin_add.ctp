<?php
/**
 * View/Events/add.ctp
 * CakePHP Full Calendar Plugin
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php $this->Html->addCrumb(__('Events')); ?>
<?php $this->Html->addCrumb(__('Create')); ?>
<?= $this->Form->create('Event'); ?>
<div class="row">
	<div class="col-md-9">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
				<?= $this->Html->link(__('Event'), '#event', [
					"data-toggle" => 'tab',
					'role' => 'tab',
				]); ?>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="event">
				<?php
				echo $this->Form->input('title');
				echo $this->Form->input('details');
				?>
				<div class="row">
					<div class="col-sm-5">
						<?= $this->Form->datepicker('date_start'); ?>
					</div>
					<div class="col-sm-3">
						<?= $this->Form->clockpicker('time_start'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<?= $this->Form->datepicker('date_end'); ?>
					</div>
					<div class="col-sm-3">
						<?= $this->Form->clockpicker('time_end'); ?>
					</div>
				</div>
				<div class="form-group">
					<?= $this->Form->checkbox('all_day'); ?>
					<?= $this->Form->label(__('All Day Event')); ?>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<?= $this->Form->chosen('type_id', ['empty' => false]); ?>
					</div>
					<div class="col-sm-6">
						<?= $this->Form->chosen('status_id', ['empty' => false]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="btn-group">
	<?= $this->Form->btnSubmit(); ?>
	<?= $this->Form->btnReset(); ?>
	<?= $this->Html->link(
		__('back'),
		['controller' => 'events', 'action' => 'index', 'plugin' => 'calendar'],
		['class' => 'btn btn-success', 'icon' => ['class' => 'fa fa-arrow-left fa-fw']]
	); ?>
</div>
<?= $this->Form->end();
