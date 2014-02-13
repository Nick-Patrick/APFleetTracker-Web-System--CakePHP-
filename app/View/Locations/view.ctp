<div class="locations view">
<h2><?php echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address1'); ?></dt>
		<dd>
			<?php echo h($location['Location']['address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($location['Location']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address3'); ?></dt>
		<dd>
			<?php echo h($location['Location']['address3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Town'); ?></dt>
		<dd>
			<?php echo h($location['Location']['town']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('County'); ?></dt>
		<dd>
			<?php echo h($location['Location']['county']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($location['Location']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Time'); ?></dt>
		<dd>
			<?php echo h($location['Location']['opening_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Time'); ?></dt>
		<dd>
			<?php echo h($location['Location']['closing_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Days Open'); ?></dt>
		<dd>
			<?php echo h($location['Location']['days_open']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($location['Location']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($location['Location']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($location['Location']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
	</ul>
</div>
