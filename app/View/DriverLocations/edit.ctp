<div class="driverLocations form">
<?php echo $this->Form->create('DriverLocation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Driver Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('date_time_stamp');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DriverLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DriverLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Locations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
