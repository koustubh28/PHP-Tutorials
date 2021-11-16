<?php

  $emp = [
      [1, "Krishna", "Manager", 5000],
      [2, "Rishabh", "Engineer", 15000],
      [3, "Saurav", "Operator", 25000],
      [4, "Mahanaatma", "IT Manager", 35000],
  ];

//   echo $emp[0][1] . "<br>";
//   echo $emp[1][1] . "<br>";
//   echo $emp[2][1] . "<br>";
//   echo $emp[3][1] . "<br>";

    // for($row = 0; $row < 4; $row++) {
    //     for($col = 0; $col < 4; $col++) {
    //         echo $emp[$row][$col] . " ";
    //     }
    //     echo " <br> ";
    // }

    echo "<table border='2px' cellspacing='0'>";
    echo "<tr>
            <th>employee Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>";
    foreach($emp as $v1) {
        echo "<tr>";
        foreach($v1 as $v2) {
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";

//   echo "<pre>";
//   print_r($emp);
//   echo "</pre>";
?>