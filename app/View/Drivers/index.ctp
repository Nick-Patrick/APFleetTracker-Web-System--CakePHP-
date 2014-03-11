<?php echo $this->Html->script('viewGoogleMap'); ?>
<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
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
            <div id="three-stat-box-wrapper" class="large-7 medium-12 small-12 columns">
                <ul class="small-block-grid-3">
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($availableDrivers); ?></li><li class="stat-box-desc">Available Drivers</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($activeDrivers); ?></li><li class="stat-box-desc">Active Drivers</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($completedJobsToday); ?></li><li class="stat-box-desc">Completed Jobs</li></ul></li>
                </ul>

<h4>Active Drivers</h4>
                    <table class="driver-data" width="100%">
                    <tr>
                        <th width="200">Driver</th>
                        <th width="150">License</th>
                        <th>Mobile</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($activeDrivers as $active){ ?>
                        <tr>
                                <td><?php echo $active['Driver']['first_name'] . " " . $active['Driver']['last_name']; ?></td>
                                <td><?php echo $active['LicenseType']['license_type']; ?></td>
                                <td><?php echo $active['Driver']['telephone']; ?></td>
                                <td>
                                    <a href="drivers/viewDriverCurrentActiveJob/<?php echo $active['Driver']['id']; ?>" class="small button expand">View Current Job</a><br>
                                    
                                </td>
                        </tr>
                    <?php } ?>

                </table>

                <h4>Available Drivers</h4>

                <table class="driver-data" width="100%">

                    <tr>
                        <th width="200">Driver</th>
                        <th width="150">License</th>
                        <th>Mobile</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($availableDrivers as $available){ ?>
                        <tr>
                                <td><?php echo $available['Driver']['first_name'] . " " . $available['Driver']['last_name']; ?></td>
                                <td><?php echo $available['LicenseType']['license_type']; ?></td>
                                <td><?php echo $available['Driver']['telephone']; ?></td>
                                <td>
                                    
                                    <a href="<?php echo $available['Driver']['id'];?>" id="assignJobButton" data-reveal-id="assignJobModal" class="assignJobButton small button expand">Assign New Job</a><br>
                                    
                                </td>
                        </tr>
                    <?php } ?>
                    </table>

                    

             </div>

            <div id="map_canvas_wrapper" class="large-5 columns show-for-large-up">
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


                   <!-- Assign Job to Driver / Vehicle Modal -->
        <div id="assignJobModal" class="reveal-modal small" data-reveal>
            <h3>Assign Job</h3> 
            <form action="/apTracker/jobs/assign" id="JobAssignForm" method="post" accept-charset="utf-8" data-abide>

            <input name="data[Driver][id]" type="hidden" class="chosenDriverName"/>
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
                        <label for"DriverVehicleJobVehicleId">Available Drivers: <small>required</small></label>
                        <select class="assignJobSecondSelect" name="data[Vehicle][id]" size="10" id="AvailableVehicle">
                               <?php
                               foreach($availableVehicles as $availableVehicle){ ?>
                                   <option value="<?php echo $availableVehicle['Vehicle']['id'];?>"><?php echo $availableVehicle['Vehicle']['name'];?></option>
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


	
