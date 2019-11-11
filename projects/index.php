<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<?php $posts = getPublishedPosts(); ?>
<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Axel Ceder - Projects</title>
	<link rel="stylesheet" href="../css/styles.css">
	<script src="../js/jquery-3.1.0.min.js"></script>
	<link rel="shortcut icon" href="../resources/image/logo/ico.png" type="image/png">
	
</head>
	

<?php include '../header.php';?>

<body>

	<div id="over">
		<div class="section" id="section2" style="height:100%">
			<h1><?php echo $lang['project']?></h1>
		</div>
	</div>
	<div class="bottombox">
		Work in progress
		<div class="container">

			<div class="content">
				<?php foreach ($posts as $post): ?>
					<div class="post" style="margin-left: 0px;">
					<table>
					<tr height=10vh>
					<td colspan="20%" style="height:8wv; display: inline-block; overflow: hidden;">
					<img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" class="post_image" alt="">
					</td>
					<td colspan="80%" style="vertical-align: top;">
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
							<div class="post_info" style="overflow: hidden; height: 7vw; margin: 1vw; margin-bottom:0;">
								<h3><?php echo $post['title'] ?></h3>
								<div class="info">
									<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
									<span><?php echo $post['body'] ?></span>
									<span class="read_more">Read more...</span>
								</div>
							</div>
						</a>
						<div style="-webkit-box-shadow: inset 5px 5px 7px 1px rgba(0,0,0,0.52); 
							box-shadow: inset 7px 7px 10px 5px rgba(0,0,0,0.52); top:0; left:0; width:100%;height:100%; position:absolute">
						</div>
					</td>
					</tr>
					</table>
						

					</div>
				<?php endforeach ?>
				<!-- more content still to come here ... -->
			</div>
		</div>
	<!-- Page content -->
	

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