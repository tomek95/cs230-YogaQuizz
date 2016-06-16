<?php
session_start();


if(isset($_POST["username"])){
	$_SESSION["username"] = $_POST["username"];
	$_SESSION["totalScoreQuiz1"] = 0;
	$_SESSION["overallQuiz1"] = 0;
	$_SESSION["totalScoreQuiz2"] = 0;
	$_SESSION["overallQuiz2"] = 0;
}


$_SESSION["score"] = 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>

	<style>
		body{
			background-image: url(img/background.jpg);
			background-repeat: no-repeat;
			background-size: 100% ;
			color: white;
			font-weight: bold;
		}

		button[type=button] {
			width: 250px;
			padding: 5px 10px;
			margin: 5px 0px;
			border-radius: 8px;
			font-size: 20px;
		}

		div#buttons {
			text-align: center;
		}

		p#id03{
			width: 30%;
		}

		div#divTotal {
			font-size: 25px;
		}

		div#welcome {
			font-size: 30px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php 
	echo "<div id='welcome'>Welcome to Yoga Quiz, " . $_SESSION["username"] . "</div>";
	?>

	<div><h1>Instructions:</h1>
		<p>You can do 2 quizes:<br>
			<b><u>Quiz 1:</u></b> You have to pick the correct English name of the pose shown in the picture.<br>
			<b><u>Quiz 2:</u></b> You have to select the English translation of the Sanskrit of each pose.<br>
			<br>
			There is no time limit, but please <u>don't cheat!</u></p>
		</div>
		<div id="buttons">
			<button type="button" onClick="location.href='quiz1.php'">Quiz 1: Pictures</button>
			<button type="button" onClick="location.href='quiz2.php'">Quiz 2: Translating</button><br>
			<button type="button" onClick="location.href='welcome.php'">Leave Session</button> 
		</div>

		<p id="id03"> Below you can find the total score for your current session for both quizes. It is calculated based on the total number of questions you answered correctly over the total number of questions you took for the specified quiz.</p>
		
		<?php
		echo "<div id='divTotal'>Total score for quiz 1 during this session: " . $_SESSION["totalScoreQuiz1"] . "/" .  $_SESSION["overallQuiz1"] . "<br>";

		echo "Total score for quiz 2 during this session: " . $_SESSION["totalScoreQuiz2"] . "/" . $_SESSION["overallQuiz2"] . "</div>";
		?>

	</body>
	</html>