<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Left Nav Section -->
            <ul class="left">

                <li class="active"><?php echo $this->Html->link(__('Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'vehicles', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
                <li><a href="#">Statistics</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>


 <div id="driver-content" class="row">
            <div id="three-stat-box-wrapper" class="large-7 medium-12 small-12 columns">
                <ul class="small-block-grid-3">
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($availableVehicles); ?></li><li class="stat-box-desc">Available Vehicles</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($activeVehicles); ?></li><li class="stat-box-desc">Active Vehicles</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($completedJobsToday); ?></li><li class="stat-box-desc">Completed Jobs</li></ul></li>
                </ul>

<?php if(count($activeVehicles) == 0){ ?>

<h4>No Active Vehicles</h4>

<?php
}
else {
?>
<h4>Active Vehicles</h4>

                    <table class="driver-data" width="100%">
                    <tr>
                        <th width="200">Vehicle</th>
                        <th width="150">Reg Number</th>
                        <th>Description</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($activeVehicles as $activeVehicle){ ?>
                        <tr>
                                <td><?php echo $activeVehicle['Vehicle']['name']; ?></td>
                                <td><?php echo $activeVehicle['Vehicle']['reg_number']; ?></td>
                                <td><?php echo $activeVehicle['Vehicle']['description']; ?></td>
                                <td>
                                    <a href="#" class="small button split">View Current Job <span data-dropdown="drop"></span></a><br>
                                    <ul id="drop" class="f-dropdown" data-dropdown-content>
                                        <li><a href="#">View Vehicle Activity</a></li>
                                        <li><a href="#">Manage Vehicle</a></li>
                                    </ul>
                                </td>
                        </tr>
                    <?php } ?>

                </table>

<? } ?>

<?php if(count($availableVehicles) == 0){ ?>

<h4>No Available Vehicles</h4>

<?php
}
else {
?>

                <h4>Available Vehicles</h4>

                <table class="driver-data" width="100%">

                    <tr>
                        <th width="200">Vehicle</th>
                        <th width="150">Reg Number</th>
                        <th>Description</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($availableVehicles as $availableVehicle){ ?>
                        <tr>
                                <td><?php echo $availableVehicle['Vehicle']['name']; ?></td>
                                <td><?php echo $availableVehicle['Vehicle']['reg_number']; ?></td>
                                <td><?php echo $availableVehicle['Vehicle']['description']; ?></td>
                                <td>
                                    <a href="<?php echo $availableVehicle['Vehicle']['id'];?>" id="assignJobButton" data-reveal-id="assignJobModal" class="small button">Assign New Job</a><br>
                                </td>
                        </tr>
                    <?php } ?>
                    </table>

     <? } ?>               

             </div>

            <div id="map_canvas_wrapper" class="large-5 columns show-for-large-up">
                <?php echo $this->GoogleMap->map($map_options); ?>
                
                <?php
                $i = 1;
                    foreach($activeVehicleLocations as $activeVehicleLocation){
                        if($activeVehicleLocation){
                            $marker_options = array(
                                'showWindow' => true,
                                'windowText' => "<h5>" . $activeVehicleLocation['Vehicle']['first_name'] . " " . $activeVehicleLocation['Vehicle']['last_name'] . "</h5>" .
                                                "<p>" . $activeVehicleLocation['Vehicle']['telephone'] . "</p>",
                                'markerTitle' => $activeVehicleLocation['Vehicle']['first_name'] . " " . $activeVehicleLocation['Vehicle']['last_name'],
                                'markerIcon' => 'truckMarker.png'
                            );
                            echo $this->GoogleMap->addMarker("map_canvas", $i, array(
                                'latitude' => $activeVehicleLocation['VehicleLocation']['latitude'],
                                'longitude' => $activeVehicleLocation['VehicleLocation']['longitude']),
                                $marker_options
                            );

                            $i++;
                        }
                    } 
               
                ?>
            </div>


                          <!-- Assign Job to Driver / Vehicle Modal -->
        <div id="assignJobModal" class="reveal-modal small" data-reveal>
            <h3>Assign Job</h3> 
            <form action="/apTracker/jobs/assign" id="JobAssignForm" method="post" accept-charset="utf-8" data-abide>

            <input name="data[Vehicle][id]" type="hidden" class="chosenDriverName"/>
            <hr/>
            <div class="row">
                    <div class="large-6 columns">
                         <div class="name-field">
                            <label for="PendingJobs">Pending Jobs: <small>required</small></label>
                            <select class="assignJobFirstSelect" name="data[Job][id]" size="10" id="PendingJob">
                               <?php
                               foreach($pendingJobs as $pendingJob){ ?>
                                   <option value="<?php echo $pendingJob['Job']['id'];?>"><?php echo $pendingJob['Job']['name'];?></option>
                               <?php
                               } ?>

                            </select>                        
                        </div>  
                    </div>

                    <div class="large-6 columns">
                        <label for"DriverVehicleJobVehicleId">Available Vehicles: <small>required</small></label>
                        <select class="assignJobSecondSelect" name="data[Driver][id]" size="10" id="AvailableVehicle">
                               <?php
                               foreach($availableDrivers as $availableDriver){ ?>
                                   <option value="<?php echo $availableDriver['Driver']['id'];?>"><?php echo $availableDriver['Driver']['first_name'] . " " . $availableDriver['Driver']['last_name'];?></option>
                               <?php
                               } ?>

                            </select>  
                     
                                <!--<a href="jobs/assign" id="modalJobAssignButton" class="assignJobToDriver button right disabled">Assign Job</a>-->
                                 <?php echo $this->Form->submit(__('Assign Job', true), 
                                    array('name' => 'assignJob', 'id' => 'modalJobAssignButton', 'class' => 'assignJobToDriver button right disabled')); 
                                
                                ?>
                                <?php echo $this->form->end();?>
                    </div>
            </div>
            
               
            <a class="close-reveal-modal">&#215;</a>

        </div>
</div>


	








