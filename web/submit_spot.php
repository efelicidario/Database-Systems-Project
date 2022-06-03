<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rocket Power</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<div class="nav-wrapper">
			<div class="left-side">
				<div class="nav-link-wrapper">
					<a href="index.php">Home</a>
				</div>

				<div class="nav-link-wrapper">
					<a href="spot.php">Spots</a>
				</div>

				<div class="nav-link-wrapper">
					<a href="user_spots.php">My Spots</a>
				</div>

				<div class = "nav-link-wrapper active-nav-link">
                			<a href="submit_spot.php">Add New Spot!</a>
            			</div>

			</div>

			<div class="right-side">
				<div class="brand">
					<div>Rocket Power Spot Map</div>
				</div>
				<br>
				<div class = "nav-link-wrapper">
					<a href="login.php">Log Out</a>
				</div>
			</div>
		</div>

Submit a New Spot:
<form action="submit_spot.php" method="post"><br/>
Street: <br/><input type="street-address" name="address" required><br/>
Zip Code: <br/><input type="postal-code" name ="zip_code" required><br/>
City: <br/><input type="text" name="scity" required><br/>
<label for="sstate">State:</label><br/>
<select name="sstate" id="sstate">
	<option value="NULL"> -- Choose a State -- </option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select><br/>
Difficulty Rating: <br/><input type="number" name="difficulty_rating" required><br/>
Description: <br/><input type="text" name="description" required><br/><br/>
<input type="submit" name="NewSpot" value="NewSpot">
</form>

<?php

require_once "connect.php";

if (isset($_SESSION["error"])) {
	echo "Something went wrong!<br>";
	echo $_SESSION["error"];
	unset($_SESSION["error"]);
	die();
}

if (isset($_SESSION["user_id"])) {
	echo '<div style=font-size:2.00em>'
}

if (isset($_POST['SubmitSpot'])) {
	unset($_POST['SubmitSpot']);
	$db = get_connection();
	$spot_id = $_POST['spot_id'];
	$address = $_POST['address'];
	$zip_code = $_POST['zip_code'];
	$scity = $_POST['scity'];
	$sstate = $_POST['sstate'];
	$submit_date = date("Y.m.d");
	$_SESSION['submit_date'] = $submit_date;
	$submit_date = $_POST
	$difficulty_rating = $_POST['difficulty_rating'];
	$description = $_POST['description'];
	/*
	if (strlen($username) == 0 || strlen($password) == 0) {
		$_SESSION["error"] = "Username and/or password cannot be empty!";
		header("Location: register.php");
	}
	*/
	$statement = $db->prepare("CALL SubmitSpot(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$statement->bind_param('sssssssss', $spot_id, $_SESSION["user_id"], $address, $zip_code, $scity, $sstate, $_SESSION['submit_date'], $difficulty_rating, $description);

	if ($statement->execute()) {
		// Two options to retrieve data from a query that returns rows
		// Option 1: bind results to variables and call fetch. This fetches a 
		// single row and binds the values to the variables you specify
	/*
	//mysqli_stmt_bind_result($statement, $res_id, $res_error);
	//$statement->fetch();
	 */

		// Option 2: get the results to retrieve the result set, then call 
		// fetch_array or fetch_assoc on it to get one row at a time
		$resultObj = $statement->get_result();
		$result = $resultObj->fetch_assoc();

		// If user id is null, then something went wrong in registration. Put the 
		// error in the session and redirect back to this page for the user to try again.
		if (is_null($result["spot_id"])) {
			$_SESSION["error"] = $result["Error"];
			header("Location: submit_spot.php");
		}
		else {
			echo "Submitted!";     // User won't see this, header() redirects the page
			header("Location: user_spots.php");
		}
	}
	else {
		echo "Error getting result: " . mysqli_error($db);
		die();
	}
}

?>

</body>
</html>

