<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Edit Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('collection_point');
		echo $this->Form->input('dropoff_point');
		echo $this->Form->input('status');
		echo $this->Form->input('completed_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Job.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Packages'), array('controller' => 'job_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Package'), array('controller' => 'job_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('controller' => 'job_signatures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
	</ul>
</div>
