<?php echo $this->Html->script('viewGoogleMap'); ?>

<div>
    <h1>View Map</h1>

    <?php

    $map_options = array(
        'id' => 'map_canvas',
        'width' => '100%',
        'height' => '100%',
        'style' => '',
        'zoom' => 7,
        'type' => 'ROADMAP',
        'custom' => null,
        'localize' => true,
        'latitude' => 40.69847032728747,
        'longitude' => -1.9514422416687,
        'address' => '1 Infinite Loop, Cupertino',
        'marker' => true,
        'markerTitle' => 'Driver',
        'markerIcon' => 'http://mapicons.nicolasmollet.com/wp-content/uploads/mapicons/shape-default/color-9d7050/shapecolor-color/shadow-1/border-dark/symbolstyle-white/symbolshadowstyle-dark/gradient-no/truck3.png',
        'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
        'infoWindow' => true,
        'windowText' => 'Details:'
    ); ?>
    <?php echo $this->GoogleMap->map($map_options); ?>
    <?php echo $this->GoogleMap->addMarker("map_canvas", 2, array('latitude' => 40.69847, 'longitude' => -73.9514)); ?>
</div>