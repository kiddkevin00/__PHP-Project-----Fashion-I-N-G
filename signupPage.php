<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="./css/img/icon1.png">

		<title>FashionING</title>

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- CSS plugin
		================================================== -->
		<!-- JQuery-UI core CSS -->
		<link href="./css/external/jquery/jquery-ui.min.css" rel="stylesheet">
		<!-- Bootstrap core CSS -->
		<link href="./css/external/bootstrap/bootstrap.min.css" rel="stylesheet">
		<!-- Customized CSS for home page -->
		<link href="./css/signin.css" rel="stylesheet">

		<!-- JS plugin
		================================================== -->
		<!-- JQuery core JavaScript -->
		<script src="./js/jquery/jquery.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="./js/bootstrap/bootstrap.min.js"></script>
		<!-- JQuery-UI core JavaScript -->
		<script src="./js/jquery/jquery-ui.min.js"></script>
	</head>
	
	<?php

	// for debugging; display error or warning on the same page
	// also use var_dump($variable) to debug
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);

	function purify_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $websiteErr = $passwordErr = "";
	$name = $email = $gender = $comment = $website = "";
	/*
	 * If the REQUEST_METHOD is POST, then the form has been submitted
	 * and it should be validated. If it has not been submitted, skip
	 * the validation and display a blank form.
	 */
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";
		} else {
			$name = purify_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$nameErr = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = purify_input($_POST["email"]);
			// check if e-mail address syntax is valid
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
				$emailErr = "Invalid email format";
			}
		}

		if (empty($_POST["website"])) {
			$website = "";
		} else {
			$website = purify_input($_POST["website"]);
			// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
				$websiteErr = "Invalid URL";
			}
		}

		if (empty($_POST["comment"])) {
			$comment = "";
		} else {
			$comment = purify_input($_POST["comment"]);
		}

		if (empty($_POST["gender"])) {
			$genderErr = "Gender is required";
		} else {
			$gender = purify_input($_POST["gender"]);
		}
		if (empty($_POST["password"])) {
			$passwordErr = "Password is required";
		} else {
			$password = purify_input($_POST["password"]);
		}
	}
	?>
	
	<body>
		<div class="container">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-signin" role="form">
				<h2 class="form-signin-heading">Welcome..</h2>
				Name: <span class="error"> * <?php echo $nameErr; ?></span>
				<input type="text" name="name" class="form-control" placeholder="Vivi Pro"  autofocus value="<?php echo $name; ?>">
				E-mail: <span class="error"> * <?php echo $emailErr; ?></span>
				<input type="email" name="email" class="form-control" placeholder="example@ex.com" value="<?php echo $email; ?>">
				Website: <span class="error"><?php echo $websiteErr; ?></span>
				<input type="text" name="website" class="form-control" placeholder="linkedin.com/profile/view?id=0123&trk=abc" value="<?php echo $website; ?>">
				Comment: <textarea name="comment" class="form-control" rows="5" cols="40" placeholder="I'd like to have more feeature like.."> <?php echo $comment; ?> </textarea>
				Gender: <span class="error"> * </span>
				<input type="radio" name="gender" value="female" 
					<?php
					if (isset($gender) && $gender == "female")
						echo "checked";
	 				?> >
				Female <!-- /input -->
				<input type="radio" name="gender" value="male"
					<?php
					if (isset($gender) && $gender == "male")
						echo "checked";
		 			?> >
				Male <!-- /input -->
				<span style="padding-left:10px;" class="error"> <?php echo $genderErr; ?> </span>
				<br>
				Password:<span class="error"> * <?php echo $passwordErr; ?></span>
				<input type="password" name="password" class="form-control" placeholder="Password">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">
					Remember me </label>
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					Sign in
				</button>
			</form>
		</div><!-- /container -->
	</body>
</html>
