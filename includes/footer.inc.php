<footer class="row-fluid">
	<div class="span6" id="footerLinks">
		<ul>
			<?php function curPageName() {
			 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
			} ?>
			<!-- TODO: Highlight current page (make text black?) -->
			<li><a href="index">Home</a></li>
			<li><a href="story">Story</a></li>
			<li><a href="jobs">Jobs</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
	</div>
	<div class="span6" id="copyright">
		<p>&copy; 2013 nepTune Technologies Inc.</p>
	</div>
</footer>