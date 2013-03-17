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
	<title>nepTune | Our Story</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
	<link rel="stylesheet" href="css/mainstyles.css" type="text/css" />
	<link rel="stylesheet" href="css/storystyles.css" type="text/css" />
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
	<script type="text/javascript">
		function showPrinciples(tag) {
			for (var i = 0; i < 3; i++) {
				var selector = "#guidance" + i;
				if (i == tag)
					$(selector).slideDown(400);
				else
					$(selector).slideUp(400);
			}
		}
	</script>
</head>
<body>
	<div class="row-fluid" id="storyHeader">
		<h1>The Future of Creativity</h1>
	</div>
	<div class="Content row-fluid LastBlockBeforeFooter">
		<div class="span7" id="story">
			<h2>Our Mission</h2>
			<p>Humans should not be machines. We live, breathe and come up with incredible new ideas and works of art. But too often our environment stifles our ability to do great things. Extensive red tape and greedy people trying to capitalize on every single thing someone else does are arresting progress in our world.</p>
			<p>nepTune's mission is to liberate human creativity. We're turning traditional business models inside-out and creating an incredible community that supports musicians as they create amazing work.</p>
			<p>Music is an art that touches everyone. Talent comes from around the world, but music as an industry is a hostile environment with no value placed on artistry. We're creating nepTune Music to bring the art back into music. It's an incredible first step into the future of creativity&mdash;into the future of the world.</p>
			<p>We envision a world where people are able to explore and create and make a career out of it. We envision a world where people are no longer content to push papers all day, people who want to push boundaries. We envision a world where everyone can just be awesome.</p>
		</div>
		<div class="span5" id="guidance">
			<div class="Content">
				<h2>Our Guidance</h2>
				<ul>
					<li>
						<h3 onclick="showPrinciples(0)">Design</h3>
						<p id="guidance0">Software should never be difficult to use. It has to be beautiful and give you feedback. Like a good pair of headphones, great design is effortless and leaves you feeling happy. We continue to refine our design, making it cleaner and easier&mdash;because we use nepTune just as much as you do.</p>
					</li>
					<li>
						<h3 onclick="showPrinciples(1)">Transparency</h3>
						<p id="guidance1">Industry and bureaucracy are characterized by thick, complex rules and regulations. nepTune has none of that. We're clear about everything we do, and you always know what you're getting.</p>
					</li>
					<li>
						<h3 onclick="showPrinciples(2)">Psychology</h3>
						<p id="guidance2">We're fascinated by how people act. We want to discover the incentives that drive human behavior, because understanding what drives people is fundamental to understanding how to liberate human creativity.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php include('includes/footer.inc.php') ?>	
</body>