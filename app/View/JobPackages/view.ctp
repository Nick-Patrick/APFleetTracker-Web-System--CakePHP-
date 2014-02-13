<div class="jobPackages view">
<h2><?php echo __('Job Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobPackage['JobPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobPackage['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $jobPackage['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobPackage['Package']['name'], array('controller' => 'packages', 'action' => 'view', $jobPackage['Package']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($jobPackage['JobPackage']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($jobPackage['JobPackage']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobPackage['JobPackage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobPackage['JobPackage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Package'), array('action' => 'edit', $jobPackage['JobPackage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Package'), array('action' => 'delete', $jobPackage['JobPackage']['id']), null, __('Are you sure you want to delete # %s?', $jobPackage['JobPackage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
