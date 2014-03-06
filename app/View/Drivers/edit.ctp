<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Manage'), array('controller' => 'drivers', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
                <li><a href="#">Statistics</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>

<div class="drivers form">
<?php echo $this->Form->create('Driver'); ?>
	<fieldset>
		<legend><h3>Edit Driver</h3></legend>
	<?php
		echo $this->Form->input('id');
	    echo $this->Form->input('license_type_id',
            array('type' => 'select', 
                  'options' => $licenseTypes,
                  )
        );
		echo $this->Form->input('available');
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('email');
        echo $this->Form->input('telephone');
	?>
	</fieldset>
	<?php echo $this->Form->submit(
		'Save', 
    	array('class' => 'button')
	); ?>

<?php echo $this->Form->end(); ?>
</div>
