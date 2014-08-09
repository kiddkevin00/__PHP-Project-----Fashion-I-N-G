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
		<link href="./css/jumbotron.css" rel="stylesheet">

		<!-- JS plugin
		================================================== -->
		<!-- JQuery core JavaScript -->
		<script src="./js/jquery/jquery.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="./js/bootstrap/bootstrap.min.js"></script>
		<!-- JQuery-UI core JavaScript -->
		<script src="./js/jquery/jquery-ui.min.js"></script>

		<script>
			// Call a Dialog
			$(document).ready(function() {
				$("#dialog-login").dialog({
					modal : true,
					autoOpen : false,
					height : 350,
					width : 500,
					buttons : [{
						text : "Subscribe",
						click : function() {
							// TODO..
							var email = $('#email').val();
							var password = $('#password').val();

							$(this).dialog("close");
						}
					}]
				});

				$("#subscribe").click(function() {
					$("#dialog-login").dialog("open");
				});
			});

		</script>

	</head>

	<body>
		<!-- Dialog Layout -->
		<div  id="dialog-login" title="Subscribe">
			<div style="width:400px; " class="container">
				<form class="form-signin" role="form" method="Post">
					<h2 class="form-signin-heading">Thanks for joy us..</h2>
					<br />
					<div class="form-group">
						<input type="text" style="width:100%;" class="form-control" name="email"
						id="email"
						placeholder="someone@example.com">
					</div>
					<div class="form-group">
						<input type="text" style="width:100%;" class="form-control" name="password"
						id="password"
						placeholder="Password..">
					</div>
					<div class="form-group">
						<!-- <label for="info2" class="col-sm-2 control-label"></label> -->
						<div class="col-sm-10">
							<input type="hidden" id="info2" name="info02" value="anyParameter" >
						</div>
					</div>

				</form>
			</div>
		</div>

		<!-- NAVBAR
		================================================== -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- ** or <a href="./interiorPage.php"> -->
					<!-- ** or <a href="interiorPage.php"> -->
					<a class="navbar-brand" href="/PHPSyntaxReview/interiorPage.php ">FashionING</a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="aboutusPage.php">About</a>
						</li>
						<li>
							<a  id="signup" href="signupPage.php">Sign up</a>
						</li>
						<li>
							<a  id="subscribe" href="#">Subscribe</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">
									Nav header
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- </div> -->

					<!-- <div class="navbar-collapse collapse"> -->
					<form class="navbar-form navbar-right" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
						<div class="form-group">
							<input name="email" type="text" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input name="password" type="password" placeholder="Password" class="form-control">
						</div>
						<button type="submit" class="btn btn-success">
							Sign in
						</button>
					</form>
				</div>
				<!-- </div> --><!--/.navbar-collapse -->
			</div>
		</div>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<h1>One Step to Fashion..</h1>
				<p>
					<?php

                    function purify_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $email = purify_input($_REQUEST["email"]);
                    }

                    // Prevent Hackers do someth like the following:
                    //  $email="<script>alert('hacked')</script>";
                    if ($email) {
                        echo "Welcome back.. " . "<b>$email<b>";
                    } else {
                        echo "Hope you enjoy the first time in our website..";
                    }
					?>
				</p>
				<p>
					<a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
				</p>
			</div>
		</div>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-3">
					<h3>Uptown Style</h3>
					<p>
						some intro here..
					</p>
					<p>
						<a class="btn btn-default" href="interiorPage.php" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h3>Downtown Style</h3>
					<p>
						some intro here..
					</p>
					<p>
						<a class="btn btn-default" href="interiorPage.php" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h3>Girls-Night-out Style</h3>
					<p>
						some intro here..
					</p>
					<p>
						<a class="btn btn-default" href="interiorPage.php" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h3>still figuring out..</h3>
					<p>
						some intro here..
					</p>
					<p>
						<a class="btn btn-default" href="interiorPage.php" role="button">View details &raquo;</a>
					</p>
				</div>
			</div>

			<hr>

			<footer>
				<p>
					&copy; ViviPro Inc 2014
				</p>
			</footer>
		</div>
		<!-- /container -->
		<?php
		echo "hello";
		?>
	</body>
</html>
