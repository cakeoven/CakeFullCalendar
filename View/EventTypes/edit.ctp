<?php
/*
 * Views/EventTypes/edit.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<?php echo $this->Form->create('EventType');?>
<div class="row">
	<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		<div class="well">
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('type');
			echo $this->Form->chosen('color', array('options' => array(
					'Blue' => 'Blue',
					'Red' => 'Red',
					'Pink' => 'Pink',
					'Purple' => 'Purple',
					'Orange' => 'Orange',
					'Green' => 'Green',
					'Gray' => 'Gray',
					'Black' => 'Black',
					'Brown' => 'Brown'
					),
					'empty' => false
				));
			?>
			<?php echo $this->Form->btnSubmit();?>
		</div>
	</div>
</div>
<?php
echo $this->Form->end();
