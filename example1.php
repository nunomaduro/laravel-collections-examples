<?php

require_once('bootstrap.php');

# Example 1: I need to get the total money of all persons

$totalMoney = 0.0;
foreach ($arrayVariable as $person) {
	$totalMoney += $person->money;
}
echo "\n Array variable: ". $totalMoney;

$totalMoney = $collection->sum('money');
echo "\n Collections: ". $totalMoney;