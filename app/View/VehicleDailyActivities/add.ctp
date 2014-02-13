<div class="vehicleDailyActivities form">
<?php echo $this->Form->create('VehicleDailyActivity'); ?>
	<fieldset>
		<legend><?php echo __('Add Vehicle Daily Activity'); ?></legend>
	<?php
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('date_time_stamp');
		echo $this->Form->input('miles_driven');
		echo $this->Form->input('time_minutes_driven');
		echo $this->Form->input('jobs_completed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vehicle Daily Activities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
