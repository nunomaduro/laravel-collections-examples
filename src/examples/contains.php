<?php

require_once('bootstrap.php');

# Task: I need to check if there is an Web Developer on the list of persons

const WEB_DEVELOPER = 'Web Developer';

$webDeveloperExist = false;
foreach ($arrayVariable as $person) {
	if (WEB_DEVELOPER === $person->job) {
		$webDeveloperExist = true;
		break;
	}
}

echo "\n Array variable: ". json_encode($webDeveloperExist);

// The same job, with collections:

$webDeveloperExist = $collection->contains('job', WEB_DEVELOPER);
echo "\n Collections: ". json_encode($webDeveloperExist);