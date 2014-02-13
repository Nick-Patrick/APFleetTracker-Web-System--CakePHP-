<div class="driverLocations index">
	<h2><?php echo __('Driver Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_time_stamp'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($driverLocations as $driverLocation): ?>
	<tr>
		<td><?php echo h($driverLocation['DriverLocation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($driverLocation['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverLocation['Driver']['id'])); ?>
		</td>
		<td><?php echo h($driverLocation['DriverLocation']['date_time_stamp']); ?>&nbsp;</td>
		<td><?php echo h($driverLocation['DriverLocation']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($driverLocation['DriverLocation']['longitude']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driverLocation['DriverLocation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driverLocation['DriverLocation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driverLocation['DriverLocation']['id']), null, __('Are you sure you want to delete # %s?', $driverLocation['DriverLocation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Driver Location'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
