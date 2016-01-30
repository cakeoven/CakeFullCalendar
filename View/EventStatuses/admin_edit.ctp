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
<div class="eventTypes form">
<?php echo $this->Form->create('EventType');?>
 		<legend><?php __('Edit Event Type'); ?></legend>
	<?php
        echo $this->Form->input('id');
        echo $this->Form->input('status');

    ?>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>