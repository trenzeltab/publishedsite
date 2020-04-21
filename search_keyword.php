<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];
echo $keywordfromform;


echo "<br>";
echo "<h3>Results for your search of $keywordfromform:</h3>";
echo "<br>";

$sql = "SELECT Rank, Name, Points, Division, Age, Record, Stance, Residence FROM topboxers WHERE Name LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);


if ($result ->num_rows > 0) {
//////// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>";
	echo " " . $row["Rank"]. " ___ " . $row["Name"]. " | " . $row["Points"]. " | " . $row["Division"]. " | " . $row["Age"]. " | " . $row["Record"]. " | " . $row["Stance"]. " | " . $row["Residence"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<hr>
<br>
<a href="index.php">Return to Home Page</a>