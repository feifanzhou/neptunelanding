<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>nepTune</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
	<link rel="stylesheet" href="css/mainstyles.css" type="text/css" />
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
		$(document).ready(function() {
			$("footer").delay(250).animate({
				bottom: '0px'
			}, 1500);
		})
	</script>
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
</head>
<body>
	<div id="mantra">
		<div id="logo"><img src="images/logo.png" alt="nepTune Music" height="55px" /></div>
		<p class="Tagline">Discover, enjoy and share great music from around the world</p>
		<p id="description">nepTune is a place for artists and their fans to build trusting, personal relationships. The existing music industry marginalizes music and doesn’t give enough back to the artists. nepTune helps artists directly, through a supportive community and painless environment that encourages fans to support the music they love.</p>
	</div>
	<div class="row-fluid" id="forArtists">
		<h1>For artists</h1>
		<div class="span5 FeatureBlock">
			<div class="Feature">
				<h2>Built for artists</h2>
				<p>Music isn't just about individual songs. You are a talented individual with stories to share, and nepTune focuses on you as an artist&mdash;a creator of awesome music. 
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
				<h2>Fair, equal promotion</h2>
				<p>Labels shouldn't have the right to decide what music fans listen to. nepTune provides an equal opportunity for every artist to get your music out in front of people and discover success. Along the way, you'll build a loyal fanbase who love you and your music. Doesn't that sound better than having a guy in a tacky suit decide what people listen to?</p>
			</div>
		</div>
		<div class="span5 FeatureBlock">
			<div class="Feature">
				<h2>Rapid sharing</h2>
				<p>nepTune makes it incredibly easy for listeners and artists alike to share songs they like with each other. This is much more effective than being bombarded by mass-manufactured generic songs everywhere you go. This means that people will take the time to appreciate your work and gets your music out in front of many more people who genuinely love it.</p>
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
	<div class="row-fluid" id="forConsumers">
		<h1>For listeners</h1>
		<div class="span5 FeatureBlock">
			<div class="Feature">
				<h2>Discover incredible new music</h2>
				<p>nepTune fosters an artistic environment where artists are free to explore creative ideas and create amazing music. This means that you get to pure creativity, not an autotuned, mass-produced mess.</p>
			</div>
			<div class="Feature">
				<h2>Sounds from around the world</h2>
				<p>nepTune uses the freedom of the internet to bring music around the world. Whether you like African pop or the traditional sounds of Southeast Asia, nepTune brings all of those sounds together in one place for your listening pleasure.</p>
			</div>
			<div class="Feature">
				<h2>Simple, clean, controllable sharing</h2>
				<p>nepTune is designed with sharing in mind. When you hear a song you like, you can share it with any number of people. This increases the amount of new music you discover and helps support the artists as well.</p>
			</div>
		</div>
		<div class="span5 FeatureBlock">
			<div class="Feature">
				<h2>Support your favorite artists</h2>
				<p>Artists create incredible works, and they deserve to make a living from them. nepTune allows you to contribute to artists that you love by sharing songs you like and paying for the songs you love. Half of the amount you choose to donate goes directly to the artist&mdash;no middlemen to get in the way and take most of the money.</p>
			</div>
			<div class="Feature">
				<h2>Zero risk</h2>
				<p>When you think about it, music stores involve risk. On iTunes, for example, you have to spend $1 up front for a song you may or may not like. On nepTune, you get to hear a song a few times for free. When you decide that you like it, you can buy the song at that time. This means that all your contributions go towards great music that you love.</p>
			</div>
		</div>
	</div>
	<footer id="signup">
		<div id="footerForm">
			<p>Stay up to date:</p>
			<form method="POST" action="useremailsignup.php">
				<input type="text" name="fname" id="fname" placeholder="First name" />
				<label for="fname">First name</label>
				<input type="text" name="lname" id="lname" placeholder="Last name" />
				<label for="lname">Last name</label>
				<input type="email" name="email" id="email" placeholder="Email" />
				<label for="email">Email</label>
				<div class="btn" id="signupButton" onclick="newUserSignup()" ><span>Sign up!</span></div>
			</form>
			<div id="feedbackButtons">
				<div class="btn FeedbackBtn" id="consumerFeedbackButton"><a href="http://bit.ly/nepTuneFeedback">Music lover feedback</a></div>
				<div class="btn FeedbackBtn" id="artistFeedbackButton"><a href="http://bit.ly/artistfeedback">Artist feedback</a></div>
			</div>
		</div>
	</footer>
</body>
</html>