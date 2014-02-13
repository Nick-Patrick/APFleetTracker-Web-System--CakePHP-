<div class="vehicles view">
<h2><?php echo __('Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle Type'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['vehicle_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Number'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['reg_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License Type'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['license_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crane'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['crane']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Available'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['available']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('controller' => 'driver_vehicle_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('controller' => 'driver_vehicle_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicle Daily Activities'), array('controller' => 'vehicle_daily_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle Daily Activity'), array('controller' => 'vehicle_daily_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Driver Vehicle Jobs'); ?></h3>
	<?php if (!empty($vehicle['DriverVehicleJob'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicle['DriverVehicleJob'] as $driverVehicleJob): ?>
		<tr>
			<td><?php echo $driverVehicleJob['id']; ?></td>
			<td><?php echo $driverVehicleJob['driver_id']; ?></td>
			<td><?php echo $driverVehicleJob['job_id']; ?></td>
			<td><?php echo $driverVehicleJob['vehicle_id']; ?></td>
			<td><?php echo $driverVehicleJob['created']; ?></td>
			<td><?php echo $driverVehicleJob['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'driver_vehicle_jobs', 'action' => 'view', $driverVehicleJob['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'driver_vehicle_jobs', 'action' => 'edit', $driverVehicleJob['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'driver_vehicle_jobs', 'action' => 'delete', $driverVehicleJob['id']), null, __('Are you sure you want to delete # %s?', $driverVehicleJob['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('controller' => 'driver_vehicle_jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicle Daily Activities'); ?></h3>
	<?php if (!empty($vehicle['VehicleDailyActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vehicle Id'); ?></th>
		<th><?php echo __('Date Time Stamp'); ?></th>
		<th><?php echo __('Miles Driven'); ?></th>
		<th><?php echo __('Time Minutes Driven'); ?></th>
		<th><?php echo __('Jobs Completed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicle['VehicleDailyActivity'] as $vehicleDailyActivity): ?>
		<tr>
			<td><?php echo $vehicleDailyActivity['id']; ?></td>
			<td><?php echo $vehicleDailyActivity['vehicle_id']; ?></td>
			<td><?php echo $vehicleDailyActivity['date_time_stamp']; ?></td>
			<td><?php echo $vehicleDailyActivity['miles_driven']; ?></td>
			<td><?php echo $vehicleDailyActivity['time_minutes_driven']; ?></td>
			<td><?php echo $vehicleDailyActivity['jobs_completed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicle_daily_activities', 'action' => 'view', $vehicleDailyActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicle_daily_activities', 'action' => 'edit', $vehicleDailyActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicle_daily_activities', 'action' => 'delete', $vehicleDailyActivity['id']), null, __('Are you sure you want to delete # %s?', $vehicleDailyActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle Daily Activity'), array('controller' => 'vehicle_daily_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
