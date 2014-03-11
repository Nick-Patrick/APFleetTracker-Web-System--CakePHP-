
<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Overview'), array('controller' => 'overview', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Activity'), array('controller' => 'overview', 'action' => 'viewActivityMap')); ?> </li>
                <li class="divider"></li>
                <li><a href="#">Statistics</a></li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>
<div class="large-2 columns">
    <a href="#" data-reveal-id="modalPopup" id="mapFilterButton" class="small button">FILTER</a>
</div>
<div id="map_canvas_wrapper_full_screen" class="large-12 medium-12 small-12 columns">

    <div id="map_canvas" style="width:100%;height:900px;" class="map"></div>


</div>



<div id="modalPopup" class="reveal-modal" data-reveal>
    <h3>Filter <input id="filterDate" value="" class="filterDate" type="date"/></h3>

    <hr/>
    <div class="row">
        <div class="large-8 medium-12 columns">
            <dl class="tabs" data-tab>
                <dd class="active"><a href="#panel2-1">Drivers</a></dd>
                <dd><a href="#panel2-2">Vehicles</a></dd>
                <dd><a href="#panel2-3">Packages</a></dd>
                <dd><a href="#panel2-4">Completed Jobs</a></dd>
            </dl>
            <div class="tabs-content">
                <div class="content active" id="panel2-1">
                    <ul>
                       <?php
                           foreach($activeDrivers as $activeDriver){ ?>
                               <li>Active Drivers</li>
                               <li>
                                   <input name="checkedDrivers" id="<?php echo $activeDriver['Driver']['id']; ?>" value="<?php echo $activeDriver['Driver']['id']; ?>" type="checkbox" checked>
                                        <label for="<?php echo $activeDriver['Driver']['id']; ?>">
                                             <?php echo $activeDriver['Driver']['first_name'] . " " . $activeDriver['Driver']['last_name']; ?>
                                        </label>
                                   </input>

                               </li>
                               
                       <?php
                            }

                       ?>
                       <li>Available Drivers</li>
                       <?php 
                            foreach($availableDrivers as $availableDriver){ ?>
                               <li>
                                   <input name="checkedDrivers" id="<?php echo $availableDriver['Driver']['id']; ?>" value="<?php echo $availableDriver['Driver']['id']; ?>" type="checkbox" checked>
                                        <label for="<?php echo $availableDriver['Driver']['id']; ?>">
                                             <?php echo $availableDriver['Driver']['first_name'] . " " . $availableDriver['Driver']['last_name']; ?>
                                        </label>
                                   </input>

                               </li>
                         <?php } ?>
                    </ul>
                </div>
                <div class="content" id="panel2-2">
                    <p>Second panel content goes here...</p>
                </div>
                <div class="content" id="panel2-3">
                    <p>Third panel content goes here...</p>
                </div>
                <div class="content" id="panel2-4">
                    <p>Fourth panel content goes here...</p>
                </div>
            </div>

        </div>

        <div class="large-4 small-12 columns">
            <h5>Settings</h5>
            <hr/>
            <ul class="checkboxBlue">
                <li>
                    <input id="plotCurrentLocation" name="plotCurrentLocation" value="plotCurrentLocation" type="checkbox" checked />
                     <label for="plotCurrentLocation">Plot Current Location</label>
                </li>
                <li>
                    <input id="plotRouteTaken" name="plotRouteTaken" value="plotRouteTaken" type="checkbox"/>
                    <label for="plotRouteTaken">Plot Route Taken</label>
                </li>
                <li>
                    <input id="plotCollectionPoint" name="plotCollectionPoint" value="plotCollectionPoint" type="checkbox"/>
                    <label for="plotCollectionPoint">Plot Collection Point</label>
                </li>
                <li>
                    <input id="plotDropoffPoint" name="plotDropoffPoint" value="plotDropoffPoint" type="checkbox"/>
                    <label for="plotDropoffPoint">Plot Dropoff Point</label>
                </li>

            </ul>
        </div>

    </div>
    <ul class="button-group right">
        <li><button id="modalCancelButton" class="small alert button">Cancel</button></li>
        <li><button id="modalApplyButton" class="small button">Apply</button></li>
    </ul>


    <a class="close-reveal-modal">&#215;</a>
</div>

<?php 


echo $this->Html->script('mapFilter');

?>
