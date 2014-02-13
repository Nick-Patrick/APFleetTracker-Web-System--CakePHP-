<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-medium-up">
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

<div class="full-width-content">
    <h2>Manage Vehicles <a href="#" id="addVehicleButton" data-reveal-id="modalPopup" class="button right">Add New Vehicle</a></h2>
    <table width="100%">
        <tr>
            <th>Vehicle</th>
            <th>Type</th>
            <th>Reg Number</th>
            <th>License Req.</th>
            <th>Status</th>
            <th>Available</th>
            <th>Crane</th>
            <th>Trailer</th>
            <th>Beavertail</th>
            <th>Description</th>
        </tr>
        <?php
            foreach($vehicles as $vehicle){ ?>
                <tr>
                <td><?php echo $vehicle['Vehicle']['name'];?></td>
                <td><?php echo $vehicle['VehicleType']['vehicle_type'];?></td>
                <td><?php echo $vehicle['Vehicle']['reg_number'];?></td>
                <td><?php echo $vehicle['LicenseType']['license_type'];?></td>
                <td><?php echo $vehicle['Vehicle']['status'];?></td>
                <td><?php echo $vehicle['Vehicle']['available'];?></td>
                <td><?php echo $vehicle['Vehicle']['crane'];?></td>
                <td><?php echo $vehicle['Vehicle']['trailer'];?></td>
                <td><?php echo $vehicle['Vehicle']['hydraulic_beavertail'];?></td>
                <td><?php echo $vehicle['Vehicle']['description'];?></td>
                <td style="text-align:right;">
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'Vehicles', 'action' => 'edit', $vehicle['Vehicle']['id']), array('class' => 'button success small')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Vehicles', 'action' => 'delete', $vehicle['Vehicle']['id']), array('class' => 'button small alert'),
                            __('Are you sure you want to delete Vehicle: %s?', $vehicle['Vehicle']['name'])); ?>

                </td>
                </tr>
        <?php
            }
        ?>
    </table>
    <div id="modalPopup" class="reveal-modal medium" data-reveal>
        <h3>Add Vehicle</h3>
        <hr/>
        <div class="row">
            <form action="/apTracker/Vehicles/add" id="VehicleManageForm" method="post" accept-charset="utf-8" data-abide>
        
         <fieldset>
            <div class="row">
                <div class="medium-6 columns">
                    
                    <div class="name-field">
                        <label> Name <small>required</small></label>
                        <input type="text" name="data[name]" id="name" placeholder="A memorable name for the vehicle" tabindex="1" required>
                        <small class="error">Please enter a name.</small>
                    </div>

                    <div class="name-field">
                        <label>Reg Number <small>required</small></label>
                        <input type="text" tabindex="3" name="data[reg_number]" id="reg_number" pattern="alpha_numeric" tabindex="2" placeholder="The vehicle's registration number" required>                   
                        <small class="error">Please enter the registration number.</small>
                    </div>

                    <input name="data[trailer]" id="trailer" type="checkbox" tabindex="3" value="Yes"><label for="trailer">Trailer</label>
                    <input name="data[crane]" id="crane" type="checkbox" tabindex="4" value="Yes"><label for="crane">Crane</label>
                    <input name="data[hydraulic_beavertail]" id="hydraulic_beavertail" type="checkbox" tabindex="5" value="Yes"><label for="hydraulic_beavertail">Hydraulic Beavertail</label>
                     <div class="row">
                         <div class="large-12 columns">
                         <label for="description">Description <small>Optional</small></label>
                         <textarea name="data[description]" id="description" tabindex="8" placeholder="Any extra details (100 character limit)"></textarea>
                         </div>
                    </div>



                
                </div>
                <div class="medium-6 columns">

                <?php
                    echo $this->Form->input('vehicle_type_id',
                        array('type' => 'select', 
                            'options' => $vehicleTypes,
                             'tabindex' => '6',
                             'label' => 'Vehicle Type')
                        );
                ?>

                <?php
                    echo $this->Form->input('license_type_id',
                        array('type' => 'select', 
                            'options' => $licenseTypes,
                             'tabindex' => '7',
                             'label' => 'License Required')
                        );
                ?>
                <input name="data[available]" id="available" type="checkbox" value="Yes" tabindex="9" checked><label for="available">Ready for work?</label>


                </div>
            </div>
            
            <ul class="button-group right">
                <li>
                    <button id="modalCancelButton" class="small alert button">Cancel</button>
                </li>
                 <li>
                    <?php echo $this->Form->submit(__('Add Vehicle', true), 
                            array('name' => 'addVehicle', 'id' => 'modalApplyButton', 'class' => 'small button right', 'tabindex' => '10')); 
                        
                    ?>
                </li>
            </ul>
            </fieldset>
            </form>
           
            <a class="close-reveal-modal">&#215;</a>
            
            <script>
                $('#modalCancelButton').click(function(){
                    $('#modalPopup').addClass('close-reveal-modal');
                });
                $('#addVehicleButton').click(function(){
                    $('#modalPopup').removeClass('close-reveal-modal');
                });            
            </script>

        </div>
    </div>
</div>
