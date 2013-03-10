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
		if (reply != 'Error') {
			var outputString = "<p>" + reply + ", thanks for your interest! We hope you're as excited about nepTune as we are. If you have any questions, please send <a href='mailto:future@neptunemusic.co'>send us a message</a>!</p>";
			$("#signup").html(outputString);
		}
		else {
			var outputString = "<p>There was an error&mdash;we'll get on fixing the issue as soon as we can!<br />Meanwhile, please try again, or <a href='mailto:team@neptunemusic.co'>send us a message</a>."
			$("#signup").html(outputString);
		}
	});
	/* $.ajax({
		url: 'useremailsignup.php',
		type: 'POST',
		data: userData,
		dataType: 'json'
	}).done(function(reply) {
		alert("AJAX return");
		console.log("Reply: " + reply);
		var fname = reply['fname'];
		var outputString = "<p>" + fname + ", thanks for your interest! We hope you're as excited about nepTune as we are. If you have any questions, please send <a href='mailto:future@neptunemusic.co'>send us a message</a>!</p>";
		console.log("OutputString: " + outputString);
		$("#signup").html(outputString);
	}); */
}