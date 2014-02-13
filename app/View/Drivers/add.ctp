<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><?php echo __('Add Driver'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('license_type');
		echo $this->Form->input('available');
		echo $this->Form->input('last_logged_in');
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('email');
        echo $this->Form->input('telephone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drivers'), array('action' => 'index')); ?></li>
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
