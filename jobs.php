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
	<title>nepTune | Jobs</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
	<link rel="stylesheet" href="css/mainstyles.css" type="text/css" />
	<link rel="stylesheet" href="css/jobsstyles.css" type="text/css" />
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
		function showPositionDetails(tag) {
			var currID = "#positionInfo" + tag;
			var otherTag
			if (tag == 0)
				otherTag = 1
			else
				otherTag = 0;
			var otherID = "#positionInfo" + otherTag;
			$(otherID).slideUp(400);
			$(currID).slideDown(400);
			$('html, body').animate({
				scrollTop: $(currID).offset().top
			}, 600);
		}
	</script>
</head>
<body>
	<div class="row-fluid" id="workHeader">
		<h1>The Future of Work</h1>
	</div>
	<div class="row-fluid" id="mission">
		<p>nepTune's mission is to liberate human creativity. We're doing this by creating a place where artists can be recognized for the merits of their work, free from bureaucracy and greedy corporate executives.</p>
		<p id="actionCall">Creativity is the future of society. We'd love to have you on board.</p>
	</div>
	<div class="row-fluid" id="broken">
	<div class="span8" id="workplace">
		<h2>Work is Broken</h2>
		<p>Millions of people every morning get to an office cubicle and spend the day pushing papers and checking things off a list. That's an incredible waste of human potential. People should be building amazing products!</p>
		<p>We want to show that work doesn't have to be mundane. At nepTune, you help us build the future of society, and you get to see the immediate results of your work every day. Your work takes on a meaning of its own, a product that will have a positive impact on the world.</p>
		<p>nepTune was built to challenge traditions. The world as we know it is a product of outdated methodologies and procedures. nepTune's work environment is an excellent place for us to start the revolution.</p>
	</div>
	<div class="Quote span4" id="precedent">
		<p class="QuoteText">We will set a precedent of breaking precedents.</p>
		<p class="QuoteAuthor">Robert Robertson, Co-Founder</p>
	</div>
	</div>
	<div class="row-fluid" id="setting">
		<div class="span7" id="environment">
			<h2>Who We Are</h2>
			<p>The nepTune team includes people from a variety of backgrounds, personal and professional. We're located around the country&mdash;because talented people are everywhere&mdash;and we all work remotely. As a result, everyone on our team is an independent thinker who is comfortable making decisions on their own, confident that what they do is in line with nepTune's vision.</p>
			<p>nepTune was founded by two entrepreneurs, musicians, and students. Feifan&nbsp;Zhou has been playing piano for 13 years, worked with 3 startups before nepTune, and is a student at Cornell&nbsp;University. Robert&nbsp;Robertson has been singing for 10 years, founded 3 small businesses before nepTune, and is a student at High&nbsp;Point&nbsp;University.</p>
			<p>The entire nepTune team believes that, when inspired, people are capable of doing amazing things. So nepTune was started to unlock that potential, both within our team and for the rest of the world.</p>
			<p><strong>Just be awesome. Help us liberate human creativity.</strong></p>
		</div>
		<div class="span5">
			<div id="hubs">
				<h3>Activity Hubs</h3>
				<p>The nepTune team works remotely and we have members from across the United States. We have three main hubs of activity:</p>
				<ul>
					<li>Cornell University (Ithaca, NY)</li>
					<li>High Point University (High Point, NC)</li>
					<li>Southeast New England (Cape Cod; Narragansett Bay)</li>
				</ul>
				<p>Being near these locations is definitely a plus, but is not required.</p>
			</div>
		</div>
	</div>
	<div class="row-fluid" id="positions">
		<div id="teamIntro">
			<h2>Positions</h2>
			<p>The nepTune team is hard at work building nepTune&nbsp;Music, an online community that turns the music industry on its head. As musicians and people who love great music, we're appalled by the state of the industry. This is an opportunity to revitalize music itself.</p>
			<p>The nepTune team works together to meet the goals we've all helped define. Each team member then takes ownership of every action, increasing efficiency and responsibility.</p>
		</div>
		<div class="LastBlockBeforeFooter" id="positionsListBlock">
			<ul id="positionsList">
				<li class="PositionEntryBorder">
					<h3 onclick="showPositionDetails(0)">UX Designer</h3>
					<div class="PositionDetails" id="positionInfo0">
						<p>As a UX Designer, you'll be conceiving, implementing and testing the face of nepTune Music&mdash;the parts that users will see every day. You'll be creating beautiful design elements and working closely with our engineers to implement our designs.</p>
						<div class="row-fluid">
							<div class="span8 PositionReqs">
								<h4>Requirements</h4>
								<ul>
									<li>A strong understanding of human interaction. You will need to be able to work with users and our engineers to create an interface that is a joy to use. You will need to be able to identify everything users love and hate about nepTune.</li>
									<li>A love of great music. We don't judge you on your music tastes. But to fix a problem, you have to first care about the problem.</li>
									<li>A clear communicator, able to describe your design to users and our engineers alike.</li>
									<li>Able to stand up for your design under opposition, but willing to let go when proven incorrect.</li>
									<li>Comfortable making bold decisions, knowing that we will implement, test, and implement user feedback.</li>
									<li>An understanding that progress is measured from how far we are from our goals, not how much work has been put in since we started.</li>
									<li>Very comfortable implementing your designs in HTML and CSS.</li>
								</ul>
								<h4>Plusses</h4>
								<ul>
									<li>Interest/experience in human psychology and typography.</li>
									<li>Understanding of international/cultural differences and how they translate into design.</li>
									<li>A portfolio featuring beautiful visual design on both web and mobile apps.</li>
									<li>Ability to fully simulate user interaction using Javascript.</li>
								</ul>
							</div>
							<?php include('includes/positionapply.inc.php') ?>
						</div>
					</div>
				</li>
				<li>
					<h3 onclick="showPositionDetails(1)">Software Engineer</h3>
					<div class="PositionDetails" id="positionInfo1">
						<p>As a software engineer at nepTune, you will be building the entire product top-to-bottom, implementing the nuances of our designs to create an amazing user experience, as well as designing the data models to support nepTune's features. We're focused on enchanting our users with a fast, responsive, beautiful user experience.</p>
						<p>Music as an art offers us many engineering challenges. Finding the right music for each listener is an obvious one, but what about finding the right cover art for a new album? Or bringing music from third-world countries around the globe? nepTune is breaking new ground in digital music.</p>
						<div class="row-fluid">
							<div class="span8 PositionReqs">
								<h4>Requirements</h4>
								<ul>
									<li>A passion for craftsmanship with everything you build. Your code is as much a product as the shipping site is.</li>
									<li>A love of great music. We don't judge you on your music tastes. But to fix a problem, you have to first care about the problem.</li>
									<li>An obsession with creating an amazing user experience, including the layout and feel that comes from getting those tiny details exactly right.</li>
									<li>Ability to code quickly when needed.</li>
									<li>Ability to write clean, maintainable code most of the time.</li>
									<li>Deep understanding of modern web and mobile technologies.</li>
								</ul>
								<h4>Plusses</h4>
								<ul>
									<li>A great communicator, able to work with our design team and interact with users.</li>
									<li>Background in computer science.</li>
									<li>Ability to implement a design in HTML/CSS/JS with full fidelity.</li>
									<li>Experience supporting live production applications, able to put out fires under pressure if needed.</li>
									<li>Ability to analyze metrics and perform usability testing, incorporating results into our future goals.</li>
									<li>Experience designing databases and working with a lot of data.</li>
									<li>Experience with Ruby on Rails.</li>
									<li>Able to setup, deploy, and maintain servers.</li>
								</ul>
							</div>
							<?php include('includes/positionapply.inc.php') ?>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<?php include('includes/footer.inc.php') ?>
</body>