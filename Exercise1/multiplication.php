<style><?php include 'multiplication.css';?></style>
<?php
    echo "<h1>Exercise 1: PHP Mulitplication Table</h1>";
    echo "<a href='../index.html'>Home page</a>";
    echo "<p>100x100 multiplication table:</p>";

    echo "<table>";
    echo "<tr>";
    echo "<th>".'0'."</th>";
    for($r=1;$r<=100;$r++){
        echo "<th>".$r."</th>"; 
    }
    echo "</tr>";
    for ($i = 1; $i <= 100; $i++){
        echo "<tr> \n";
        echo "<th>".$i."</th>";
        for ($j = 1; $j <= 100; $j++){
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
   
?>
