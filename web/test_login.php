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

Log in to your account:
<form action="login.php" method="post">
Username: <input type="text" name="username"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" name="Login" value="Login"><br/><br/>
<a href="register.php">No Account? Register Here</a><br><br>
</form>

<?php

require_once "connect.php";

if (isset($_SESSION["error"])) {
    echo $_SESSION["error"];
    unset($_SESSION["error"]);
    die();
}

// If true, user is trying to log in
if (isset($_POST['Login'])) {
    unset($_POST['Login']);
    $db = get_connection();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $validation = $db->prepare("SELECT * FROM user WHERE username=?");
    $validation->bind_param('s', $username);
    if ($validation->execute()) {
        //if ($valid_result = $validation->get_result()) {
        if (mysqli_stmt_bind_result($validation, $res_user_id, $res_username, $res_password, $res_email, $res_fname, $res_lname, $res_ucity, $res_ustate, $res_sport)) {

            $result_count = 0;

            while ($validation->fetch()) {
                $result_count++;
            }

	    if ($result_count == 0) {
                $_SESSION["error"] = "Error: the username and/or password combination was not found";
                header("Location: login.php");
            }
            else {
                // Verify user password
                //$resx = $valid_result->fetch_array(MYSQLI_ASSOC);
                $isGood = password_verify($password, $res_password);
                
                if ($isGood) {
                    $_SESSION["user_id"] = $res_user_id;
                    $_SESSION["username"] = $res_username;

                    header("Location: home.php");
                }
		else {
                    $_SESSION["error"] = "Error: the username and/or password combination was not found";
                    header("Location: login.php");
                }
            }
        }
        else {
            echo "Error getting result: " . mysqli_error($db);
            die();
        }
    }
    else {
        echo "Error executing query: " . mysqli_error($db);
        die();
    }
}

?>

</body>
</html>
