<?php 
require __DIR__ . '/vendor/autoload.php';

use testingmic\GeoIP2Country;

$reader = new GeoIP2Country();
$record = $reader->resolve('185.189.113.54');

print_r($record);
