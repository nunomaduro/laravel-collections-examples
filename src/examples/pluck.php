<?php

require_once('bootstrap.php');

# Task: I need to get an array with all the ages of the persons

$ages = array_map(function($person) {
	return $person->age;
}, $arrayVariable);

echo "\n Array variable: ". json_encode($ages);

// The same job, with collections:

$ages = $collection->pluck('age');
echo "\n Collections: ". json_encode($ages);