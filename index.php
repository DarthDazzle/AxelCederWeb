<! doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$site_key = 'YOUR_SITE_KEY';
$secret_key = 'YOUR_SECRET_KEY';
 
if (isset($_POST['g-recaptcha-response'])) {
 
    //get verify response data
    $verifyCaptchaResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    $responseCaptchaData = json_decode($verifyCaptchaResponse);
    if($responseCaptchaData->success) {
        echo 'Captcha verified';
        //proceed with form values
    } else {
        echo 'Verification failed';
    }
}
?>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Axel Ceder</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/scrolloverflow.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/general.js"></script>

	<link rel="shortcut icon" href="resources/image/logo/ico.png" type="image/png">
</head>
<?php
include 'header.php';
?>
<body>
	<div id="fullpage">
		<script type="text/javascript">
			$(document).ready(function() {

				$('#fullpage').fullpage({
					verticalCentered: false,
					anchors: ['home', 'about', 'project', 'contact'],
					scrollingSpeed: 500,
					//to avoid problems with css3 transforms and fixed elements in Chrome, as detailed here: https://github.com/alvarotrigo/fullPage.js/issues/208
					css3:false
				});
			});
		</script>
		<div class="section" id="section0">
			<div id="over">
				<span class="Centerer"></span>
				<video class="video" width="960" height="540" muted autoplay id="toHide">
					<source src="resources/video/logo/intro.webm" type="video/webm">
					<source src="resources/video/logo/intro.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				<img id="imgLogo" src="resources/image/logo/mainlogo.png" class="imgLog shadowed">
			</div>
		</div>
		<div class="section" id="section1" style="text-align:left">
		<h1 style="text-align:center"><a href="/about"><?php echo $lang['about'] ?></a></h1>
		<img src="../resources/image/about/uppr.png" class="cornerPara" id="show" style="opacity:0">
		</div>
		<div class="section" id="section2">
		<h1><a href="/projects"><?php echo $lang['project'] ?></a></h1>
		</div>
		<div class="section" id="section3"  style="padding-top:30px" >
			<h1 style="padding-top:10vh"><?php echo $lang['contact'] ?><br><br></h1>			 
			<form method="post" id="userForm">
				<button class="g-recaptcha btn btn-primary" data-sitekey="<?php echo $site_key; ?>" data-callback="submitForm">Submit</button>
			</form>
			
			<script src='https://www.google.com/recaptcha/api.js'></script>
			<script>
			function submitForm() {
				document.getElementById('userForm').submit();
			}
			</script>
  		</div>S
	</div>


<script type='text/javascript'>
	function sendMail() {
	$(document.getElementById("msgSent1")).css({'opacity' : '0'});
	$(document.getElementById("msgSent2")).css({'opacity' : '0'});
	$(document.getElementById("msgSent3")).css({'opacity' : '0'});
	var vname = document.getElementById("vname").value;
	var vemail = document.getElementById("vemail").value;
	var msg = document.getElementById("msg").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'vname=' + vname + '&vemail=' + vemail + '&msg=' + msg;
	if (vname == '' || vemail == '' || msg == '') {
		$(document.getElementById("msgSent1")).css({'opacity' : '1'});
	} else {
		$(document.body).css({'cursor' : 'wait'});

		$(document.getElementById("send")).css({'cursor' : 'wait'});
		$('vname').val=("");
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "secure_email_code.php",
		data: dataString,
		cache: false,
		success: function(html) {
			if(html == '1') {
				$("input").prop('disabled', true);
				$("textarea").prop('disabled', true);
				$("input").css({'opacity' : '0.6'});
				$("textarea").css({'opacity' : '0.6'});
				$(document.body).css({'cursor' : 'default'});
				$(document.getElementById("send")).css({'cursor' : 'default'});
				$(document.getElementById("msgSent3")).css({'opacity' : '1'});
			} else {
				$(document.getElementById("msgSent2")).css({'opacity' : '1'});
				$(document.body).css({'cursor' : 'default'});
				$(document.getElementById("send")).css({'cursor' : 'pointer'});
			}
		}
	});
	}

	return false;
}
	</script>
</body>
<html>