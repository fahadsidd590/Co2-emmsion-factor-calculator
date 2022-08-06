<?php
session_start();
require 'mongodb/vendor/autoload.php';

$client = new MongoDB\Client(
    'mongodb+srv://fahad:pakarmy96@cluster0.ld6kp.mongodb.net/?retryWrites=true&w=majority');
$companydb = $client->CO2;
$empemploy = $companydb->userdata;
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/style2.css">





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1 class="frsthed">Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<br>

					<input class="text" type="password" name="password" placeholder="Password" required="">
					<br>
					<br>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span>Remembered Me</span>
						</label>
						<div class="clear"> </div>
					</div>
					<br>
					<input type="submit" name="submit" value="LOGIN">
				</form>
				<p>Already Have Account? <a href="signup.php">Sign Up</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
	<?php
	$succss = "";
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$error = array();
		// Email Validation
		if (empty($username) or !filter_var($username, FILTER_SANITIZE_EMAIL)) {
			$error[] = "Empty or invalid email address";
		}
		if (empty($password)) {
			$error[] = "Enter your password";
		}
		if (count($error) == 0) {
			// echo "hellowoed";

			if ($client) {
				// echo "fasfsa";
				// Select Database
				// $db = $con->test;
				// Select Collection
				// $people = $db->people;
				// $qry = array("user" => $username,"password" => md5($password));
				$result = $empemploy->findOne(['user_name' => $username, 'password' => $password]);
				// var_dump($result);
				if ($result == null) {

					echo "<script>alert('please create account');</script>";
				} else {
					$_SESSION['username'] = $result['_id'];
					header("Location:index.php");
				}
			}
		}
	}

	?>
</body>

</html>