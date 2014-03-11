<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>

            </ul>
        </section>
    </nav>
</div>


<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><h3>Edit Job</h3></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('additional_details');
    echo $this->Form->input('collection_id',
            array('type' => 'select', 
                  'options' => $collectionPoints,
                  )
        );
    echo $this->Form->input('dropoff_id',
            array('type' => 'select', 
                  'options' => $dropoffPoints,
                  )
        );
			echo $this->Form->input('status',
            array('type' => 'select', 
                  'options' => array(
                  	array('Active' => 'Active'),
                  	array('Assigned' => 'Assigned'),
                  	array('Pending' => 'Pending'),
                  	array('Completed' => 'Completed'),
                  	array('Cancelled' => 'Cancelled')
                  )
        ));	?>
	</fieldset>

	<?php echo $this->Form->submit(
		'Save', 
			array('class' => 'button')
	); ?>
<?php echo $this->Form->end(); ?>
</div>
