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
	<div class="Content row-fluid">
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
	<div class="Content row-fluid LastBlockBeforeFooter">
		<div class="span7" id="neptunemusicstory">
			<h2>nepTune Music</h2>
			<p>nepTune Music was founded by two people who realized that music was broken.</p>
			<p>For centuries, music was an art. It evolved through many different styles, and all had their supporters. Musicians were a part of every community.</p>
			<p>As the 20<sup>th</sup> century rolled along, a disease began to spread. Music became an "industry", dominated by "executives" and "celebrities". Artistry and nuance was <a href="http://www.youtube.com/watch?v=KZazEM8cgt0">stamped out by corporations who thought they knew what people wanted to listen to</a>. Music became processed, produced at least in part by machines, engineered to reach a mass audience.</p>
			<p>Meanwhile, we can walk around anywhere in the world and find struggling musicians. Struggling not because they lack talent&mdash;these musicians have curated incredibly diverse and unique sounds through great talent and hard work&mdash;but because the world around them is infatuated with the latest engineered creation out of the record labels.</p>
			<p>At nepTune Music, we believe it's time for a revolution in music. People deserve great music from around the world, and artists deserve to make a living from their work. Welcome to the future of music.</p>
		</div>
		<div class="span5 Sideblock" id="founders">
			<div class="Content">
				<h2>Our Founders</h2>
				<ul>
					<li>
						<h3 onclick="showFounders(0)">Feifan Zhou</h3>
						<p>Feifan Zhou is currently pursuing a double major in Computer Science and Information Science at Cornell University. He is also working on a business minor.</p>
						<p>Feifan has been playing piano for 13 years and can often be found singing when he thinks no one is listening.</p>
						<p>His five years of iOS development and two years of web development (he started with PHP and is now learning Ruby on Rails) have landed him a role at three startups. He was inspired to launch his own startup in the winter of 2012&ndash;2013, and nepTune was born.</p>
					</li>
					<li>
						<h3 onclick="showFounders(1)">Robert Robertson</h3>
						<p>Robert C. Robertson III is currently pursuing a double major in music and entrepreneurship at High Point University. He has taken voice lessons for 12 years, and is also an Eagle Scout. He is very proud of this title.</p>
						<p>Bobby has also been involved with three startups, including a website he built with a friend in fifth grade.</p>
						<p>His passion for changing the world is evident, and when Feifan first approached him about nepTune, Bobby was ecstatic. Since that fateful day at the end of 2012, he has been an integral part of shaping nepTune and defining the future of creativity.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php include('includes/footer.inc.php') ?>	
</body>