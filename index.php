
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="./css/img/favicon.png">

<title>Mix Spot Home</title>

<!-- Just for debugging purposes. -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

<!-- JS plugin
		================================================== -->
<!-- JQuery-UI core CSS -->
<link href="./css/external/jquery/jquery-ui.min.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="./css/external/bootstrap/bootstrap.min.css" rel="stylesheet">
<!-- Customized CSS for home page -->
<link href="./css/contentHome.css" rel="stylesheet">

<!-- CSS plugin
		================================================== -->
<!-- Bootstrap core JavaScript -->
<script src="./js/jquery/jquery.js"></script>
<script src="./js/bootstrap/bootstrap.min.js"></script>
<script src="./js/jquery/jquery-ui.min.js"></script>

<script>
			// Call a Dialog
			$(document).ready(function() {
				$("#dialog-login").dialog({
					autoOpen : false,
					height : 350,
					width : 500,
					buttons : [{
						text : "Sign in",
						click : function() {
							// TODO..
							$(this).dialog("close");
						}
						
					}]
				});

				$("#testing-dialog").click(function() {
					$("#dialog-login").dialog("open");
				});

			});

		</script>

</head>

<body>
	<!-- Dialog Layout -->
	<div id="dialog-login" title="Log in">
		<div style="width: 400px;" class="container">
			<form class="form-signin" role="form" method="Post" action="login.php">
				<h2 class="form-signin-heading">Log in</h2>
				<br />
				<div class="form-group">
					<input type="text" style="width: 100%;" class="form-control"
						name="email" id="email" placeholder="someone@example.com">
				</div>
				<div class="form-group">
					<input type="text" style="width: 100%;" class="form-control"
						name="password" id="password" placeholder="Password..">
				</div>
				<div class="form-group">
					<!-- <label for="info2" class="col-sm-2 control-label"></label> -->
					<div class="col-sm-10">
						<input type="hidden" id="info2" name="info02" value="anyParameter">
					</div>
				</div>
				<button onclick="validateFunction()" type="submit" class="btn btn-lg btn-primary btn-block">
					Upload
				</button>

			</form>
		</div>
	</div>

	<!-- NAVBAR
		================================================== -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Mix Spot</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">Rumer</a></li>
					<li><a href="#contact">Geek</a></li>
					<li><a href="#contact">Sport</a></li>
					<li><a href="#contact">Style</a></li>
					<li><a href="#contact">Music</a></li>
					<li><a href="#contact">Dating</a></li>
					<li><a href="#contact">Movies</a></li>
					<li><a href="#contact">Entertainment</a></li>
					<li><a href="#contact">Food</a></li>
					<li><a href="#contact">Comedy</a></li>
					<li><a id="testing-dialog">Log in</a></li>
					<!-- <li class="dropdown">
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
						</li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- /.navbar -->

	<!-- STICKERS
		================================================== -->
	<div class="stickers">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo (1).PNG">
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo.PNG">
				</div>
				<!-- /.col-lg-6 -->
				<div class="col-md-6">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo (2).PNG">
				</div>
				<!-- /.col-lg-6 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo (3).PNG">
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-4">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo.JPG">
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-md-4">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo (4).PNG">
				</div>
				<!-- /.col-lg-4 -->
				<div class="col-md-4">
					<img class="img-responsive" alt="Generic placeholder image"
						src="./css/img/photo (2).JPG">
				</div>
				<!-- /.col-lg-4 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.stickers -->

</body>
</html>