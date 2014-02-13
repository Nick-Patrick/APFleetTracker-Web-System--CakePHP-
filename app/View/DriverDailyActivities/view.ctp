<div class="driverDailyActivities view">
<h2><?php echo __('Driver Daily Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($driverDailyActivity['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $driverDailyActivity['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Timestamp'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['date_timestamp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miles Driven'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['miles_driven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Minutes Driven'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['time_minutes_driven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Minutes Break'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['time_minutes_break']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jobs Completed'); ?></dt>
		<dd>
			<?php echo h($driverDailyActivity['DriverDailyActivity']['jobs_completed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Driver Daily Activity'), array('action' => 'edit', $driverDailyActivity['DriverDailyActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Driver Daily Activity'), array('action' => 'delete', $driverDailyActivity['DriverDailyActivity']['id']), null, __('Are you sure you want to delete # %s?', $driverDailyActivity['DriverDailyActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Driver Daily Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver Daily Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
	</ul>
</div>
