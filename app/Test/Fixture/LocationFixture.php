<?php
/**
 * LocationFixture
 *
 */
class LocationFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Location');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '209',
			'name' => 'Tartin',
			'address1' => 'Ashby Road',
			'address2' => 'Twicross',
			'address3' => '',
			'town' => 'Atherston',
			'county' => 'Warwickshire',
			'postcode' => 'CV9 3PW',
			'location_opening_times_id' => null,
			'telephone' => '01234 567891',
			'created' => '2014-03-01 13:18:29',
			'modified' => '2014-03-01 13:18:29',
			'latitude' => '52.6428',
			'longitude' => '-1.50516'
		),
		array(
			'id' => '205',
			'name' => 'Telford Shopping Center',
			'address1' => 'Telford',
			'address2' => 'Longbridge Road',
			'address3' => '',
			'town' => 'Telford',
			'county' => 'Shropshire',
			'postcode' => 'TF3 4BX',
			'location_opening_times_id' => null,
			'telephone' => '02456 987456',
			'created' => '2014-02-16 08:41:58',
			'modified' => '2014-02-16 08:41:58',
			'latitude' => '52.6766',
			'longitude' => '-2.44678'
		),
	);

}
