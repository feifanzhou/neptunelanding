<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-39287042-1']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>nepTune | Contact</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
	<link rel="stylesheet" href="css/mainstyles.css" type="text/css" />
	<link rel="stylesheet" href="css/contactstyles.css" type="text/css" />
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/mainscripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {	// Load Retina images
			if (window.devicePixelRatio > 1.5) {
				$('img').each(function(i) {
					$(this).attr('src', $(this).attr('src').replace(".", "@2x."));
				});
			}
		});
	</script>
</head>
<body>
	<div class="row-fluid">
		<div id="contactIntro">
			<h1>Contact</h1>
			<p>The nepTune team is hard at work building the future of music. We'd love to get feedback from you! If you have questions about nepTune or improvements that would make nepTune better for you, please get in touch with us.</p>
		</div>
	</div>
	<div class="row-fluid LastBlockBeforeFooter">
		<div id="contactInfo">
			<div class="span3 ContactBox" id="contactNorth">
				<h2>nepTune North</h2>
				<p class="AddressLine1">nepTune Music</p>
				<p class="AddressLine2">436 Risley Hall</p>
				<p class="AddressLineCity">Ithaca, NY 14853</p>
				<p class="PhoneNumber">(781) 334-TUNE</p>
			</div>
			<div class="span3 ContactBox" id="contactSouth">
				<h2>nepTune South</h2>
				<p class="AddressLine1">nepTune Music</p>
				<p class="AddressLine2">833 Montelieu Avenue</p>
				<p class="AddressLineCity">High Point, NC 27262</p>
				<p class="PhoneNumber">(###) ###-####</p>
			</div>
			<div class="span3 ContactBox" id="contactWeb">
				<h2>On the Web</h2>
				<p id="emailContact"><a href="mailto:future@neptunemusic.co">future@neptunemusic.co</a></p>
				<p id="fbContact"><a href="https://www.facebook.com/nepTuneTech">fb.com/neptunetech</a></p>
				<p id="twitterContact"><a href="https://twitter.com/neptuneTech">@neptuneTech</a></p>
			</div>
			<div class="span3 ContactBox" id="contactSurveys">
				<h2>Feedback</h2>
				<p>Please take our survey so that we can make nepTune&nbsp;Music even better.</p>
				<div id="feedbackButtonBlock">
					<div class="btn FeedbackBtn" id="consumerFeedbackButton"><a href="http://bit.ly/nepTuneFeedback">Music feedback</a></div>
				</div>
			</div>
		</div>
	</div>
	<?php include('includes/footer.inc.php') ?>
</body>