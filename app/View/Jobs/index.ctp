<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Left Nav Section -->
            <ul class="left">

                <li class="active"><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>




        <div id="driver-content" class="row">
            <div id="three-stat-box-wrapper" class="large-7 medium-12 small-12 columns">
                <ul class="small-block-grid-3">
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($activeJobs); ?></li><li class="stat-box-desc">Active Jobs</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($assignedJobs); ?></li><li class="stat-box-desc">Assigned Jobs</li></ul></li>
                    <li class="stat-box"><ul><li class="stat-box-number"><?php echo count($pendingJobs); ?></li><li class="stat-box-desc">Pending Jobs</li></ul></li>
                </ul>

<h4>Active Jobs</h4>
                    <table class="driver-data" width="100%">
                    <tr>
                        <th width="200">Job</th>
                        <th width="250">Additional Details</th>
                        <th>Driver</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($activeJobs as $activeJob){ ?>
                        <tr>
                                <td><?php echo $activeJob['Job']['name']; ?></td>
                                 <td><?php echo $activeJob['Job']['additional_details']; ?></td>
                                 <td><?php echo $activeJob['Driver']['first_name']. " " . $activeJob['Driver']['last_name'] ; ?></td>
                                <td>
                                    <a href="jobs/viewCurrentActiveJob/<?php echo $activeJob['Driver']['id'];?> " class="small button expand">View Current Job</a><br>
                                </td>
                        </tr>
                    <?php } ?>

                </table>

                <h4>Assigned Jobs</h4>

                <table class="driver-data" width="100%">

                    <tr>
                        <th width="200">Job</th>
                        <th width="250">Additional Details</th>
                        <th>Assigned To</th>
                        <th width="200"></th>
                    </tr>
                    <?php foreach($assignedJobs as $assignedJob){ ?>
                        <tr>
                                <td><?php echo $assignedJob['Job']['name']; ?></td>
                                <td><?php echo $assignedJob['Job']['additional_details']; ?></td>
                                <td><?php echo $assignedJob['Driver']['first_name']. " " . $assignedJob['Driver']['last_name'] ; ?></td>
                                <td>
                                    <a href="#" class="small button expand">Manage Job</a><br>
                                   
                                </td>
                        </tr>
                    <?php } ?>
                    </table>

                 <h4>Pending Jobs</h4>
                    <table class="driver-data" width="100%">

                    <tr>
                        <th width="300">Job</th>
                        <th width="400">Additional Details</th>
                        
                        <th width="200"></th>
                    </tr>
                    <?php foreach($pendingJobs as $pendingJob){ ?>
                        <tr>
                                <td><?php echo $pendingJob['Job']['name']; ?></td>
                                <td><?php echo $pendingJob['Job']['additional_details']; ?></td>
                                
                                <td>
                                    <a href="<?php echo $pendingJob['Job']['id'];?>" id="assignJobButton" data-reveal-id="assignJobModal" class="assignJobButton small button expand">Assign Job</a>
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

            <input name="data[Job][id]" type="hidden" class="chosenDriverName"/>
            <hr/>
            <div class="row">
                    <div class="large-6 columns">
                         <div class="name-field">
                            <label for="PendingJobs">Available Drivers: <small>required</small></label>
                            <select class="assignJobFirstSelect" name="data[Driver][id]" size="10" id="PendingJob">
                               <?php
                               foreach($availableDrivers as $availableDriver){ ?>
                                   <option value="<?php echo $availableDriver['Driver']['id'];?>"><?php echo $availableDriver['Driver']['first_name'] . " " . $availableDriver['Driver']['last_name'];?></option>
                               <?php
                               } ?>

                            </select>                        
                        </div>  
                    </div>

                    <div class="large-6 columns">
                        <label for"DriverVehicleJobVehicleId">Available Vehicles: <small>required</small></label>
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


	




