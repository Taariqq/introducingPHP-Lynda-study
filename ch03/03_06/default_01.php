<?php
$unit_cost = 0;
//$non_existent = 5;

$wholesale_price = $unit_cost ?? $non_existent ?? 25;

echo $wholesale_price;

/*
 * you can chain the null-coalesce operator ?? 
 */
