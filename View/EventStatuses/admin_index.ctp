<?php
/*
 * View/EventTypes/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<h2><?php __('Event Status');?></h2>

<?= $this->element('toolbar') ?>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th></th>
		</tr>
		<?php foreach ($eventStatuses as $eventStatus):?>
			<tr>
				<td><?php echo $eventStatus['EventStatus']['status'];?>&nbsp;</td>
				<td class="nowrap">
					<?php echo $this->Element->btnLinkView($eventStatus['EventStatus']['id']);?>
					<?php echo $this->Element->btnLinkEdit($eventStatus['EventStatus']['id']);?>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
	<?php
	echo $this->element('pagination/paging');
	echo $this->element('pagination/pagination');
	?>
</div>
