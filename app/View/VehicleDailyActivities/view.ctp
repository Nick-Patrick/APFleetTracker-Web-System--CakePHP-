<div class="vehicleDailyActivities view">
<h2><?php echo __('Vehicle Daily Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicleDailyActivity['VehicleDailyActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicleDailyActivity['Vehicle']['name'], array('controller' => 'vehicles', 'action' => 'view', $vehicleDailyActivity['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Time Stamp'); ?></dt>
		<dd>
			<?php echo h($vehicleDailyActivity['VehicleDailyActivity']['date_time_stamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miles Driven'); ?></dt>
		<dd>
			<?php echo h($vehicleDailyActivity['VehicleDailyActivity']['miles_driven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Minutes Driven'); ?></dt>
		<dd>
			<?php echo h($vehicleDailyActivity['VehicleDailyActivity']['time_minutes_driven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobs Completed'); ?></dt>
		<dd>
			<?php echo h($vehicleDailyActivity['VehicleDailyActivity']['jobs_completed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle Daily Activity'), array('action' => 'edit', $vehicleDailyActivity['VehicleDailyActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle Daily Activity'), array('action' => 'delete', $vehicleDailyActivity['VehicleDailyActivity']['id']), null, __('Are you sure you want to delete # %s?', $vehicleDailyActivity['VehicleDailyActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Daily Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Daily Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
