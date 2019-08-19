<?php
echo 'please enter the "ultimate number" : ';
//$answer = trim(fgets(STDIN));
$answer = 42;

$result = ($answer == 42) ? 'The answer to the Ultimate Question of Life, the Universe, and Everything' : 'Keep calculating';

echo $result;