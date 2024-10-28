<?php 
require __DIR__ . '/vendor/autoload.php';

$oIpAddressGeoLocation = new testingmic\IpAddressGeoLocation();

print_r($oIpAddressGeoLocation->resolve('37.140.250.97'));
?>