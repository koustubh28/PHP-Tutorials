<?php 

    $marks = [
        "Krishna" => [
            "Physics" => 78,
            "Math" => 65,
            "Chemistry" => 80
        ],

        "Salman" => [
            "Physics" => 68,
            "Math" => 65,
            "Chemistry" => 72
        ],

        "Mohan" => [
            "Physics" => 80,
            "Math" => 65,
            "Chemistry" => 68
        ]
    ];

    echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Math</th>
        <th>Chemistry</th>
    </tr>
    ";
    foreach($marks as $key => $v1) {
        echo "<tr> 
                <td>$key</td>";
        foreach($v1 as $v2) {
            echo "<td>$v2</td>";
        }

        echo "</tr>";
    }
    echo "</table>";


?>