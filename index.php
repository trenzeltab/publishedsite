<html>
<center>
</center>
<head>
</head>
	<img src="bl3.png" alt="Birdox letter" width="100" height="70">
<h4 style="text-align:right;">Welcome to BBS. The New-Age Home for all Boxing Enthusiasts</h4>
<center>
  
	<img src="logo_new.png" alt="BirdBox Sports Logo" width="120" height="120">
<h3></h3>
</body>
 <style>
            body{
                background-color:navajowhite;
                color:#fff
                text-allign:center;
            }

            </style>

<h1>BirdBox Sports</h1></center>

<center>
<h4>Our Top 50 Pound-for-Pound Rankings! Click the image below!</h4>

<br>

<a href="rankings.php">

<img src="source_hope.gif" alt="link for lb_4_lb">

</a>
</center>
<br>
<?php
///////////////////////////////////
include "db_connect.php";

echo "<br>";
?>

<br>
<br>
<h3>Search our Rankings Below.</h3>
<form action="/search_keyword.php">
  <label for="fname">Please enter your favorite active boxer to show their info:</label><br>
  <input type="text" id="fname" name="keyword"><br>
  <input type="submit" value="Submit">
</form>

<br>
<hr>
<h4>If you would like to help us update our boxer listing, use the input below:</h4> 

<br>
<form action="/add_boxer.php">
  <label for="fname">Please enter a new boxer's name here:</label><br>
  <input type="text" id="fname" name="newboxer"><br>

 <label for="fname">Input their weight class below:</label><br>
  <input type="text" id="fname" name="newclass"><br>
  <input type="submit" value="Submit">
</form>
<hr>
<?php
//include "search_keyword.php";
//////////////////////////////////




///////////////////////////////////////////////////////////////////// search for words specific



$mysqli->close();

?>
<br>
<br>
<br>
<center>
<h4>Thank you for visiting our site! Visit us again for updated rankings and news on worldwide championship boxing.
<br>
Contact Us: birdbox@gmail.com  OR our customer service team by phone 1-800-BOX-BIRD</h4>
BirdBox Sports (R.)	Data on site is current as of 11:00 PM 4/17/2020
<br>
<img src="bl1.png" alt="Birdox letter" width="150" height="80">
</html>
</center>