<?php echo $this->Html->script('viewGoogleMap'); ?>
<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-medium-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">

    </form>

            <!-- Left Nav Section -->
            <ul class="left">

                <li class="active"><?php echo $this->Html->link(__('Drivers'), array('controller' => 'drivers', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'drivers', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
                <li><a href="#">Statistics</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>

        <div id="driver-content" class="row">
            <div id="three-stat-box-wrapper" class="large-7 medium-6 small-12 columns">
                <ul class="small-block-grid-3">
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($availableDrivers); ?></li><li class="stat-box-desc">Available Drivers</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($activeDrivers); ?></li><li class="stat-box-desc">Active Drivers</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number">10</li><li class="stat-box-desc">Completed Jobs</li></ul></li>
                </ul>

                <h4>Available Drivers</h4>

                <table width="100%">

                    <tr>
                        <th>Driver Name</th>
                        <th>License Limit</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($availableDrivers as $available){ ?>
                        <tr>
                                <td><?php echo $available['Driver']['first_name'] . " " . $available['Driver']['last_name']; ?></td>
                                <td><?php echo $available['LicenseType']['license_type']; ?></td>
                                <td><?php echo $available['Driver']['telephone']; ?></td>
                                <td>
                                    <a href="#" class="small button split">Assign New Job <span data-dropdown="drop"></span></a><br>
                                    <ul id="drop" class="f-dropdown" data-dropdown-content>
                                        <li><a href="#">View Driver Activity</a></li>
                                        <li><a href="#">Manage Driver</a></li>
                                    </ul>
                                </td>
                        </tr>
                    <?php } ?>
                    </table>

                    <h4>Active Drivers</h4>
                    <table width="100%">
                    <tr>
                        <th>Driver Name</th>
                        <th>License Limit</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($activeDrivers as $active){ ?>
                        <tr>
                                <td><?php echo $active['Driver']['first_name'] . " " . $active['Driver']['last_name']; ?></td>
                                <td><?php echo $active['LicenseType']['license_type']; ?></td>
                                <td><?php echo $active['Driver']['telephone']; ?></td>
                                <td>
                                    <a href="#" class="small button split">View Current Job <span data-dropdown="drop"></span></a><br>
                                    <ul id="drop" class="f-dropdown" data-dropdown-content>
                                        <li><a href="#">View Driver Activity</a></li>
                                        <li><a href="#">Manage Driver</a></li>
                                    </ul>
                                </td>
                        </tr>
                    <?php } ?>

                </table>

             </div>

            <div id="map_canvas_wrapper" class="large-5 medium-6 columns show-for-medium-up">
                <?php echo $this->GoogleMap->map($map_options); ?>
                
                <?php
                $i = 1;
                    foreach($activeDriverLocations as $activeDriverLocation){
                        if($activeDriverLocation){
                            $marker_options = array(
                                'showWindow' => true,
                                'windowText' => "<h5>" . $activeDriverLocation['Driver']['first_name'] . " " . $activeDriverLocation['Driver']['last_name'] . "</h5>" .
                                                "<p>" . $activeDriverLocation['Driver']['telephone'] . "</p>",
                                'markerTitle' => $activeDriverLocation['Driver']['first_name'] . " " . $activeDriverLocation['Driver']['last_name'],
                                'markerIcon' => 'truckMarker.png'
                            );
                            echo $this->GoogleMap->addMarker("map_canvas", $i, array(
                                'latitude' => $activeDriverLocation['DriverLocation']['latitude'],
                                'longitude' => $activeDriverLocation['DriverLocation']['longitude']),
                                $marker_options
                            );

                            $i++;
                        }
                    } 
               
                ?>
            </div>
        </div>


	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Driver_id'); ?></th>
			<th><?php echo $this->Paginator->sort('license_type'); ?></th>
			<th><?php echo $this->Paginator->sort('available'); ?></th>
			<th><?php echo $this->Paginator->sort('last_logged_in'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($drivers as $driver): ?>
	<tr>
		<td><?php echo h($driver['Driver']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($driver['Driver']['id'], array('controller' => 'Drivers', 'action' => 'view', $driver['Driver']['id'])); ?>
		</td>
		<td><?php echo h($driver['LicenseType']['license_type']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['available']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['last_logged_in']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['created']); ?>&nbsp;</td>
		<td><?php echo h($driver['Driver']['modified']); ?>&nbsp;</td>
        <td><?php echo h($driver['Driver']['first_name']); ?>&nbsp;</td>
        <td><?php echo h($driver['Driver']['last_name']); ?> &nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $driver['Driver']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $driver['Driver']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $driver['Driver']['id']), null, __('Are you sure you want to delete # %s?', $driver['Driver']['id'])); ?>
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
<!--
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('View Map'), array('action' => 'viewMap')); ?> </li>
        <li><?php echo $this->Html->link(__('New Driver'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Drivers'), array('controller' => 'Drivers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Driver'), array('controller' => 'Drivers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Driver Daily Activities'), array('controller' => 'driver_daily_activities', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Driver Daily Activity'), array('controller' => 'driver_daily_activities', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Driver Locations'), array('controller' => 'driver_locations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Driver Location'), array('controller' => 'driver_locations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Driver Vehicle Jobs'), array('controller' => 'driver_vehicle_jobs', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Driver Vehicle Job'), array('controller' => 'driver_vehicle_jobs', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Job Signatures'), array('controller' => 'job_signatures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Job Signature'), array('controller' => 'job_signatures', 'action' => 'add')); ?> </li>
    </ul>
</div>
-->
