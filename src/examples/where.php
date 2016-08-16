<?php

require_once('bootstrap.php');

# Task: I need a list of all Web Developers

const WEB_DEVELOPER = 'Web Developer';

$webDevelopers = array_filter($arrayVariable, function($person) {
	return WEB_DEVELOPER === $person->job;
});

echo "\n Array variable: ". json_encode($webDevelopers);

// The same job, with collections:

$webDevelopers = $collection->where('job', WEB_DEVELOPER);
// $webDevelopers = $collection->where('job', WEB_DEVELOPER)->where('age', 25);
echo "\n Collections: ". json_encode($webDevelopers);