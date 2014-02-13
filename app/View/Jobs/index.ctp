<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-medium-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Left Nav Section -->
            <ul class="left">

                <li class="active"><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>





<div class="jobs index">
	<h2><?php echo __('Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('collection_point'); ?></th>
			<th><?php echo $this->Paginator->sort('dropoff_point'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('completed_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['name']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['collection_id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['dropoff_id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['status']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['completed_date']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), null, __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Packages'), array('controller' => 'job_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Package'), array('controller' => 'job_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Signatures'), array('controller' => 'job_signatures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
	</ul>
</div>
