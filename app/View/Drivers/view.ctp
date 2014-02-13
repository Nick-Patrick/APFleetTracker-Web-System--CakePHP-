<div class="drivers view">
<h2><?php echo __('Driver'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driver['User']['id'], array('controller' => 'users', 'action' => 'view', $driver['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License Type'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['license_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Available'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['available']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Logged In'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['last_logged_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($driver['Driver']['modified']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('First Name'); ?></dt>
        <dd>
            <?php echo h($driver['Driver']['first_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Last Name'); ?></dt>
        <dd>
            <?php echo h($driver['Driver']['last_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($driver['Driver']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telephone'); ?></dt>
        <dd>
            <?php echo h($driver['Driver']['telephone']); ?>
            &nbsp;
        </dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver'), array('action' => 'edit', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver'), array('action' => 'delete', $driver['Driver']['id']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Daily Activities'), array('controller' => 'driver_daily_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Daily Activity'), array('controller' => 'driver_daily_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Locations'), array('controller' => 'driver_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Location'), array('controller' => 'driver_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('controller' => 'driver_vehicle_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('controller' => 'driver_vehicle_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('controller' => 'job_signatures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Driver Daily Activities'); ?></h3>
	<?php if (!empty($driver['DriverDailyActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Date Timestamp'); ?></th>
		<th><?php echo __('Miles Driven'); ?></th>
		<th><?php echo __('Time Minutes Driven'); ?></th>
		<th><?php echo __('Time Minutes Break'); ?></th>
		<th><?php echo __('Jobs Completed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driver['DriverDailyActivity'] as $driverDailyActivity): ?>
		<tr>
			<td><?php echo $driverDailyActivity['id']; ?></td>
			<td><?php echo $driverDailyActivity['driver_id']; ?></td>
			<td><?php echo $driverDailyActivity['date_timestamp']; ?></td>
			<td><?php echo $driverDailyActivity['miles_driven']; ?></td>
			<td><?php echo $driverDailyActivity['time_minutes_driven']; ?></td>
			<td><?php echo $driverDailyActivity['time_minutes_break']; ?></td>
			<td><?php echo $driverDailyActivity['jobs_completed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'driver_daily_activities', 'action' => 'view', $driverDailyActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'driver_daily_activities', 'action' => 'edit', $driverDailyActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'driver_daily_activities', 'action' => 'delete', $driverDailyActivity['id']), null, __('Are you sure you want to delete # %s?', $driverDailyActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Driver Daily Activity'), array('controller' => 'driver_daily_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Driver Locations'); ?></h3>
	<?php if (!empty($driver['DriverLocation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Date Time Stamp'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driver['DriverLocation'] as $driverLocation): ?>
		<tr>
			<td><?php echo $driverLocation['id']; ?></td>
			<td><?php echo $driverLocation['driver_id']; ?></td>
			<td><?php echo $driverLocation['date_time_stamp']; ?></td>
			<td><?php echo $driverLocation['latitude']; ?></td>
			<td><?php echo $driverLocation['longitude']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'driver_locations', 'action' => 'view', $driverLocation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'driver_locations', 'action' => 'edit', $driverLocation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'driver_locations', 'action' => 'delete', $driverLocation['id']), null, __('Are you sure you want to delete # %s?', $driverLocation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Driver Location'), array('controller' => 'driver_locations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Driver Vehicle Jobs'); ?></h3>
	<?php if (!empty($driver['DriverVehicleJob'])): ?>
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
	<?php foreach ($driver['DriverVehicleJob'] as $driverVehicleJob): ?>
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
	<h3><?php echo __('Related Job Signatures'); ?></h3>
	<?php if (!empty($driver['JobSignature'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Driver Signature'); ?></th>
		<th><?php echo __('Customer Signature'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driver['JobSignature'] as $jobSignature): ?>
		<tr>
			<td><?php echo $jobSignature['id']; ?></td>
			<td><?php echo $jobSignature['driver_id']; ?></td>
			<td><?php echo $jobSignature['job_id']; ?></td>
			<td><?php echo $jobSignature['driver_signature']; ?></td>
			<td><?php echo $jobSignature['customer_signature']; ?></td>
			<td><?php echo $jobSignature['created']; ?></td>
			<td><?php echo $jobSignature['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_signatures', 'action' => 'view', $jobSignature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_signatures', 'action' => 'edit', $jobSignature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_signatures', 'action' => 'delete', $jobSignature['id']), null, __('Are you sure you want to delete # %s?', $jobSignature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
