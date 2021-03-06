<?php

require_once('bootstrap.php');

# Task: I need to group all the persons by their job

$jobsGroup = [];
foreach ($arrayVariable as $person) {
	if ( ! isset($jobsGroup[$person->job])) {
		$jobsGroup[$person->job] = [];
	}
	$jobsGroup[$person->job][] = $person;
}

echo "\n Array variable: ". json_encode($jobsGroup);

// The same job, with collections:

$jobsGroup = $collection->groupBy('job');
echo "\n Collections: ". json_encode($jobsGroup);