<div class="jobSignatures form">
<?php echo $this->Form->create('JobSignature'); ?>
	<fieldset>
		<legend><?php echo __('Edit Job Signature'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('driver_id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('driver_signature');
		echo $this->Form->input('customer_signature');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobSignature.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobSignature.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
