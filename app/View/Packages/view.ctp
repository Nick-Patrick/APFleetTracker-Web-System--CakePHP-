<div class="packages view">
<h2><?php echo __('Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($package['Package']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($package['Package']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($package['Package']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($package['Package']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($package['Package']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Reqs'); ?></dt>
		<dd>
			<?php echo h($package['Package']['special_reqs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($package['Package']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($package['Package']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Package'), array('action' => 'edit', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Package'), array('action' => 'delete', $package['Package']['id']), null, __('Are you sure you want to delete # %s?', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?> </li>
	</ul>
</div>
