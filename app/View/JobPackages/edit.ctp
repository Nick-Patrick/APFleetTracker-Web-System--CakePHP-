<div class="jobPackages form">
<?php echo $this->Form->create('JobPackage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Job Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('job_id');
		echo $this->Form->input('package_id');
		echo $this->Form->input('notes');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobPackage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobPackage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
