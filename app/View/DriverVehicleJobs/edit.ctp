<div class="driverVehicleJobs form">
<?php echo $this->Form->create('DriverVehicleJob'); ?>
	<fieldset>
		<legend><?php echo __('Edit Driver Vehicle Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('vehicle_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DriverVehicleJob.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DriverVehicleJob.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
