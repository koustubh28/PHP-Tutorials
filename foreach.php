<?php

    // $colors = [
    //     "red",
    //     "green",
    //     "blue"
    // ];
    
    // foreach($colors as $color) {
    //     echo $color . "<br>";
    // }

    $ages = [
        "Koustubh" => 28,
        "John" => 25,
        "Vinita" => 20
    ];

    echo "<ul>";
    foreach($ages as $key => $age) {
        echo "<li>$key = $age</li>";
    }
    echo "</ul>";

?>