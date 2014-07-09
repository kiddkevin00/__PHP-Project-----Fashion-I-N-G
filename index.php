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
						text : "Sign up",
						click : function() {
							// TODO..
							$(this).dialog("close");
						}
					}]
				});

				$("#signin").click(function() {
					$("#dialog-login").dialog("open");
				});

			});

		</script>

	</head>

	<body>
		<!-- Dialog Layout -->
		<div  id="dialog-login" title="Sign up">
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
					<a class="navbar-brand" href="#">FashionING</a>
					<a id="signin" class="navbar-brand" href="#">sign up</a>
				</div>
				<div class="navbar-collapse collapse">
					<form class="navbar-form navbar-right" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
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
				</div><!--/.navbar-collapse -->
			</div>
		</div>

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
				<h1>One Step to Fashion..</h1>
				<p>
					<?php
					$email=$_REQUEST['email'];
					
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
					<h2>Cute</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h2>Sexy</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h2>Heading</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
					</p>
				</div>
				<div class="col-md-3">
					<h2>Heading</h2>
					<p>
						Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
						Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
					</p>
					<p>
						<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
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
	</body>
</html>
