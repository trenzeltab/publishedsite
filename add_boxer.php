<?php

include "db_connect.php";
$new_boxer = $_GET["newboxer"];
$new_class = $_GET["newclass"];


echo "<br>";
echo "<h3>Possible New Boxer Update ~> Name: $new_boxer, Weight Class: $new_class</h3>";
echo "Thanks for contributing to BirdBox Sports, check back for an update to the site!";
echo "<br>";

$sql = "INSERT INTO newboxers (Name, Weight_Class) VALUES ('$new_boxer', '$new_class' )";
$result = $mysqli->query($sql);


?>

<hr>
<br>
<a href="index.php">Return to Home Page</a>