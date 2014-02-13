<div class="driverDailyActivities index">
	<h2><?php echo __('Driver Daily Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_timestamp'); ?></th>
			<th><?php echo $this->Paginator->sort('miles_driven'); ?></th>
			<th><?php echo $this->Paginator->sort('time_minutes_driven'); ?></th>
			<th><?php echo $this->Paginator->sort('time_minutes_break'); ?></th>
			<th><?php echo $this->Paginator->sort('jobs_completed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driverDailyActivities as $driverDailyActivity): ?>
	<tr>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($driverDailyActivity['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverDailyActivity['Driver']['id'])); ?>
		</td>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['date_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['miles_driven']); ?>&nbsp;</td>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['time_minutes_driven']); ?>&nbsp;</td>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['time_minutes_break']); ?>&nbsp;</td>
		<td><?php echo h($driverDailyActivity['DriverDailyActivity']['jobs_completed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driverDailyActivity['DriverDailyActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driverDailyActivity['DriverDailyActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driverDailyActivity['DriverDailyActivity']['id']), null, __('Are you sure you want to delete # %s?', $driverDailyActivity['DriverDailyActivity']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Driver Daily Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
