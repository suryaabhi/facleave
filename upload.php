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

				<!-- Main -->
					<div id="main">                        
						<!-- One -->
							<section id="one" class="major">
								<div class="inner">
									<div class="row">
                                    <p style="text-align:right; float:right;">Logged in as 
                                                                    <?php $key=get_user_name($con, $_SESSION['UserData']['user_id']); 
                                                                                foreach($key as &$name){
                                                                                        echo '<a style="cursor:default;">'.$name.'</a>';                                                                
                                                                                }
                                                                     ?>
                                        </p>	
										<h2 id="elements">Upload content</h2>
                                    </div><hr class="major" style="margin-top:0; margin-bottom:2em;"/>
										<section>
								<form method="post" action="check_upload.php" name="upload-form">
									<div class="field half first">
										<label for="head">Post Heading</label>
										<input type="text" name="head" id="head" required />
									</div>
									<div class="field half">
										<label for="class">Class</label>
										<input type="text" name="class" id="class" required />
									</div>
                                    <div class="field">
										<label for="notes" class="button icon fa-upload">Upload image file(s)</label>
                                        <input type="file" id="files" name="files[]" multiple hidden>
                                        <p><?php $total = count($_FILES['files']['name']); echo $total;?>Files selected</p>
									</div>
									<div class="field">
										<label for="message">Content / Description</label>
										<textarea name="content" id="content" rows="6" required></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Post" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							     </section>
							
								</div>
							</section>
                            

					</div>

				
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