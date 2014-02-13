<div class="driverVehicleJobs index">
	<h2><?php echo __('Driver Vehicle Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driverVehicleJobs as $driverVehicleJob): ?>
	<tr>
		<td><?php echo h($driverVehicleJob['DriverVehicleJob']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($driverVehicleJob['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverVehicleJob['Driver']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($driverVehicleJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $driverVehicleJob['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($driverVehicleJob['Vehicle']['name'], array('controller' => 'vehicles', 'action' => 'view', $driverVehicleJob['Vehicle']['id'])); ?>
		</td>
		<td><?php echo h($driverVehicleJob['DriverVehicleJob']['created']); ?>&nbsp;</td>
		<td><?php echo h($driverVehicleJob['DriverVehicleJob']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driverVehicleJob['DriverVehicleJob']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driverVehicleJob['DriverVehicleJob']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driverVehicleJob['DriverVehicleJob']['id']), null, __('Are you sure you want to delete # %s?', $driverVehicleJob['DriverVehicleJob']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
