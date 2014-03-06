<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Manage'), array('controller' => 'vehicles', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
                <li><a href="#">Statistics</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>

<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><h3>Edit Vehicle</h3></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('vehicle_type');
		echo $this->Form->input('reg_number');
		echo $this->Form->input('license_type');
		echo $this->Form->input('crane');
		echo $this->Form->input('trailer');
		echo $this->Form->input('hydraulic_beavertail');
		echo $this->Form->input('status');
		echo $this->Form->input('available');
	?>
	</fieldset>
	<?php echo $this->Form->submit(
		'Save', 
    	array('class' => 'button')
	); ?>

<?php echo $this->Form->end(); ?>
</div>

