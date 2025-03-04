<?php
echo "<h2>PHP Exercise 1: Arithmetic Operations</h2>";
$Sx = 10;
$Sy = 7;

echo "$Sx + $Sy = " . ($Sx + $Sy) . "<br>";
echo "$Sx - $Sy = " . ($Sx - $Sy) . "<br>";
echo "$Sx * $Sy = " . ($Sx * $Sy) . "<br>";
echo "$Sx / $Sy = " . number_format($Sx / $Sy, 14) . "<br>";
echo "$Sx % $Sy = " . ($Sx % $Sy) . "<br>";

echo "<h2>PHP Exercise 2: Conditional Statement</h2>";
$month = date('F', time());

if ($month == "August") {
    echo "It's August, so it's really hot.<br>";
} else {
    echo "Not August, so at least not in the peak of the heat.<br>";
}

echo "<h2>PHP Exercise 3: Squares of Numbers</h2>";
for ($i = 1; $i <= 12; $i++) {
    echo "$i * $i = " . ($i * $i) . "<br>";
}

echo "<h2>PHP Exercise 4: Multiplication Table</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
