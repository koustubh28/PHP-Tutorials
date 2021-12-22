<?php 

//$color = ['red', 'green', 'purple', 'yellow'];
// $color = ['a' => 'red', 'b' => 'yellow', '42' => 'blue', 'd' => 'orange'];

// $newAray = array_slice($color, 1, 3, true);

// echo "<pre>";
// print_r($newAray);
// echo "</pre>";

$color = ['red', 'green', 'purple', 'yellow'];
$gradients = ['brown', 'purple', 'orange'];
//array_splice($color, 1, 1);

array_splice($color, 0, 2, $gradients);

echo "<pre>";
print_r($color);
echo "</pre>";


?>