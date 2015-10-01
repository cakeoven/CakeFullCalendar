<?php
/*
 * View/Events/add.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php $this->Html->addCrumb(__('Events')); ?>
<?php $this->Html->addCrumb(__('Edit')); ?>
<?php echo $this->Form->create('Event'); ?>
<?php echo $this->Form->input('id'); ?>
<div class="row">
    <div class="col-md-9">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><?php echo $this->Html->link(__('Event'), '#event',
                    ["data-toggle" => 'tab', 'role' => 'tab']); ?></li>
        </ul>
        <div class="" ass="tab-content">
            <div class="tab-pane active" id="event">
                <?php
                echo $this->Form->input('title');
                echo $this->Form->input('details');
                ?>
                <div class="row">
                    <div class="col-sm-5">
                        <?php echo $this->Form->datetimepicker('start'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <?php echo $this->Form->datetimepicker('end'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->checkbox('all_day'); ?>
                    <?php echo $this->Form->label(__('All Day Event')); ?>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <?php echo $this->Form->chosen('type_id', ['empty' => false]); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php echo $this->Form->chosen('status_id', ['empty' => false]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 tabs-next">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group">
                    <?php echo $this->Form->btnSubmit(); ?>
                    <?php echo $this->Form->btnReset(); ?>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $this->Html->link(__('Manage Events', true),
                        ['plugin' => 'calendar', 'action' => 'index']); ?></li>
                <li class="list-group-item"><?php echo $this->Html->link(__('View Calendar', true),
                        ['plugin' => 'calendar', 'controller' => 'calendar', 'action' => 'index']); ?></li>
            </ul>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>


