<div class="driverVehicleJobs view">
<h2><?php echo __('Driver Vehicle Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driverVehicleJob['DriverVehicleJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverVehicleJob['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverVehicleJob['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverVehicleJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $driverVehicleJob['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vehicle'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverVehicleJob['Vehicle']['name'], array('controller' => 'vehicles', 'action' => 'view', $driverVehicleJob['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($driverVehicleJob['DriverVehicleJob']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($driverVehicleJob['DriverVehicleJob']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver Vehicle Job'), array('action' => 'edit', $driverVehicleJob['DriverVehicleJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver Vehicle Job'), array('action' => 'delete', $driverVehicleJob['DriverVehicleJob']['id']), null, __('Are you sure you want to delete # %s?', $driverVehicleJob['DriverVehicleJob']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
