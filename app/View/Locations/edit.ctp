<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Edit Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('address3');
		echo $this->Form->input('town');
		echo $this->Form->input('county');
		echo $this->Form->input('postcode');
		echo $this->Form->input('opening_time');
		echo $this->Form->input('closing_time');
		echo $this->Form->input('days_open');
		echo $this->Form->input('telephone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Location.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Location.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li>
	</ul>
</div>
