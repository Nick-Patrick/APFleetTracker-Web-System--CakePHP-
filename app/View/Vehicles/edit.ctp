<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('vehicle_type');
		echo $this->Form->input('reg_number');
		echo $this->Form->input('license_type');
		echo $this->Form->input('crane');
		echo $this->Form->input('status');
		echo $this->Form->input('available');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('controller' => 'driver_vehicle_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('controller' => 'driver_vehicle_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Daily Activities'), array('controller' => 'vehicle_daily_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Daily Activity'), array('controller' => 'vehicle_daily_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
