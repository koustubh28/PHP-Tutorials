<?php

$fruit = ['a' => 'orange', 'b' => 'banana', 'c' => 'apple'];

$veggie = ['b' => 'Tomato', 'e' => 'Onion'];

$newArray = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>