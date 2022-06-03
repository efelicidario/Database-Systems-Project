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

                		<div class="nav-link-wrapper active-nav-link">
                    			<a href="login.php">Login</a>
                		</div>

				<div class="nav-link-wrapper">
					<a href="register.php">Register</a>
				</div>
			</div>

			<div class="right-side">
				<div class="brand">
					<div>Rocket Power Spot Map</div>
				</div>
			</div>

		</div>


<?php 

require_once "config.php";

if (isset($_SESSION["error"])) {
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
    die();
}

if (isset($_SESSION['user_id'])) {
    echo "Welcome, " . $_SESSION["fname"];
}

else {
    header("Location: login.php");
}




?>

</body>
</html>
