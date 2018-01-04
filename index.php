<?php

require('inc/config.php');
require('inc/functions.php');


if (!isset($_SESSION['UserData'])) {
    exit(header("location:main.php"));
}else{
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
}

?>
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
							<li><a href="./">Home</a></li>
							<li><a href="About.php">About</a></li>
						</ul>
						<ul class="actions vertical">							
							<li><a href="logout.php" class="button fit">Log Out</a></li>
						</ul>
					</nav>


				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Welcome <?php $key=get_user_name($con, $_SESSION['UserData']['user_id']); 
                                                            foreach($key as &$name){
                                                                echo $name;                                                                
                                                            }
                                                    ?></h1>
							</header>                          
							<div class="content">
								<p><?php $key=get_user_display($con, $_SESSION['UserData']['user_id']); 
                                                            foreach($key as &$name){
                                                                echo $name; 
                                                                echo "<br/>";
                                                            }
                                                    ?></p>
							</div>
                            <div class="content">
                                <h3>Attendance: 75%</h3> <progress style="width: 100%;" id="progress" value="75" max="100" class="progress"></progress>
                            </div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Overall attendance</a></h3>
										<p>Check your attendance statistics</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Recent notes</a></h3>
										<p>Recently uplodaded notes by various faculty</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Updates</a></h3>
										<p>Check important notifications and updates from the college</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Contacts</a></h3>
										<p>Important contact details including faculty and administration</p>
									</header>
								</article>								
							</section>	
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li>
								<li>Design: <a href="http://stayignited.com">Abhishek Surya</a></li>
								
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>