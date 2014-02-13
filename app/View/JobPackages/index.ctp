<div class="jobPackages index">
	<h2><?php echo __('Job Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th><?php echo $this->Paginator->sort('package_id'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobPackages as $jobPackage): ?>
	<tr>
		<td><?php echo h($jobPackage['JobPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobPackage['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $jobPackage['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobPackage['Package']['name'], array('controller' => 'packages', 'action' => 'view', $jobPackage['Package']['id'])); ?>
		</td>
		<td><?php echo h($jobPackage['JobPackage']['notes']); ?>&nbsp;</td>
		<td><?php echo h($jobPackage['JobPackage']['status']); ?>&nbsp;</td>
		<td><?php echo h($jobPackage['JobPackage']['created']); ?>&nbsp;</td>
		<td><?php echo h($jobPackage['JobPackage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobPackage['JobPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobPackage['JobPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobPackage['JobPackage']['id']), null, __('Are you sure you want to delete # %s?', $jobPackage['JobPackage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
