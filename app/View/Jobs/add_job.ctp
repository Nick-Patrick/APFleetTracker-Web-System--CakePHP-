<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-medium-up">
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

<div class="full-width-content jobForm">
    <h2>Create New Job </h2>
    <hr/>
    <form action="/apTracker/Jobs/add" id="JobAddJobForm" method="post" accept-charset="utf-8" data-abide>
    <fieldset>

        <div class="row">           
            <div class="large-4 medium-6 small-12 columns"> 
                  <label>Job Name <small>required</small></label>
                  <input type="text" tabindex="1" name="data[Job][name]" id="name" placeholder="A memorable name for the job" required />
                  <small class="error">Please enter a name</small>
            </div>
            <div class="large-4 medium-6 small-12 columns">
                  <label>Due By <small>optional</small></label>
                  <input id="filterDate" value="" name="data[Job][due_date]" class="filterDate" type="date"/>
            </div>
            <div class="large-4 medium-6 small-12 columns">
            </div>
        </div>
            
        <fieldset>

        <!-- Add Collection Point -->
        <div class="row">
            <div class="large-12 columns">
                    <h4>Collection Point: <span class="subheader" style="font-weight:700;" id="collection_name" class="collection_name"></span><a href="#" id="addLocationButton" data-reveal-id="modalPopup" class="small button right">Create New Location</a></h4>
                    
                    <div class="large-4 columns">
                        <?php
                            echo $this->Form->input('Job.collection_id',
                                array('type' => 'select',
                                'label' => 'Available Locations',
                                'multiple' => false, 
                                'size' => '8',
                                'options' => $locations,
                                'tabindex' => '7')
                            );
                        ?>
                    </div>
                    <ul id="collectionPoints">
                        <div class="large-8 columns">

                            <div class="small-5 columns">
                                <li><span>Address 1:</span> <span id="collection_address1"></span></li>
                                <li><span>Address 2:</span> <span id="collection_address2"></span></li>
                                <li><span>Address 3:</span> <span id="collection_address3"></span></li>
                                <li><span>Town:</span> <span id="collection_town"></span></li>
                                <li><span>County:</span> <span id="collection_county"></span></li>
                                <li><span>Postcode:</span> <span id="collection_postcode"></span></li>
                                <li><span>Telephone:</span> <span id="collection_telephone"></span></li>
                            </div>
                   
                            <div class="small-7 columns">
                                <table class="openingTimesTable">
                                    <tr>
                                        <td></td><td>Opening</td><td>Closing</td>
                                    </tr>
                                    <tr>
                                        <td>M</td><td id="mon"></td><td id="mon_c"></td>
                                    </tr>
                                    <tr>
                                        <td>T</td><td id="tues"></td><td id="tues_c"></td>
                                    </tr>
                                    <tr>
                                        <td>W</td><td id="wed"></td><td id="wed_c"></td>
                                    </tr>
                                    <tr>
                                        <td>T</td><td id="thur"></td><td id="thur_c"></td>
                                    </tr>
                                    <tr>
                                        <td>F</td><td id="fri"></td><td id="fri_c"></td>
                                    </tr>
                                    <tr>
                                        <td>Sa</td><td id="sat"></td><td id="sat_c"></td>
                                    </tr>
                                    <tr>
                                        <td>Su</td><td id="sun"></td><td id="sun_c"></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                 </ul>
                    
                
                
            </div>
        </div>
<hr/>
        <hr/>

        <!-- Add Dropoff Point -->
        <div class="row">
            <div class="large-12 columns">
                
                    <h4>Dropoff Point: <span class="subheader" style="font-weight:700;" id="dropoff_name" class="dropoff_name"></span></h4>
                    <div class="large-4 columns">

                        <?php
                            echo $this->Form->input('Job.dropoff_id',
                                array('type' => 'select',
                                'label' => 'Available Locations',
                                'multiple' => false, 
                                'size' => '8',
                                'options' => $locations,
                                'tabindex' => '7',
                                'class' => 'dropoffSelect')
                            );
                        ?>
                    </div>
                    <ul id="collectionPoints">
                        <div class="large-8 columns">

                            <div class="small-5 columns">
                                <li><span>Address 1:</span> <span id="dropoff_address1"></span></li>
                                <li><span>Address 2:</span> <span id="dropoff_address2"></span></li>
                                <li><span>Address 3:</span> <span id="dropoff_address3"></span></li>
                                <li><span>Town:</span> <span id="dropoff_town"></span></li>
                                <li><span>County:</span> <span id="dropoff_county"></span></li>
                                <li><span>Postcode:</span> <span id="dropoff_postcode"></span></li>
                                <li><span>Telephone:</span> <span id="dropoff_telephone"></span></li>
                            </div>
                   
                            <div class="small-7 columns">
                                <table class="openingTimesTable">
                                    <tr>
                                        <td></td><td>Opening</td><td>Closing</td>
                                    </tr>
                                    <tr>
                                        <td>M</td><td id="d_mon"></td><td id="d_mon_c"></td>
                                    </tr>
                                    <tr>
                                        <td>T</td><td id="d_tues"></td><td id="d_tues_c"></td>
                                    </tr>
                                    <tr>
                                        <td>W</td><td id="d_wed"></td><td id="d_wed_c"></td>
                                    </tr>
                                    <tr>
                                        <td>T</td><td id="d_thur"></td><td id="d_thur_c"></td>
                                    </tr>
                                    <tr>
                                        <td>F</td><td id="d_fri"></td><td id="d_fri_c"></td>
                                    </tr>
                                    <tr>
                                        <td>Sa</td><td id="d_sat"></td><td id="d_sat_c"></td>
                                    </tr>
                                    <tr>
                                        <td>Su</td><td id="d_sun"></td><td id="d_sun_c"></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                 </ul>
                    
                

                
            </div>
        </div>
</fieldset>
        <!-- Add Package Point -->
        <div class="row">
            <div class="large-12 columns">
                <fieldset>
                    <h4>Packages: <a href="#" id="createPackageButton" data-reveal-id="modalPackagePopup" class="small button right">Create New Package</a></h4>
                    <div class="row clear-both">
                    <div class="large-4 columns">
                        <?php
                            echo $this->Form->input('packageSelect',
                                array('type' => 'select',
                                'label' => 'Available Packages',
                                'multiple' => true, 
                                'options' => $packages,
                                'tabindex' => '7')
                            );
                        ?>
                    </div>
                    <div class="large-4 columns">
                        <ul id="packageDetails">
                            <li><span>Name: </span><span id="package_name"></span></li>
                            <li><span>Length: </span><span id="package_length"></span></li>
                            <li><span>Width: </span><span id="package_width"></span></li>
                            <li><span>Height: </span><span id="package_height"></span></li>
                            <li><span>Weight: </span><span id="package_weight"></span></li>
                            <li><span>Special Reqs: </span><span id="package_reqs"></span></li>
                        </ul>
                        <hr/>
                        <a href="#" id="addPackageToList" class="small button left">Add Package</a>
                        <a href="#" id="removePackageFromList" class="small button alert right">Remove Package</a>
                    </div>
                    <div class="large-4 columns">
                        <?php
                            echo $this->Form->input('JobPackage.package_id',
                                array('type' => 'select',
                                'label' => 'Added Packages',
                                'options' => '',
                                'multiple' => true, 
                                'tabindex' => '7')
                            );
                        ?>
                    </div>
                    </div>

                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns">
                  <label>Additional Details <small>Optional (200 character limit)</small></label>
                  <input type="text" width="100%" name="data[Job][additional_details]" id="additional_details" placeholder="Enter any additional details for the driver." />
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">

            <input name="data[DriverVehicleJob][driver_id]" type="hidden" id="assignedDriverId" value=""/>
            <input name="data[DriverVehicleJob][vehicle_id]" type="hidden" id="assignedVehicleId" value=""/>
                <ul>
                    <li><h5>Assigned Driver: <span style="font-weight:700;" id="assignedDriver"></span></h5></li>
                    <li><h5>Assigned Vehicle: <span style="font-weight:700;" id="assignedVehicle"></span></h5></li>
                    <li><h5>Created By: <span style="font-weight:700;" id="createdBy"><?php echo $currentUserName['User']['first_name'] . " " . $currentUserName['User']['last_name']; ?></span></h5></li>
                    <input name="data[Job][created_by]" type="hidden" id="jobCreatedBy" value="<?php echo $currentUserName['User']['first_name'] . ' ' . $currentUserName['User']['last_name']; ?>"/>
                </ul>
            </div>
            <div class="large-6 columns">
                <ul class="button-group right">
                     <li>
                        <a href="#" id="assignJobNowButton" data-reveal-id="assignJobModal" class="button right">Assign Driver</a>
                    </li>

                    <li>
                        <button id="assignLaterJob" class="saveJobButton alert button">Save and Assign Later</button>
                    </li>

                </ul>
            </div>
        </div>

    </fieldset>
    </form>

    <!-- Add Location Model -->
    <div id="modalPopup" class="reveal-modal medium" data-reveal>
        <h3>Add Location </h3>
        <hr/>
        <div class="row">
            <form action="/apTracker/Locations/add" id="AddCollectionForm" method="post" accept-charset="utf-8" data-abide>
                <div class="large-6 columns">
                     <div class="name-field">
                        <label>Name <small>required</small></label>
                        <input type="text" name="data[Location][name]" id="collection_name" placeholder="A memorable name for this location" tabindex="1" required>
                        <small class="error">Please enter a name.</small>
                    </div>  
                </div>
                <div class="large-6 columns">
                      <div class="telephone-field">
                        <label>Telephone <small>required</small></label>
                        <input type="text" name="data[Location][telephone]" id="collection_telephone" placeholder="Telephone number" tabindex="2" pattern="alpha_numeric" required>
                        <small class="error">Please enter a telephone number.</small>
                    </div>       
                </div>
        </div>
         <fieldset>
            <div class="row">

                <div class="large-6 columns">
                      
                <h5>Address Details:</h5>
                <hr/>

                    <div class="name-field">
                        <label>Address 1</label>
                        <input type="text" value="" tabindex="2" name="data[Location][address1]" id="collection_address1" placeholder="Address 1">
                    </div>

                    <div class="name-field">
                        <label>Address 2 </label>
                        <input type="text" tabindex="3" name="data[Location][address2]" id="collection_address2" placeholder="Address 2">
                    </div>

                    <div class="name-field">
                        <label>Address 3 </label>
                        <input type="text" tabindex="4" name="data[Location][address3]" id="collection_address3" placeholder="Address 3">
                    </div>

                    <div class="name-field">
                        <label>Town </label>
                        <input type="text" tabindex="5" name="data[Location][town]" id="collection_town" placeholder="Town">
                    </div>

                    <div class="name-field">
                        <label>County </label>
                        <input type="text" tabindex="6" name="data[Location][county]" id="collection_county" placeholder="County">
                    </div>

                    <div class="name-field">
                        <label>Postcode <small>required</small></label>
                        <input type="text" tabindex="7" name="data[Location][postcode]" id="collection_postcode" placeholder="Postcode" required>
                    </div>
                </div>


                <div class="large-6 columns">
                    <h5>Opening Times: <small class="right">Default: 07:00 - 17:00</small></h5>
                    <hr/>
                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Monday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="8" name="data[LocationOpeningTime][monday_open]" id="monday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="9" name="data[LocationOpeningTime][monday_close]" id="monday_close" value="17:00" placeholder="17:00">
                       </div>
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Tuesday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="10" name="data[LocationOpeningTime][tuesday_open]" id="tuesday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="11" name="data[LocationOpeningTime][tuesday_close]" id="tuesday_close" value="17:00" placeholder="17:00">
                       </div>
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Wednesday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="12" name="data[LocationOpeningTime][wednesday_open]" id="wednesday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="13" name="data[LocationOpeningTime][wednesday_close]" id="wednesday_close" value="17:00" placeholder="17:00">
                       </div>
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Thursday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="14" name="data[LocationOpeningTime][thursday_open]" id="thursday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="15" name="data[LocationOpeningTime][thursday_close]" id="thursday_close" value="17:00" placeholder="17:00">
                       </div>
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Friday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="16" name="data[LocationOpeningTime][friday_open]" id="friday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="17" name="data[LocationOpeningTime][friday_close]" id="friday_close" value="17:00" placeholder="17:00">
                       </div>
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Saturday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="18" name="data[LocationOpeningTime][saturday_open]" id="saturday_open" value="07:00" placeholder="07:00">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="19" name="data[LocationOpeningTime][saturday_close]" value="17:00" id="saturday_close" placeholder="17:00">
                       </div>
               
                    </div>

                    <div class="name-field">
                        <div class="large-4 columns">
                            <label>Sunday </label>
                        </div>
                        <div class="large-4 columns">
                           <input type="text" tabindex="20" name="data[LocationOpeningTime][sunday_open]" value="" id="sunday_open" placeholder="Closed">
                        </div>
                        <div class="large-4 columns">
                            <input type="text" tabindex="21" name="data[LocationOpeningTime][sunday_close]" value="" id="sunday_close" placeholder="Closed">
                       </div>

                         <ul class="button-group right">
                           <li>
                                 <button id="modalCancelButton" class="alert button">Cancel</button>
                           </li>
                           <li>
                                 <?php echo $this->Form->submit(__('Save Location', true), 
                                     array('name' => 'addLocation', 'id' => 'modalApplyButton', 'class' => 'button right', 'tabindex' => '10'));  
                             ?>
                           </li>
                         </ul>
                     </div>
                </div>
            </fieldset>
            </form>
        <a class="close-reveal-modal">&#215;</a>

            </div>
            <!-- End Add Location Modal -->
            

     <!-- Add Package Model -->
    <div id="modalPackagePopup" class="reveal-modal medium" data-reveal>
        <h3>Add Package </h3>
        <hr/>
        <div class="row">
            <form action="/apTracker/Packages/add" id="AddPackageForm" method="post" accept-charset="utf-8" data-abide>
                <div class="large-6 columns">
                     <div class="name-field">
                        <label>Package Name <small>required</small></label>
                        <input type="text" name="data[Package][name]" id="package_name" placeholder="A memorable name for this package" tabindex="1" required>
                        <small class="error">Please enter a name for the package.</small>
                    </div>  
                </div>
                <div class="large-6 columns">
     
                </div>
        </div>
         <fieldset>
            <div class="row">

                <div class="large-12 columns">
                      
                <h5>Package Details: <small>Optional</small></h5>
                <hr/>

                    <div class="name-field">
                        <label>Length:</label>
                        <input type="text" value="" tabindex="2" name="data[Package][length]" id="package_length" placeholder="Package Length">
                    </div>

                    <div class="name-field">
                        <label>Width:</label>
                        <input type="text" value="" tabindex="3" name="data[Package][width]" id="package_width" placeholder="Package Width">
                    </div>

                    <div class="name-field">
                        <label>Height:</label>
                        <input type="text" value="" tabindex="4" name="data[Package][height]" id="package_height" placeholder="Package Height">
                    </div>

                    <div class="name-field">
                        <label>Weight:</label>
                        <input type="text" value="" tabindex="5" name="data[Package][weight]" id="package_weight" placeholder="Package Weight">
                    </div>

                    <div class="name-field">
                        <label>Special Reqs:</label>
                        <input type="text" value="" tabindex="6" name="data[Package][special_reqs]" id="package_reqs" placeholder="Any special requirements for this package.">
                    </div>



 

                         <ul class="button-group right">
                           <li>
                                 <button id="modalPackageCancelButton" class="alert button">Cancel</button>
                           </li>
                           <li>
                                 <?php echo $this->Form->submit(__('Save Package', true), 
                                     array('name' => 'addPackage', 'id' => 'modalPackageApplyButton', 'class' => 'button right', 'tabindex' => '10'));  
                             ?>
                           </li>
                         </ul>
                     </div>
                </div>
            </fieldset>
            </form>
        <a class="close-reveal-modal">&#215;</a>

        </div>

        <!-- Assign Job to Driver / Vehicle Modal -->
        <div id="assignJobModal" class="reveal-modal small" data-reveal>
            <h3>Assign Jobs </h3>
            <hr/>
            <div class="row">
                    <div class="large-6 columns">
                         <div class="name-field">
                            <label for="DriverVehicleJob">Available Drivers: <small>required</small></label>
                            <select name="data[DriverVehicleJob][driver_id]" size="10" id="DriverVehicleJob">
                               <?php
                               foreach($drivers as $driver){ ?>
                                   <option value="<?php echo $driver['Driver']['id'];?>"><?php echo $driver['Driver']['first_name'] . ' ' . $driver['Driver']['last_name'];?></option>
                               <?php
                               } ?>

                            </select>                        
                        </div>  
                    </div>

                    <div class="large-6 columns">
                        <label for"DriverVehicleJobVehicleId">Available Vehicles: <small>required</small></label>
                        <?php
                            echo $this->Form->input('DriverVehicleJob.vehicle_id',
                                array('type' => 'select',
                                'label' => false,
                                'options' => $vehicles,
                                'multiple' => false,
                                'size' => '10', 
                                'tabindex' => '30'
                                )
                            );
                        ?>
                        <ul class="button-group right">
                           <li>
                                <a href="#" id="modalJobDriverCancelButton" class="alert button small">Cancel</a>
                           </li>
                           <li>
                                <a href="#" id="modalJobDriverAssignButton" class="button small">Assign Driver and Vehicle</a>
                           </li>
                         </ul>
                    </div>
            </div>
            
               
            <a class="close-reveal-modal">&#215;</a>

        </div>

</div>