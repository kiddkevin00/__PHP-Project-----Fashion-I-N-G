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
	<body>
		<div class="container">

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-signin" role="form">
				<h2 class="form-signin-heading">Welcome..</h2>
				Name: <input name="name" type="email" class="form-control" placeholder="Vivi Pro" required autofocus>
				E-mail: <input type="text" name="email" class="form-control" placeholder="example@ex.com" >
				Website: <input type="text" name="website" class="form-control"  placeholder="linkedin.com/profile/view?id=0123&trk=abc" >
				Comment: <textarea name="comment" class="form-control" rows="5" cols="40" placeholder="I'd like to have more feeature like.."></textarea>
				<br>
				Gender:
				<input type="radio" name="gender" value="female">
				Female
				<input type="radio" name="gender" value="male">
				Male 
				<br>
				<br>
				Password: <input type="password" class="form-control" placeholder="Password" required>
				<label class="checkbox">
					<input type="checkbox" value="remember-me">
					Remember me </label>
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					Sign in
				</button>
			</form>

		</div>
		<!-- /container -->

		

	</body>
</html>
