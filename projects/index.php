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
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<?php $posts = getPublishedPosts(); ?>
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
		<?php foreach ($posts as $post): ?>
			<div class="post" style="margin-left: 0px;">
				<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
				<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
					<div class="post_info">
						<h3><?php echo $post['title'] ?></h3>
						<div class="info">
							<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
							<span class="read_more">Read more...</span>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>

		</div>
		<!--
		<div id="proj1">
			Rebuilding site to make room for this: <br>
				<a href="airhockey/index.php"><img src="../resources/image/projects/game.JPG"  /></a> <br><br>
			Click image to play, it's a resulting byproduct of a project within Systemconstruction
		</div>
		-->
	</body>
</html>