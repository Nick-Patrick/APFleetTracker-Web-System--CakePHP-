<div class="driverLocations view">
<h2><?php echo __('Driver Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driverLocation['DriverLocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverLocation['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverLocation['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Time Stamp'); ?></dt>
		<dd>
			<?php echo h($driverLocation['DriverLocation']['date_time_stamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($driverLocation['DriverLocation']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($driverLocation['DriverLocation']['longitude']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver Location'), array('action' => 'edit', $driverLocation['DriverLocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver Location'), array('action' => 'delete', $driverLocation['DriverLocation']['id']), null, __('Are you sure you want to delete # %s?', $driverLocation['DriverLocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
