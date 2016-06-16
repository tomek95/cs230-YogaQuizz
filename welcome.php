<?php
session_start();
session_destroy();
?>

<!doctype html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="js.js"></script>
	<style>
		body{
			background-image: url(img/background.jpg);
			background-repeat: no-repeat;
			background-size: 100%;
			color: white;
			font-size: 17px;
		}

		div#errorMsg {
			font-size: 20px;
			color: yellow;
			background: red;
			text-align: center;
			font-weight: 900;

		}

		input[type=text] {
			width: 250px;
			padding: 5px 10px;
			font-size: 20px;
			margin: 3px 0;
			box-sizing: border-box;
			border-radius: 10px;
			background-color: rgb(102, 153, 255);
			font-weight: bold;
		}
		input[type=text]:focus {
			width: 250px;
			font-size: 20px;
			padding: 5px 10px;
			margin: 3px 0;
			box-sizing: border-box;
			border-radius: 10px;
			background-color: rgb(153, 204, 255);
			outline: none;
			font-weight: bold;
		}

		input[type=submit] {
			width: 250px;
			padding: 5px 10px;
			margin: 5px 0px;
			border-radius: 8px;
			font-size: 20px;
		}

		span#id02 {
			font-weight: 900;

		}

		div#id01 {
			text-align: center;
			font-size: 30px;
		}

		div#thankyou {
			bottom: 10px;
			position: fixed;
			font-weight: 900;
			text-align: center;
			font-size: 20px;
		}

	</style>
</head>
<body>
	<h1>Welcome to Yoga Quiz</h1>
	<p>To continue to the quiz, please enter a username that you want to have while playing the quiz.</p>
	
	<div id="id01"><form method="post" action="quizchoice.php" onSubmit="return verify();" name="enter">
		<span id="id02">Username:</span><br>
		<input type="text" id="username" name="username"><br>

		<input type="submit" value="Enter" name="submit">
	</form>

</div>
<div id="errorMsg"></div>

<div id="thankyou">Thank you note: I would like to thank the author of www.yogacards.com for giving me permission (2016) to use the yoga cards available on the specificied website. The cards used here are for the purpose of an assignment for the module CS230 in Maynooth University.</div>

</body>
</html>