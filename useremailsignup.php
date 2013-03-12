<?php
	$fname = mysql_real_escape_string($_POST["fname"]);
	$lname = mysql_real_escape_string($_POST["lname"]);
	$email = mysql_real_escape_string($_POST["email"]);
	$services_json = json_decode(getenv("VCAP_SERVICES"),true);
	$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
	$username = $mysql_config["username"];
	$password = $mysql_config["password"];
	$hostname = $mysql_config["hostname"];
	$port = $mysql_config["port"];
	$dbname = $mysql_config["name"];
	$link = mysqli_connect("$hostname", $username, $password);
	$db_selected = mysql_select_db("leads", $link);
	if (mysqli_connect_errno($link)) {
 		print "Error: " . mysql_error();
 		die();
 	}
	mysql_query("INSERT INTO leads (fname, lname, email) VALUES ('" . $fname . "', '" . $lname . "', '" . $email . "')");
	mysqli_close($link);
	$fh = fopen('signups.txt', 'a+') or die("Error can't open text file");
	$newEntry = $_POST["fname"] . "|^|^|" . $_POST["lname"] . "|^|^|" . $_POST["email"];
	fwrite($fh, $newEntry);
	fclose($fh);
	print $_POST["fname"];
?>