<?php

$food = array('orange', 'banana', 'apple', 'grapes');
$vegie = array('carrot', 'pea');

// echo in_array('apple', $food);

//echo array_search('apple', $food);

$newArray =  array_replace($food, $vegie);
print_r($newArray);

//array_replace_recursive() -- replaces multi dimen array

?>