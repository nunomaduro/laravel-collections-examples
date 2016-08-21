<?php

require_once('../../vendor/autoload.php');

use Illuminate\Support\Collection;
use App\Person;

$arrayVariable = [
	new Person('Nuno Maduro', 26, 'CTO', 5000),
	new Person('Alex', 31, 'Lead Developer', 2000),
	new Person('Fabien', 44, 'Front End Developer', 1900),
	new Person('Kevin', 25, 'Web Developer', 1000),
	new Person('Fred', 52, 'Web Developer', 1200)
];

$collection = New Collection($arrayVariable);