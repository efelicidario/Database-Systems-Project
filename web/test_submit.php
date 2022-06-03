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
                			<a href="test_submit.php">Add New Spot!</a>
            			</div>

			</div>

			<div class="right-side">
				<div class="brand">
					<div>Rocket Power Spot Map</div>
				</div>
				<br>
				<div class = "nav-link-wrapper">
					<a href="login.php">Logout</a>
				</div>
			</div>
		</div>

Create a new account:
<form action="register.php" method="post">
Username: <br/><input type="text" name="username" required><br/>
Password: <br/><input type="password" name="password" required><br/>
Email: <br/><input type="email" name="email" required><br/> 
FirstName: <br/><input type="fname" name="fname" required><br/>
LastName: <br/><input type="lname" name="lname" required><br/>
City: <br/><input type="ucity" name="ucity" required><br/>
State: <br/><input type="ustate" name="ustate" required><br/>
Sport: <br/><input type="sport" name="sport" required><br/>

<?php

require_once "connect.php";

if (isset($_SESSION["error"])) {
	echo "Something went wrong!<br>";
	echo $_SESSION["error"];
	unset($_SESSION["error"]);
	die();
}

if (isset($_SESSION["user_id"])) {

}

else {
	header("Location: login.php");
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
			header("Location: index.php");
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
