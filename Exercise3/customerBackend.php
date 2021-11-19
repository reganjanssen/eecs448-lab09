<style> <?php include 'style.css'; ?> </style>
<?php
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Q1 = $_POST["Quantity1"];
    $Q2 = $_POST["Quantity2"];
    $Q3 = $_POST["Quantity3"];
    $ship = $_POST["shipping"];

    echo "<h1>Welcome " . $username . "!<br>";
    echo "Password: " . $password . "<br></h1>";

    echo "<br><br><br><br>";

    echo "<table>";
    
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 1</th>";
    echo "<td>" . $Q1 . "</td>";
    echo "<td>" . "$20" . "</td>";
    echo "<td>$" . (20 * $Q1) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 2</th>";
    echo "<td>" . $Q2 . "</td>";
    echo "<td>" . "$40" . "</td>";
    echo "<td>$" . (40 * $Q2) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Item 3</th>";
    echo "<td>" . $Q3 . "</td>";
    echo "<td>" . "$30" . "</td>";
    echo "<td>$" . (30 * $Q3) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th>Shipping</th>";
    echo "<td colspan='2'>" . $ship . "</td>";

    $shipCost = 0;
    if ($ship == "Free 7 Day") $shipCost = 0;
    if ($ship == "$50.00 Over Night") $shipCost = 50;
    if ($ship == "$5.00 3 Day") $shipCost = 5;
    echo "<td>$" . $shipCost . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th colspan='3' style='border:1px solid royalblue'>Total Cost</th>";
    echo "<td style='border:1px solid royalblue'>$" . ( $shipCost + (20 * $Q1) + (40 * $Q2) + (30 * $Q3) ) . "</td>";
    echo "</tr>";

    echo "</table>";
    echo "<br>";
    echo "<a href='../index.html'>Home page</a>";

?>