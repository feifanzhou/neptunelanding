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
			var outputString = "<p id='signupResult'>" + reply + ", thanks for your interest! We hope you're as excited about nepTune as we are. If you have any questions, please send <a href='mailto:future@neptunemusic.co'>send us a message</a>!</p>";
			$("#signup").html(outputString);
		}
		else {
			var outputString = "<p id='signupResult'>There was an error&mdash;we'll get on fixing the issue as soon as we can!<br />Meanwhile, please try again, or <a href='mailto:team@neptunemusic.co'>send us a message</a>."
			$("#signup").html(outputString);
		}
	});
}