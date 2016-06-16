<?php
session_start();

?>
<!doctype html>
<html>
<head>
	<title>Quiz 2</title>

	<style>
		body{
			background-image: url(img/background.jpg);
			background-repeat: no-repeat;
			background-size: 100% ;
			
		}

		select {
			width: 400px;
			padding: 0px 0px;
			font-size: 15px;
			border-radius: 10px;
			font-size: 20px;
		}

		select:hover, select:active{
			background-color: #f2f2f2;
		}
		input[type=submit] {
			width: 250px;
			padding: 5px 10px;
			margin: 5px 0px;
			border-radius: 8px;
			font-size: 20px;
		}

		div#buttons {
			text-align: center;
		}

		div#id01 {
			color: white;
			font-weight: bold;
			font-size: 25px;
		}


		div#info {
			text-align: center;
			font-size: 25px;
			color: #ffa64d;
			font-weight: bold;
		}

	</style>

</head>

<body>
	<?php
	echo "<div id='info'>Good luck, " . $_SESSION["username"] . "!</div>";
	?>

	<div>
		<form method="post" action="result.php">

			<div id="id01">
				Adho Muka Kapotasana:<br>
				<select name="trans1">
					<option value="default" selected="selected">Select answer</option> 
					<option value="correct1">Downward Facing Pigeon Pose (*)</option>  
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Adho Mukha Vrksasana:<br>
				<select name="trans2">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Half Moon Pose</option>
					<option value="correct2">Downward Facing Tree (*)</option>
					<option value="incorrect">Side Headstand</option> 
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Vrksasana:<br>
				<select name="trans3">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Half Moon Pose</option>
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="correct3">The Tree Pose (*)</option>  
				</select>
				<br>
				Bhuja Vrischikasana:<br>
				<select name="trans4">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Half Moon Pose</option>
					<option value="incorrect">Downward Facing Tree</option>
					<option value="correct4">Arm Balance Scorpion (*)</option> 
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Akarna Dhanurasana:<br>
				<select name="trans5">
					<option value="default" selected="selected">Select answer</option> 
					<option value="correct5">Bow To The Ear (*)</option> 
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Ardha Padma Anantasana:<br>
				<select name="trans6">
					<option value="default" selected="selected">Select answer</option> 
					<option value="correct6">Vishnu and the serpent Vishnu slept on (*)</option> 
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Anjaneyasana:<br>
				<select name="trans7">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Yogic Sleep Pose</option>
					<option value="correct7">Crescent Moon (*)</option>
					<option value="incorrect">Side Headstand</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Ardha Jathara Parivarttanasana:<br>
				<select name="trans8">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Yogic Sleep Pose</option> 
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="correct8">Half Revolved Belly Pose (*)</option>
				</select>
				<br>
				Ardha Padmasana:<br>
				<select name="trans9">
					<option value="default" selected="selected">Select answer</option> 
					<option value="incorrect">Yogic Sleep Pose</option> 
					<option value="incorrect">Downward Facing Tree</option>
					<option value="correct9">Half Lotus pose (*)</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
				<br>
				Astangasana:<br>
				<select name="trans10">
					<option value="default" selected="selected">Select answer</option> 
					<option value="correct10">Eight Limb Pose (*)</option> 
					<option value="incorrect">Downward Facing Tree</option>
					<option value="incorrect">Side Headstand</option>
					<option value="incorrect">Extended Leg Headstand Pose</option>
				</select>
			</div>

			<div id="buttons">
				<input type="submit" value="Submit answers" name="submitQuiz2">
				<input type="submit" formaction="quizchoice.php" value="Back"><br>
				<input type="submit" formaction="welcome.php" value="Leave Session">
			</div>
		</form>

	</body>
	</html>