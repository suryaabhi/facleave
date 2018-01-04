<!DOCTYPE HTML>
<html>
	<head>
		<title>Methodist college of engineering and technology</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="./" class="logo"><strong>Methodist</strong> <span>Web Application</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="About.php">About</a></li>
						</ul>
					</nav>			

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="POST" action="submit.php" name="login_form" id="login_form">
									<div class="field">
										<label for="name">EMAIL</label>
										 <input type="email" name="Email" id="Email" placeholder="Email address" required autofocus>
									</div>
									<div class="field">
										<label for="secret code">Password</label>
										<input type="password"  name="Password" id="Password" placeholder="Secret" required pattern=".{6,12}" title="6 characters minimum"/>
                                    </div>
									<ul class="actions">
										<li><input type="submit" value="Login" class="special" /></li>
									</ul>
								</form>
							</section>	
                            <section class="split">
								<form action="submit.php" method="post" >
                                    <div class="field">
										<label for="name">Full Name</label>
										 <input type="text" name="Name" id="Name" required pattern=".{2,100}" title="2 characters minimum" autofocus>
									</div>
                                    <div class="field half first">
										<label for="name">ID Number</label>
										 <input type="text" name="uid" id="uid" required pattern="(^(1607)?[0-9]{8}$)|(AX)" title="Input valid ID number" autofocus>
									</div>
                                    <div class="field half">
										<label for="name">EMAIL</label>
										 <input type="email" name="Email" id="Email" required autofocus>
									</div>
                                    <div class="field">
										<input type="checkbox" id="faculty" name="faculty" value="1">
										<label for="faculty">Check if faculty</label>
									</div>
									<div class="field">
										<label for="secret code">Password</label>
										<input type="password"  name="Password" id="Password" required pattern=".{6,12}" title="6 characters minimum"/>
                                    </div>
									<ul class="actions">
										<li><input type="submit" value="Register" class="special" /></li>
									</ul>
                                </form>
							</section>
                            						
						</div>
					</section>
			</div>
        
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/app.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>