<?php

require_once('bootstrap.php');

# Task: I need to get an array of persons, and the key must be the name of the person

$persons = [];
foreach ($arrayVariable as $person) {
	$persons[$person->name] = $person;
}

echo "\n Array variable: ". json_encode($persons);

// The same job, with collections:

$persons = $collection->keyBy('name');
echo "\n Collections: ". json_encode($persons);