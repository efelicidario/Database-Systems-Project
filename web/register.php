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
				<div class = "nav-link-wrapper">
                	<a href="login.php">Login</a>
            	</div>

				<div class="nav-link-wrapper active-nav-link">
					<a href="register.php">Register</a>
				</div>
			</div>

			<div class="right-side">
				<div class="brand">
					<div>Rocket Power Spot Map</div>
				</div>
			</div>
		</div>

Create a new account:
<form action="register.php" method="post"><br/>
Username: <br/><input type="text" name="username" required><br/>
Password: <br/><input type="password" name="password" required><br/>
Email: <br/><input type="email" name="email" required><br/> 
FirstName: <br/><input type="given-name" name="fname" required><br/>
LastName: <br/><input type="family-name" name="lname" required><br/>
<label for="ustate">State:</label><br/>
<select name="ustate" id="ustate">
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
City: <br/><input type="text" name="ucity" required><br/>
<label for="sport">Sport:</label><br/>
<select name="sport" id="sport">
		<option selected value = ""> -- Choose a Sport -- </option>
		<option value = "Skateboard">Skateboard</option>
		<option value = "Scooter">Scooter</option>
		<option value = "BMX">BMX</option>
		<option value = "Rollerskate">Rollerskate</option>
		<option value = "Rollerblade">Rollerblade</option> 
</select><br/><br/>
<input type="submit" name="Register" value="Register">
</form>

<?php

require_once "connect.php";

if (isset($_SESSION["error"])) {
	echo "Something went wrong!<br>";
	echo $_SESSION["error"];
	unset($_SESSION["error"]);
	die();
}

if (isset($_POST['Register'])) {
	unset($_POST['Register']);
	$db = get_connection();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$ucity = $_POST['ucity'];
	$ustate = $_POST['ustate'];
	$sport = $_POST['sport'];
	if (strlen($username) == 0 || strlen($password) == 0) {
		$_SESSION["error"] = "Username and/or password cannot be empty!";
		header("Location: register.php");
	}

	$statement = $db->prepare("CALL RegisterUser(?, ?, ?, ?, ?, ?, ?, ?)");
	$hashed = password_hash($password, PASSWORD_DEFAULT);
	$statement->bind_param('ssssssss', $username, $hashed, $email, $fname, $lname, $ucity, $ustate, $sport);

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
		if (is_null($result["user_id"])) {
			$_SESSION["error"] = $result["Error"];
			header("Location: register.php");
		}
		else {
			echo "Registered!";     // User won't see this, header() redirects the page
			header("Location: home.php");
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
