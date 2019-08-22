<?php
// initialize counter
$i = 0;

while ($i < 10) {
    // increment counter
    $i++;
    
    if ($i % 2) {
      continue; // this *skips* the rest of the loop
                // and NOT continue after the loop!
    }
    
    echo $i . '<br>';
//    if ($i == 6) 
//      break;
}
