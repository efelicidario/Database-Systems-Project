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
			<div class = "nav-link-wrapper active-nav-link ">
				<a href = "home.php">Home</a>
			</div>

			<div class = "nav-link-wrapper">
				<a href = "spot.php">Spots</a>
			</div>

			<div class="nav-link-wrapper">
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
				<a href="login.php">Log Out</a>
			</div>
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
	echo '<div style=font-size:1.25em;color:#0000FF">Welcome, </div>' . $_SESSION["fname"];
	//echo "Welcome, " . $_SESSION["fname"]; 
	echo "<br />";
	echo "<br />";
	echo "<br />";
}


// Get a connection, prepare a query, and execute it
$db = get_connection();
$query = $db->prepare("SELECT * FROM newspot");
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

<form action="home.php" method="POST">
    <label>Enter something: <input type="text" name="something"></label>
<?php
// Now let's build a select option dropdown from the rows
echo "<select name='dropdown'>";

foreach($rows as $row) {
	$rowid = $row['id'];
	$rowdata = $row['data'];
	echo "<option value='$rowid'>$rowdata</option>";
}

echo "</select>";
?>
    <input type="submit">
</form>

<?php
if (isset($_POST["something"])) {
	echo "You entered " . htmlspecialchars($_POST['something']) . " <br>";
}

if (isset($_POST["dropdown"])) {
	for($i = 0; $i < count($rows); $i++) {
		if ($rows[$i]['id'] == $_POST['dropdown']) {
			echo "You entered " . $_POST['dropdown'] . " <br>";
		}
	}
}

?>

</body>
</html>
