<?php
	/* $fname = mysql_real_escape_string($_POST["fname"]);
	$lname = mysql_real_escape_string($_POST["lname"]);
	$email = mysql_real_escape_string($_POST["email"]); */
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$services_json = json_decode(getenv("VCAP_SERVICES"),true);
	$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
	$username = $mysql_config["username"];
	$password = $mysql_config["password"];
	$hostname = $mysql_config["hostname"];
	$port = $mysql_config["port"];
	$dbname = $mysql_config["name"];
	$link = new mysqli("$hostname", $username, $password, $dbname);
	if ($link->errno) {
 		print ("Error: " . $link->error);
 		die();
 	}
 	$fname = $link->escape_string($fname);
 	$lname = $link->escape_string($lname);
 	$email = $link->escape_string($email);
 	$queryString = "INSERT INTO leads (fname, lname, email) VALUES ('" . $fname . "', '" . $lname . "', '" . $email . "')";
	$insertResult = $link->query($queryString);
	if (!$insertResult) {
		print ("Error inserting");
		die();
	}
	$link->close();
	$fh = fopen('signups.txt', 'a+') or die("Error can't open text file");
	$newEntry = $_POST["fname"] . "|^|^|" . $_POST["lname"] . "|^|^|" . $_POST["email"];
	fwrite($fh, $newEntry);
	fclose($fh);
	print $_POST["fname"];
?>