<?php 
		session_start();
		// connect to database
		$conn = mysqli_connect("localhost", "phpmyadmin", "ex04390eGiW9", "site_postings");

		if (!$conn) {
			die("Error connecting to database: " . mysqli_connect_error());
		}
		// define global constants
		define ('ROOT_PATH', realpath(dirname(__FILE__)));
		define('BASE_URL', 'http://localhost/projects/');
?>

<! doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Axel Ceder - Projects</title>
		<link rel="stylesheet" href="../css/styles.css">
		<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
		<link rel="shortcut icon" href="../resources/image/logo/ico.png" type="image/png">
		
	</head>
	
	

	<?php include '../header.php';?>
	<body>
		<div id="fullpage">
		<div class="section" id="section2" style="height:100%">
		<h1><?php echo $lang['project']?></h1>
		</div>
		<div class="container">

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
		</div>
			<!-- // navbar -->

			<!-- Page content -->
			<div class="content">
				<h2 class="content-title">Recent Articles</h2>
				<hr>
				<!-- more content still to come here ... -->
			</div>
			<!-- // Page content -->

			<!-- footer -->
			<div class="footer">
				<p>MyViewers &copy; <?php echo date('Y'); ?></p>
			</div>
			<!-- // footer -->

		</div>
		<div id="proj1">
			Rebuilding site to make room for this: <br>
				<a href="airhockey/index.php"><img src="../resources/image/projects/game.JPG"  /></a> <br><br>
			Click image to play, it's a resulting byproduct of a project within Systemconstruction
		</div>
	</body>
</html>