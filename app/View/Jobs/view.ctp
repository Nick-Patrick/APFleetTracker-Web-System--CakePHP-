<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($job['Job']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collection Point'); ?></dt>
		<dd>
			<?php echo h($job['Job']['collection_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dropoff Point'); ?></dt>
		<dd>
			<?php echo h($job['Job']['dropoff_point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($job['Job']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed Date'); ?></dt>
		<dd>
			<?php echo h($job['Job']['completed_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), null, __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Packages'), array('controller' => 'job_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Package'), array('controller' => 'job_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('controller' => 'job_signatures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Job Packages'); ?></h3>
	<?php if (!empty($job['JobPackage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Package Id'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['JobPackage'] as $jobPackage): ?>
		<tr>
			<td><?php echo $jobPackage['id']; ?></td>
			<td><?php echo $jobPackage['job_id']; ?></td>
			<td><?php echo $jobPackage['package_id']; ?></td>
			<td><?php echo $jobPackage['notes']; ?></td>
			<td><?php echo $jobPackage['status']; ?></td>
			<td><?php echo $jobPackage['created']; ?></td>
			<td><?php echo $jobPackage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_packages', 'action' => 'view', $jobPackage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_packages', 'action' => 'edit', $jobPackage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_packages', 'action' => 'delete', $jobPackage['id']), null, __('Are you sure you want to delete # %s?', $jobPackage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Package'), array('controller' => 'job_packages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Job Signatures'); ?></h3>
	<?php if (!empty($job['JobSignature'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Driver Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Driver Signature'); ?></th>
		<th><?php echo __('Customer Signature'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($job['JobSignature'] as $jobSignature): ?>
		<tr>
			<td><?php echo $jobSignature['id']; ?></td>
			<td><?php echo $jobSignature['driver_id']; ?></td>
			<td><?php echo $jobSignature['job_id']; ?></td>
			<td><?php echo $jobSignature['driver_signature']; ?></td>
			<td><?php echo $jobSignature['customer_signature']; ?></td>
			<td><?php echo $jobSignature['created']; ?></td>
			<td><?php echo $jobSignature['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_signatures', 'action' => 'view', $jobSignature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_signatures', 'action' => 'edit', $jobSignature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_signatures', 'action' => 'delete', $jobSignature['id']), null, __('Are you sure you want to delete # %s?', $jobSignature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
