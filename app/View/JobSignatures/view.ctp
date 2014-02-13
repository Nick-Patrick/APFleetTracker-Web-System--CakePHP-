<div class="jobSignatures view">
<h2><?php echo __('Job Signature'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobSignature['JobSignature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobSignature['Driver']['id'], array('controller' => 'drivers', 'action' => 'view', $jobSignature['Driver']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobSignature['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $jobSignature['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver Signature'); ?></dt>
		<dd>
			<?php echo h($jobSignature['JobSignature']['driver_signature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Signature'); ?></dt>
		<dd>
			<?php echo h($jobSignature['JobSignature']['customer_signature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobSignature['JobSignature']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobSignature['JobSignature']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Signature'), array('action' => 'edit', $jobSignature['JobSignature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Signature'), array('action' => 'delete', $jobSignature['JobSignature']['id']), null, __('Are you sure you want to delete # %s?', $jobSignature['JobSignature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Signature'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'drivers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
