<?php
$unit_cost = 0;

$wholesale_price = $unit_cost ?: 25;

echo $wholesale_price;

/*
 *  -- FLAWS -- in this logic! If price is set to $0, it is considered false because 0 is false in PHP!!
 */
