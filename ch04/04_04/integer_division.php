<?php
// Convert $total_minutes to hours and minutes.

$total_minutes = 640;
$minutes = $total_minutes % 60;
//$hours = $total_minutes / 60; // or you could've done the following
$hours = ($total_minutes - $minutes) / 60;
$hours = intdiv($total_minutes, 60); // php 7.x

echo "Time taken was ". ($hours) . " hours $minutes minutes <br>";

