<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rocket Power</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class = "container">
	<div class = "nav-wrapper">
		<div class = "left-side">
			<div class = "nav-link-wrapper">
				<a href = "home.php">Home</a>
			</div>

			<div class = "nav-link-wrapper">
				<a href = "spot.php">Spots</a>
			</div>

			<div class="nav-link-wrapper active-nav-link">
				<a href="user_spots.php">My Spots</a>
			</div>

			<div class = "nav-link-wrapper">
				<a href="test_submit.php">Add New Spot!</a>
			</div>
		</div>

		<div class = "right-side">
			<div class = "brand">
				<div>Rocket Power Spot Map</div>
			</div>
			<br>
			<div class = "nav-link-wrapper">
				<a href="login.php">Logout</a>
			</div>
		</div>
	</div>

<?php

date_default_timezone_set('America/Los_Angeles');
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("display_errors", 1);

require_once "connect.php";

if (isset($_SESSION["user_id"])) {
	echo '<div style=font-size:1.25em>Welcome, </div>' . $_SESSION["fname"];
	//echo "Welcome, " . $_SESSION["fname"]; 
	echo "<br />";
	echo "<br />";
	echo "<br />";

	echo "My City: " . $_SESSION["ucity"] . "<br />";
	echo "My State: " . $_SESSION["ustate"] . "<br />";
	echo "My Sport: " . $_SESSION["sport"] . "<br />" . "<br />" . "<br />";
}
else {
	header("Location: login.php");
}

// Get a connection, prepare a query, and execute it
$db = get_connection();
$query = $db->prepare("SELECT * FROM newspot NATURAL JOIN user WHERE user.user_id = newspot.user_id");
$query->execute();

// Getting the results will bring the results from the database into PHP.
// This lets you view each row as an associative array
$result = $query->get_result();

$rows = [];

while ($row = $result->fetch_assoc()) {
	// Do something with each row: add it to an array, render HTML, etc.
	$rows []= $row;

	// This example just iterates over the columns of the rows and builds a string
	$rowtext = "";

	foreach($row as $column) {
		$rowtext = $rowtext . "$column ";
	}

	echo "<a href='spot.php?id=" . $row['spot_id'] . "'>$rowtext</a><br>";
}
?>


</div>
</body>
</html>
