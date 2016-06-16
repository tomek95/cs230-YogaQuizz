<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<style>
		body{
			background-image: url(img/background.jpg);
			background-repeat: no-repeat;
			background-size: 100% ;
		}

		div {
			color: white;
			font-size: 23px;
			font-weight: bold;
		}

		button[type=submit] {
			width: 250px;
			padding: 5px 10px;
			margin: 5px 0px;
			border-radius: 8px;
			font-size: 20px;
		}

		div#button {
			text-align: center;
		}
	</style>
</head>
<body>


	<?php
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		if(isset($_POST["submitQuiz1"])){
			for($i = 1; $i <= 20; $i++){
				if($_POST["pose" . $i] === "correct" . $i){
					$_SESSION["score"]++;
				}
			}

			$_SESSION["totalScoreQuiz1"] = $_SESSION["totalScoreQuiz1"] + $_SESSION["score"];
			$_SESSION["overallQuiz1"] = $_SESSION["overallQuiz1"] + 20;
		}

		if(isset($_POST["submitQuiz2"])){
			for($i = 1; $i <= 10; $i++){
				if($_POST["trans" . $i] === "correct" . $i){
					$_SESSION["score"]++;
				}
			}

			$_SESSION["totalScoreQuiz2"] = $_SESSION["totalScoreQuiz2"] + $_SESSION["score"];
			$_SESSION["overallQuiz2"] = $_SESSION["overallQuiz2"] + 10;
		}

	}

	if($_SESSION["score"] === 0){
		echo "<div>You scored 0. You might want to learn some Yoga. You did terribly. I mean Jesus Christ, even I could do better hahahahahaha.</div>";
	}
	else if ($_SESSION["score"] == 1){
		echo "<div>Seriously? 1 point? Wow. You can do better than this.</div>";
	}
	else {
		echo "<div>Congratulations " . $_SESSION["username"] . "! You scored " . $_SESSION["score"] . " points in the quiz! Have another try!</div>";
	}

	?>

	<form method="post">
		<div id="button"><button type="submit" name="quizChoice" formaction="quizchoice.php">Home Page</button></div>
	</form>

</body>
</html>