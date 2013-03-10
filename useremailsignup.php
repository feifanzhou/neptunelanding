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
	$link = mysqli_connect("$hostname:$port", $username, $password);
	$db_selected = mysql_select_db($dbname, $link);
	if (mysqli_connect_errno($link)) {
 		print "Failed to connect to MySQL: " . mysqli_connect_error();
 		die();
 	}
	// mysql_query("INSERT INTO leads (fname, lname, email) VALUES ('") . $fname . "', '" . $lname . "', '" . $email . "')");
	mysqli_close($link);
	$returnArray = array(
		'fname' => $fname
	);
	print(json_encode($returnArray));
	// print $_POST["fname"];
	print "Error";
?>