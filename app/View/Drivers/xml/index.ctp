<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 03/01/14
 * Time: 08:41
 */
echo "<h1>huhu</h1>";
$xml = Xml::fromArray(array('response' => $drivers));
echo $xml->asXML();

?>