<div class="vehicleDailyActivities index">
	<h2><?php echo __('Vehicle Daily Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_time_stamp'); ?></th>
			<th><?php echo $this->Paginator->sort('miles_driven'); ?></th>
			<th><?php echo $this->Paginator->sort('time_minutes_driven'); ?></th>
			<th><?php echo $this->Paginator->sort('jobs_completed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vehicleDailyActivities as $vehicleDailyActivity): ?>
	<tr>
		<td><?php echo h($vehicleDailyActivity['VehicleDailyActivity']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicleDailyActivity['Vehicle']['name'], array('controller' => 'vehicles', 'action' => 'view', $vehicleDailyActivity['Vehicle']['id'])); ?>
		</td>
		<td><?php echo h($vehicleDailyActivity['VehicleDailyActivity']['date_time_stamp']); ?>&nbsp;</td>
		<td><?php echo h($vehicleDailyActivity['VehicleDailyActivity']['miles_driven']); ?>&nbsp;</td>
		<td><?php echo h($vehicleDailyActivity['VehicleDailyActivity']['time_minutes_driven']); ?>&nbsp;</td>
		<td><?php echo h($vehicleDailyActivity['VehicleDailyActivity']['jobs_completed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicleDailyActivity['VehicleDailyActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicleDailyActivity['VehicleDailyActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicleDailyActivity['VehicleDailyActivity']['id']), null, __('Are you sure you want to delete # %s?', $vehicleDailyActivity['VehicleDailyActivity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle Daily Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
