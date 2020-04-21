<?php
include "db_connect.php";
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

$sql = "SELECT Rank, Name, Points, Division, Age, Record, Stance, Residence FROM topboxers";
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