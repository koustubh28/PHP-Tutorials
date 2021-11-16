<?php 

//$color = ['red', 'green', 'purple', 'yellow'];
$color = ['a' => 'red', 'b' => 'yellow', '42' => 'blue', 'd' => 'orange'];

$newAray = array_slice($color, 1, 3, true);

echo "<pre>";
print_r($newAray);
echo "</pre>";

?>