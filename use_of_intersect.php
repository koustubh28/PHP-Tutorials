<?php 

$c1 = array('a' => 'red', 'b' => 'green', 'c' => 'blue', 'd' => 'yellow');
$c2 = array('a' => 'red', 'f' => 'green', 'd' => 'purple');

$newArray = array_intersect_assoc($c1, $c2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>