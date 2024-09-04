<?php
$fruits = ["mengo", "Apple", "Orange", "Banana"];
echo "<h2> List of Fruits</h2>";
//$furit="";
echo "<ul>";
    foreach ($fruits as $fruit) {
        # code...
        echo "<li>".$fruit."</li>";
    }
echo "</ul>";