<?php echo $this->Html->script('viewGoogleMap'); ?>
<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">

    </form>

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

        <div class="large-7 medium-12 small-12 columns">
            <h2><?php echo $activeJob[0]['Job']['name'];?></h2>
            <small class="right">Created By: <?php echo $activeJob[0]['Job']['created_by'];?> - <?php echo $activeJob[0]['Job']['created'];?></small>
            <h3>Assigned To: <strong><?php echo $activeDrivers[0]['Driver']['first_name'] . " " . $activeDrivers[0]['Driver']['last_name']; ?></strong></h3>
            <?php if($activeJob[0]['Job']['due_date'] != "") { ?>
                    <small class="right">Due By: <?php echo $activeJob[0]['Job']['due_date'];?></small>
                <?php } ?>
            <hr/>
            <div class="large-6 medium-12 small-12 columns">

                <h5>Collection: <?php echo $jobCollection['0']['Location']['name'];?></h5>
                <ul class="no-bullet locationDetails">
                    <li>Address 1: <span class="right"><?php echo $jobCollection['0']['Location']['address1'];?></span></li>
                    <li>Address 2: <span class="right"><?php echo $jobCollection['0']['Location']['address2'];?></span></li>
                    <li>Address 3: <span class="right"><?php echo $jobCollection['0']['Location']['address3'];?></span></li>
                    <li>Town: <span class="right"><?php echo $jobCollection['0']['Location']['town'];?></span></li>
                    <li>County: <span class="right"><?php echo $jobCollection['0']['Location']['county'];?></span></li>
                    <li>Postcode: <span class="right"><?php echo $jobCollection['0']['Location']['postcode'];?></span></li>
                    <li>Telephone: <span class="right"><?php echo $jobCollection['0']['Location']['telephone'];?></span></li>
                </ul>
            </div>

            <div class="large-6 medium-12 small-12 columns">
                <h5>Dropoff: <?php echo $jobDropoff['0']['Location']['name'];?></h5>
                <ul class="no-bullet locationDetails">
                    <li>Address 1: <span class="right"><?php echo $jobDropoff['0']['Location']['address1'];?></span></li>
                    <li>Address 2: <span class="right"><?php echo $jobDropoff['0']['Location']['address2'];?></span></li>
                    <li>Address 3: <span class="right"><?php echo $jobDropoff['0']['Location']['address3'];?></span></li>
                    <li>Town: <span class="right"><?php echo $jobDropoff['0']['Location']['town'];?></span></li>
                    <li>County: <span class="right"><?php echo $jobDropoff['0']['Location']['county'];?></span></li>
                    <li>Postcode: <span class="right"><?php echo $jobDropoff['0']['Location']['postcode'];?></span></li>
                    <li>Telephone: <span class="right"><?php echo $jobDropoff['0']['Location']['telephone'];?></span></li>
                </ul>
            </div>
            <hr/>

            <div class="12 columns">
                <h5>Vehicle: <?php echo $vehicle['0']['Vehicle']['name'];?> - <?php echo $vehicle['0']['Vehicle']['reg_number'];?> - <?php echo $vehicle['0']['VehicleType']['vehicle_type'];?></h5>
            </div>

            

            <div class="12 columns">
                <?php $i = 0; ?>
                <?php echo "<h5>Packages:</h5>"; ?>
                <?php foreach($packages as $package){
                    if (array_key_exists(0, $package)) {
                        echo "<h5>" . $i . " - " . $package[0]['Package']['name'] . "</h5>";
                    }
                    $i++;
                }
                ?>
            </div>
            
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

                      $collection_marker_options = array(
                                'showWindow' => true,
                                'windowText' => "<h5>" . $jobCollection[0]['Location']['name'] . "<h5>" . 
                                                "<p>" . $jobCollection[0]['Location']['postcode'] . "</p>" .
                                                "<p>" . $jobCollection[0]['Location']['telephone'] . "</p>",
                                'markerTitle' => "Collection: " . $jobCollection[0]['Location']['name'],
                                'markerIcon' => 'pickup.png'
                            );
                            echo $this->GoogleMap->addMarker("map_canvas", 2, array(
                                    'latitude' => $jobCollection[0]['Location']['latitude'],
                                    'longitude' => $jobCollection[0]['Location']['longitude']),
                                    $collection_marker_options
                            );

                       $dropoff_marker_options = array(
                                'showWindow' => true,
                                'windowText' => "<h5>" . $jobDropoff[0]['Location']['name'] . "<h5>" . 
                                                "<p>" . $jobDropoff[0]['Location']['postcode'] . "</p>" .
                                                "<p>" . $jobDropoff[0]['Location']['telephone'] . "</p>",
                                'markerTitle' => "Dropoff: " . $jobDropoff[0]['Location']['name'],
                                'markerIcon' => 'finish.png'
                            );
                            echo $this->GoogleMap->addMarker("map_canvas", 3, array(
                                    'latitude' => $jobDropoff[0]['Location']['latitude'],
                                    'longitude' => $jobDropoff[0]['Location']['longitude']),
                                    $dropoff_marker_options
                            );
               
                ?>
            </div>




       

</div>


	
