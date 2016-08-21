<?php

require_once('bootstrap.php');

# Task: I want to sort all persons by their names

usort($arrayVariable, function($a, $b) {
	return strcmp($a->name, $b->name);
});

echo "\n Array variable: ". json_encode($arrayVariable);

// The same job, with collections:

$persons = $collection->sortBy('name');
echo "\n Collections: ". json_encode($persons);