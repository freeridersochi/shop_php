<?php

require_once './src/include/checkout_functions.php';

$user = [ name =>'Dfcz', password=>'1234', email=>'12@34'];
$address = [ city =>'Moscow', street =>'Red Squere',  home =>'12', appartments =>'12']; 
$orders = [[product => 1, quantity => 2,  size =>1]]; 
$result = checkout($user, $address, $orders);

echo ($result);