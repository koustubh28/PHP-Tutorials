<?php

  $emp = [
      [1, "Krishna", "Manager", 5000],
      [2, "Rishabh", "Engineer", 15000],
      [3, "Saurav", "Operator", 25000],
      [4, "Mahanaatma", "IT Manager", 35000],
  ];

  echo "<table border='1px' cellspacing='0'>";
  foreach($emp as list($id, $name, $designation, $salary)) {
    echo "<tr>
            <td>$id</td> 
            <td>$name</td>
            <td>$designation</td>
            <td>$salary</td>
        </tr>";
  }
  echo "</table>";

?>