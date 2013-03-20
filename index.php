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
	<title>nepTune Music</title>
	<meta property="fb:admins" content="100001324728942" />
	<meta property="og:title" content="nepTune Jobs" />
	<meta property="og:type" content="company" />
	<meta property="og:url" content="http://neptunemusic.co/#2" />
	<meta property="og:image" content="http://neptunemusic.co/images/logo.png" />
	<meta property="og:site_name" content="nepTune Music" />
	<meta property="fb:admins" content="100001324728942" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" /> <!-- Includes responsive code -->
	<link rel="stylesheet" href="css/all.css" type="text/css" />
	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<!-- <script src="js/mainscripts.js"></script> -->
	<script src="js/activity-indicator.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {	// Load Retina images
			if (window.devicePixelRatio > 1.5) {
				$('img').each(function(i) {
					$(this).attr('src', $(this).attr('src').replace(".", "@2x."));
				});
			}
		});
	</script>
	<!-- TODO: Use placeholders in text fields. Either HTML5 attribute or JS fallback solution -->
	<script type="text/javascript">
		/* Credit where credit is due: http://stackoverflow.com/a/8263907/472768 */
		function placeholderSupported() {
			return ('placeholder' in document.createElement('input'));
		}
		$(document).ready(function() {
			if (placeholderSupported()) {
				$('label').each(function(i) {
					$(this).hide();
				});
			}
		});
	</script>
	<script type="text/javascript">	// For home page parallax
		$(document).ready(function() {
			var ParallaxSpeedFactor = 3;
			$(window).scroll(function() {
				var yPos = -($(window).scrollTop() / ParallaxSpeedFactor);
				console.log("yPos: " + yPos);
				var coords = '50% ' + yPos + 'px';
				console.log('coords: ' + coords);
				$('body').css('backgroundPosition', coords);
				if ($('div#storyHeader')[0])
					$('div#storyHeader').css('backgroundPosition', coords);
				if ($('div#workHeader')[0])
					$('div#workHeader').css('backgroundPosition', coords);
			});
		});
	</script>
	<script type="text/javascript">	// New user signup AJAX
		function newUserSignup() {
			var fnameVal = $("#fname").val();
			var lnameVal = $("#lname").val();
			var emailVal = document.getElementById("email").value;
			var userData = {
				fname: fnameVal,
				lname: lnameVal,
				email: emailVal
			};
			$.ajax({
				type: "POST",
				url: "useremailsignup.php",
				dateType: 'json',
				data: {fname: fnameVal, lname: lnameVal, email: emailVal}
			}).done(function(reply) {
				if (reply.indexOf("Error") == -1) {
					var outputString = "<p id='signupResult' style='font-size: 1.25em; padding: 28px;'>" + reply + ", thanks for your interest! We hope you're as excited about nepTune as we are. If you have any questions, please send <a href='mailto:future@neptunemusic.co'>send us a message</a>!</p>";
					$("#signup").html(outputString);
				}
				else {
					var outputString = "<p id='signupResult' style='font-size: 1.25em; padding: 28px;'>There was an error&mdash;we'll get on fixing the issue as soon as we can!<br />Meanwhile, please try again, or <a href='mailto:team@neptunemusic.co'>send us a message</a>.</p>"
					$("#signup").html(outputString);
				}
			});
		}
	</script>
	<script type="text/javascript">	// For stories page
		function showPrinciples(tag) {
			for (var i = 0; i < 3; i++) {
				var selector = "#guidance" + i;
				if (i == tag)
					$(selector).slideDown(400);
				else
					$(selector).slideUp(400);
			}
		}
		function showFounders(tag) {
			console.log("Show founders");
			for (var i = 0; i < 2; i++) {
				var selector = '#founders' + i;
				if (i == tag)
					$(selector).slideDown(400);
				else
					$(selector).slideUp(400);
			}
		}
	</script>
	<script type="text/javascript">	// For jobs page
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
	<div id="spinnerBase"></div>
	<div id="fb-root"></div>	
	<script>(function(d, s, id) {	// Facebook
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="bodyContent">
	<script type="text/javascript">	// For AJAX page load
		// Note that this isn't good for SEO, but we can fix that later
		function titleForIndex(index) {
			switch(index) {
				case 1:
					return "nepTune | Our Story";
					break;
				case 2:
					return "nepTune | Jobs";
					break;
				case 3:
					return "nepTune | Contact";
					break;
				default:
					return "nepTune";
					break;
			}
		}
		function makeAJAXRequest(index) {
			$.ajax({
				type: "POST",
				url: "ajaxloadpage.php",
				dateType: 'json',
				data: {pageIndex: index}
			}).done(function(reply) {
				$("#spinnerBase").css('display', 'none');
				document.title = titleForIndex(index);
				$("#spinnerBase").activity(false);
				$("#bodyContent").css('marginLeft', 0);
				$("#bodyContent").css('marginRight', 0);
				$("#bodyContent").html(reply);
				var navLinkID = "navLink" + window.location.hash.substring(1);
				$(navLinkID).addClass('CurrentNav');
				window.scrollTo(0, 0);
				$("#bodyContent").animate({
					opacity: 1
				});
			});
		}
		function prepAJAX(index) {
			$("#spinnerBase").css('display', 'block');
			window.location.hash = index;
			$("#spinnerBase").activity();
			$("#bodyContent").css('opacity', '0');
			if (index == 0) {
				$("body").css('background-image', "url('../images/declaration-light.jpg')");
				$("body").css('background-repeat', 'repeat-y');
			}
			var navLinkID = "navLink" + window.location.hash.substring(1);
			$(navLinkID).removeClass('CurrentNav');
			makeAJAXRequest(index);
		}
		function loadPage(index, animate) {
			// if (index == window.location.hash.substring(1))
				// return;
			var moveLeft = -(parseInt($("#bodyContent").css('marginLeft'),10) == 0 ? $("#bodyContent").outerWidth() : 0);
			var moveRight = parseInt($("#bodyContent").css('marginRight'),10) == 0 ? $("#bodyContent").outerWidth() : 0;
			if (index < window.location.hash.substring(1)) {
				moveLeft *= -1;
				moveRight *= -1;
			}
			else if (index == window.location.hash.substring(1)) {
				moveLeft = 0;
				moveRight = 0;
			}
			
			if (index != 0) {
				$("body").css('background-image', "url('../images/dust.png')");
				$("body").css('background-repeat', 'repeat');
			}
				
			if (animate && index != window.location.hash.substring(1)) {
				if ($(".HeroHeader")[0]) {
					$(".HeroHeader").animate({
						left: moveLeft,
						right: moveRight
					});
				}
			}
			if (animate) {
				$("#bodyContent").animate({
					marginLeft: moveLeft,
					marginRight: moveRight
				}, function() {
					prepAJAX(index);
				});
			}
			else
				prepAJAX(index);
		}
		var locHash = window.location.hash;
		if (locHash.length > 0)
			loadPage(locHash.substring(1), false);
	</script>
	<div class="row-fluid" id="mantra">
		<div id="logo"><img src="images/logo.png" alt="nepTune Music" height="55px" /></div>
		<p class="Tagline">Every artist, every song, everywhere.</p>
		<p id="description">The existing music industry marginalizes music and doesn’t give enough back to the artists. nepTune is the first music platform that focuses on the intersection between artists and consumers.</p>
		<div class="Quote" id="musicians" style="display: none">
			<p class="QuoteText">We're not creating celebrities. We're creating musicians.</p>
			<p class="QuoteAuthor">Feifan Zhou, Co-Founder</p>
		</div>
	</div>
	<div class="row-fluid" id="forArtists">
		<div class="Content">
			<h1>For artists</h1>
			<div class="span6 FeatureBlock">
				<div class="Feature">
					<h2>Built for you</h2>
					<p>Music isn't just about individual songs. You are a talented individual with stories to share, and nepTune focuses on you as an artist&mdash;a creator of awesome music.</p>
				</div>
				<div class="Feature">
					<h2>Tell your story</h2>
					<p>You have your influences and favorite bands, and your songs are inspired by a great story&hellip;or maybe you just started with a really cool chord. Either way, we would love to know about where you and your inspiration came from! nepTune provides a great way for you to share this through exclusive content that fans unlock when they support your music.</p>
				</div>
				<div class="Feature">
					<h2>Beautiful homepage</h2>
					<p>Your music deserves better than a page that looks like a newspaper article. nepTune gives you a beautiful home for you and your fans and makes it incredibly easy for fans to find what they're searching for.</p>
				</div>
				<div class="Feature">
					<h2>Fair promotion</h2>
					<p>Labels shouldn't have the right to decide what music fans listen to. nepTune gives every artist an opportunity to get their music out in front of people and discover success. Along the way, you'll build a loyal fanbase who love you and your music. Doesn't that sound better than having a guy in a tacky suit decide what people listen to?</p>
				</div>
			</div>
			<div class="span5 FeatureBlock">
				<div class="Feature">
					<h2>Sharing at the speed of sound</h2>
					<p>nepTune makes it incredibly easy for listeners and artists alike to share songs they like with each other. Sharing is much more effective than being bombarded by generic songs everywhere you go. This means that people will take the time to appreciate your work and gets your music out in front of many more people who genuinely love it.</p>
				</div>
				<div class="Feature">
					<h2>Crowd-sourced talent</h2>
					<p>Maybe you're an incredibly talented guitarist, but you don't know how to make a music video. Or maybe your band is ready to release a great album, but you don't have any cover art. But you have a great fanbase, and <em>someone</em> will know how to make that music video, or create that cover art. nepTune is committed to bringing artists and fans together, and great things come out of that interaction.</p>
				</div>
				<div class="Feature">
					<h2>Surrounded by quality</h2>
					<p>Your music shouldn't be next to random family videos&mdash;it deserves an environment surrounded by other great music and an audience who will appreciate it. nepTune provides this incredible environment, and we would love for you to be a part of it.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid" id="forConsumers">
		<div class="Content">
			<h1>For listeners</h1>
			<div class="span6 FeatureBlock">
				<div class="Feature">
					<h2>Discover incredible new music</h2>
					<p>nepTune fosters an artistic environment where artists are free to explore creative ideas and create great music. This means that you get pure creativity, not an autotuned, mass-produced mess.</p>
				</div>
				<div class="Feature">
					<h2>Sounds from around the world</h2>
					<p>nepTune uses the freedom of the internet to spread music around the world. Whether you like African pop or the traditional sounds of Southeast Asia, nepTune brings all of those sounds together in one place for your listening pleasure.</p>
				</div>
				<div class="Feature">
					<h2>Simple, clean, controllable sharing</h2>
					<p>nepTune is designed with sharing in mind. When you hear a song you like, you can share it with any number of people. This increases the amount of new music you discover and helps support the artists as well.</p>
				</div>
			</div>
			<div class="span5 FeatureBlock">
				<div class="Feature">
					<h2>Support your favorite artists</h2>
					<p>Independent artists create great music, and they have the right to make a living from their work. nepTune allows you to support amazing artists by sharing the songs you like and buying the songs you love. The proceeds from the songs you buy go directly to the artist&mdash;no record label to get between artists and what they've earned.</p>
				</div>
				<div class="Feature">
					<h2>Zero risk</h2>
					<p>Buying music through most sites is a risk. You have to shell out money to get the whole song, and then what happens if you decide you don't like that song? There's nothing you can do about it. nepTune lets you listen to the whole song and then decide whether you want to buy it. When you decide that you like it, a quick donation to the artist is all it takes before <em>boom!</em> the song is yours, on all your devices, forever.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid LastBlockBeforeFooter" id="signup">
		<div class="Content">
				<div id="stayTunedText">
				<h3>Stay tuned</h3>
				<p>Welcome to the future of music.</p>
				<div class="btn FeedbackBtn" id="consumerFeedbackButton"><a href="http://bit.ly/nepTuneSurvey">We want your feedback!</a></div>
			</div>
			<div id="signupForm">
				<form method="POST" action="useremailsignup.php">
					<div id="signupNameBlock">
						<input type="text" name="fname" id="fname" placeholder="First name" />
						<input type="text" name="lname" id="lname" placeholder="Last name" />
					</div>
					<div id="signupEmailBlock">
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>
					<div class="btn" id="signupButton" onclick="newUserSignup()" ><span>Sign up!</span></div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<?php include('includes/footer.inc.php') ?>
</body>
</html>