<?php

$descriptions = [
  'Earth' => 'mostly harmless',
  'Marvin' => 'the paranoid android'
];

$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

echo $descriptions['Marvin'];

echo '<pre>';
print_r($descriptions);
echo '</pre>';

echo "Earth is described as {$descriptions['Earth']}";

/*
 * associative arrays can not be included in the double quoted strings, hence the {curly braces}.
 */