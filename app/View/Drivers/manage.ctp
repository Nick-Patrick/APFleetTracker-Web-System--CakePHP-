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

<div class="full-width-content">
    <h2>Manage Drivers <a href="#" id="addDriverButton" data-reveal-id="modalPopup" class="button right">Add New Driver</a></h2>
    <table class="driver-data" width="100%">
        <tr>
            <th width="150">Driver</th>
            <th width="150">License Type</th>
            <th width="200">Telephone</th>
            <th width="150">Email</th>
            <th width="100">Created</th>
            <th width="100">Last Logged In</th>
            <th width="200"></th>
        </tr>
        <?php
            foreach($drivers as $driver){ ?>
                <tr>
                <td><?php echo $driver['Driver']['first_name'] . " " . $driver['Driver']['last_name'];?></td>
                <td><?php echo $driver['LicenseType']['license_type'];?></td>
                <td><?php echo $driver['Driver']['telephone'];?></td>
                <td><?php echo $driver['Driver']['email'];?></td>
                <td><?php echo $driver['Driver']['created'];?></td>
                <td><?php echo $driver['Driver']['last_logged_in'];?></td>
                <td style="text-align:right;">
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'drivers', 'action' => 'edit', $driver['Driver']['id']), array('class' => 'button success small')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'drivers', 'action' => 'delete', $driver['Driver']['id']), array('class' => 'button small alert'),
                            __('Are you sure you want to delete Driver: %s?', $driver['Driver']['first_name'] . ' ' . $driver['Driver']['last_name'])); ?>

                </td>
                </tr>
        <?php
            }
        ?>
    </table>


    <div id="modalPopup" class="reveal-modal medium" data-reveal>
        <h3>Add Driver</h3>
        <hr/>
        <div class="row">
            <form action="/apTracker/drivers/add" id="DriverManageForm" method="post" accept-charset="utf-8" data-abide>
        
         <fieldset>
            <div class="row">
                <div class="medium-6 columns">
                    
                    <div class="name-field">
                        <label>First Name <small>required</small></label>
                        <input type="text" tabindex="1" name="data[first_name]" id="first_name"  required>
                        <small class="error">Please enter a first name.</small>
                    </div>

                    <div class="email-field">
                        <label>Email <small>required</small></label>
                        <input type="email" tabindex="3" name="data[email]" id="email" required>                   
                        <small class="error">Please enter a valid email address.</small>
                    </div>

                    <div class="phone-field">
                        <label>Telephone <small>required</small></label>
                        <input type="text" tabindex="4" name="data[telephone]" id="telephone" pattern="alpha_numeric" required>
                        <small class="error">Please enter a valid telephone number.</small>
                    </div>
                
                </div>
                <div class="medium-6 columns">

                    <div class="name-field">
                        <label>Last Name <small>required</small></label>
                        <input type="text" tabindex="2" name="data[last_name]" id="last_name" required>
                        <small class="error">Please enter a last name.</small>
                    </div>

                <?php
                    echo $this->Form->input('license_type_id',
                        array('type' => 'select', 
                            'options' => $licenseTypes,
                             'tabindex' => '5')
                        );

                ?>
                </div>
            </div>
            
            <ul class="button-group right">
                <li>
                    <button id="modalCancelButton" class="small alert button">Cancel</button>
                </li>
                 <li>
                    <?php echo $this->Form->submit(__('Add Driver', true), 
                            array('name' => 'addDriver', 'id' => 'modalApplyButton', 'class' => 'small button right', 'tabindex' => '6')); 
                        
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
                $('#addDriverButton').click(function(){
                    $('#modalPopup').removeClass('close-reveal-modal');
                });            
            </script>

        </div>
    </div>
</div>
