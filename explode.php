<?php 

    //To convert String into array - explode
    //To convert array into string - implode
//    $str = "Hello World. It's a beautiful day";
//    $array = explode(" ", $str, -2);

     $colors = array('red', 'green', 'blue');
     $str = implode("<br>", $colors);

    echo $str;

    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";

?>
