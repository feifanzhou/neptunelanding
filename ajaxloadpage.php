<?php
	$pageIndex = $_POST['pageIndex'];
	if ($pageIndex == 0) {
		print file_get_contents('main.html');
	}
	else if ($pageIndex == 1) {
		print file_get_contents('story.html');
	}
	else if ($pageIndex == 2) {
		$jobsHTML = file_get_contents('jobs.html');
		$positionApplyHTML = file_get_contents('includes/positionapply.inc.php');
		$jobsHTML = str_replace('<!-- PositionApply -->', $positionApplyHTML, $jobsHTML);
		print $jobsHTML;
	}
	else if ($pageIndex == 3) {
		print file_get_contents('contact.html');
	}
?>