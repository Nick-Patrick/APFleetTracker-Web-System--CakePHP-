<div class="driverDailyActivities form">
<?php echo $this->Form->create('DriverDailyActivity'); ?>
	<fieldset>
		<legend><?php echo __('Edit Driver Daily Activity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('date_timestamp');
		echo $this->Form->input('miles_driven');
		echo $this->Form->input('time_minutes_driven');
		echo $this->Form->input('time_minutes_break');
		echo $this->Form->input('jobs_completed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DriverDailyActivity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DriverDailyActivity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Driver Daily Activities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
