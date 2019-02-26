<?php
  $size = 100;
  echo "<h1 style=\"text-align: center;\">Multiplication Table</h1>";
  echo "<table border=\"1\" style=\"text-align: center;\">";
  echo "<tr>";
  for ($x = 0; $x <= $size; $x++)
  {
    echo "<th>" . $x . "</th>";
  }
  echo "</tr>";
  for ($r =1; $r <= $size; $r++)
  {
    echo "<tr>";
    echo "<th>" . $r . "</th>";
    for ($c = 1; $c <= $size; $c++)
    {
      echo "<td>" .$c*$r."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
