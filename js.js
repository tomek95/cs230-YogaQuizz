function verify() {
	var login = document.getElementById("username").value;

		//if login is empty OR is it begins with space
		if(login === "" || /\s/.exec(login)){
			document.getElementById("errorMsg").innerHTML = "Username is required to play the quiz.";
			return false;
		}
		else{
			return true;
		}
	}
