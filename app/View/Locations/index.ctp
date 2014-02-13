<div class="locations index">
	<h2><?php echo __('Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address1'); ?></th>
			<th><?php echo $this->Paginator->sort('address2'); ?></th>
			<th><?php echo $this->Paginator->sort('address3'); ?></th>
			<th><?php echo $this->Paginator->sort('town'); ?></th>
			<th><?php echo $this->Paginator->sort('county'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_time'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_time'); ?></th>
			<th><?php echo $this->Paginator->sort('days_open'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locations as $location): ?>
	<tr>
		<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['name']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['address1']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['address2']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['address3']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['town']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['county']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['opening_time']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['closing_time']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['days_open']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['created']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></li>
	</ul>
</div>
