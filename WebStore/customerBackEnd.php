<?php
  $Item1 = $_POST["item1"];
  $Item2 = $_POST["item2"];
  $Item3 = $_POST["item3"];
  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  $Shipping = $_POST["SHIP"];

  $Ship = array("Free 7-Day", "Over-Night", "3-Day");
  $ShipCost = array("0.00", "50.00", "5.00");
  $Total = 0;

  //print header
  echo "<head>";
  echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" media=\"screen\">";
  echo "</head>";


  //print welcome message
  echo "<center>";
  echo "<div id=\"thankYou\">";
  echo "<h1> Thank you for your purchase! </h1>";
  echo "<h2> Username: " . $Username . "<br>";
  echo "Password: " . $Password . "</h2>";
  echo "</div>";


  //print table receipt
  echo "<h3> " . $Username . "'s Receipt </h3>";
  echo "<table id=\"Receipt\">";
  echo "<tr id=\"top\">";
  echo "<td></td>";
  echo "<td><b> Quantity </b></td>";
  echo "<td><b> Cost Per Item </b></td>";
  echo "<td><b> Sub Total </b></td>";
  echo "</tr>";
  echo "<tr id=\"input\">";
  echo "<td id=\"important\"><b> Beachball </b></td>";
  echo "<td> " . $Item1 . "</td>";
  echo "<td> $1.00 </td>";
  echo "<td> $" . intval($Item1) * 1 . ".00</td>";
  $Total += intval($Item1) * 1;
  echo "</tr>";
  echo "<tr id=\"input\">";
  echo "<td id=\"important\"><b> Basketball </b></td>";
  echo "<td> " . $Item2 . "</td>";
  echo "<td> $2.00 </td>";
  echo "<td> $" . intval($Item2) * 2 . ".00</td>";
  $Total += intval($Item2) * 2;
  echo "</tr>";
  echo "<tr id=\"input\">";
  echo "<td id=\"important\"><b> Football </b></td>";
  echo "<td> " . $Item3 . "</td>";
  echo "<td> $3.00 </td>";
  echo "<td> $" . intval($Item3) * 3 . ".00</td>";
  $Total += intval($Item3) * 3;
  echo "</tr>";
  echo "<tr id=\"input\">";
  echo "<td id=\"important\"><b> Shipping </b></td>";
  echo "<td colspan=\"2\"> " . $Ship[intval($Shipping) - 1] . "</td>";
  echo "<td> $" . $ShipCost[intval($Shipping) - 1] . "</td>";
  $Total += intval($ShipCost[intval($Shipping) - 1]);
  echo "</tr>";
  echo "<tr id=\"total\">";
  echo "<td colspan=\"3\" id=\"important\"><b> Total Cost </b></td>";
  echo "<td><b> $" . $Total . ".00</b></td>";
  echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
