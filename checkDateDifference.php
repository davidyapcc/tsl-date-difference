<?php

$dateA = strtotime("20th January 2019");
$dateB = strtotime("31st March 2021");

$diffInSeconds = $dateB - $dateA;
$diffInDays = floor($diffInSeconds / (60 * 60 * 24));

echo "The difference between date B and date A is {$diffInDays} days.";
