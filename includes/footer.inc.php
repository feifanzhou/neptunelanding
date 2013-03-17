<footer class="row-fluid">
	<div class="span6" id="footerLinks">
		<ul>
			<?php function curPageName() {
			 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
			} ?>
			<!-- TODO: Highlight current page (make text black?) -->
			<li id="navLink0" onclick="loadPage(0, true)">Home</li>
			<li id="navLink1" onclick="loadPage(1, true)">Story</li>
			<li id="navLink2" onclick="loadPage(2, true)">Jobs</li>
			<li id="navLink3" onclick="loadPage(3, true)">Contact</li>
		</ul>
	</div>
	<div class="span6" id="copyright">
		<p>&copy; 2013 nepTune Technologies Inc.</p>
	</div>
</footer>