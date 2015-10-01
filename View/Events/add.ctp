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
<?php echo $this->Form->create('Event'); ?>
<div class="row">
    <div class="col-md-9">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><?php echo $this->Html->link(__('Event'), '#event',
                    ["data-toggle" => 'tab', 'role' => 'tab']); ?></li>
        </ul>
        <div class="tab-content">
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
    <?php echo $this->Form->btnSubmit(); ?>
    <?php echo $this->Form->btnReset(); ?>
</div>
<?php echo $this->Form->end(); ?>


