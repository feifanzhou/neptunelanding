function newUserSignup(){var e=$("#fname").val(),t=$("#lname").val(),n=document.getElementById("email").value,r={fname:e,lname:t,email:n};$.ajax({type:"POST",url:"useremailsignup.php",dateType:"json",data:{fname:e,lname:t,email:n}}).done(function(e){if(e.indexOf("Error")==-1){var t="<p id='signupResult'>"+e+", thanks for your interest! We hope you're as excited about nepTune as we are. If you have any questions, please send <a href='mailto:future@neptunemusic.co'>send us a message</a>!</p>";$("#signup").html(t)}else{var t="<p id='signupResult'>There was an error&mdash;we'll get on fixing the issue as soon as we can!<br />Meanwhile, please try again, or <a href='mailto:team@neptunemusic.co'>send us a message</a>.";$("#signup").html(t)}})};