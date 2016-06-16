<?php
session_start();

?>
<!doctype html>
<html>
<head>
	<title>Quiz 1</title>

	<style>
		body{
			background-image: url(img/background.jpg);
			background-repeat: no-repeat;
			background-size: 100% ;
		}


		img {
			width: 120px;
			height: 250px;
			border: black 1px solid;
		}

		select {
			width: 122px;
			padding: 0px 0px;
			font-size: 15px;
			border-radius: 10px;
		}

		select:hover, select:active{
			background-color: #f2f2f2;
		}

		div {
			align: center;
		}

		div#info {
			text-align: center;
			font-size: 25px;
			color: #ffa64d;
			font-weight: bold;
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
	</style>
</head>
<body>
<!-- THiS QUIZ WORKS AS FOLLOWS:

Picture is shown. 
4 answers available for each picture.
Each answer is an English translation of the pose.
User has to select the correct answer.

-->

<?php
echo "<div id='info'>Good luck, " . $_SESSION["username"] . "!</div>";
?>

<form method="post" action="result.php">
	
	<div>
		<img src="img/pose1.jpg">
		<img src="img/pose2.jpg">
		<img src="img/pose3.jpg">
		<img src="img/pose4.jpg">
		<img src="img/pose5.jpg">
		<img src="img/pose6.jpg">
		<img src="img/pose7.jpg">
		<img src="img/pose8.jpg">
		<img src="img/pose9.jpg">
		<img src="img/pose10.jpg">
	</div>

	<div>
		<select name="pose1" class="required">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct1">Half Moon Pose (*)</option>  
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose2">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct2">Side Headstand (*)</option> 
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose3">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct3">Extended Leg Headstand Pose (*)</option>  
		</select>
		<select name="pose4">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Half Moon Pose</option>
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct4">Headstand (*)</option> 
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose5">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct5">Yogic Sleep Pose (*)</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose6">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct6">Downward Facing Pigeon Pose(*)</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose7">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option>
			<option value="correct7">Downward Facing Tree (*)</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose8">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct8">The Tree Pose (*)</option>
		</select>
		<select name="pose9">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct9">Arm Balance Scorpion (*)</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose10">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct10">Bow To The Ear (*)</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>
	
	<br>

	<div>
		<img src="img/pose11.jpg">
		<img src="img/pose12.jpg">
		<img src="img/pose13.jpg">
		<img src="img/pose14.jpg">
		<img src="img/pose15.jpg">
		<img src="img/pose16.jpg">
		<img src="img/pose17.jpg">
		<img src="img/pose18.jpg">
		<img src="img/pose19.jpg">
		<img src="img/pose20.jpg">
	</div>

	<div>
		<select name="pose11">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct11">A name of Vishnu and the serpent Vishnu slept on (*)</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose12">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct12">Crescent Moon (*)</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose13">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct13">Half Revolved Belly Pose (*)</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose14">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="correct14">Half Lotus pose (*)</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose15">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="correct15">Eight Limb Pose (*)</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose16">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct16">Ancient sage cursed with Crooked limbs (*)</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose17">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="correct17">Sun Salutation Backbend (*)</option>
		</select>
		<select name="pose18">
			<option value="default" selected="selected">Select answer</option> 
			<option value="correct18">Bound Angle Pose (*)</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose19">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="incorrect">Downward Facing Tree</option>
			<option value="correct19">Half Frog Side Shoulderstand Pose (*)</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
		<select name="pose20">
			<option value="default" selected="selected">Select answer</option> 
			<option value="incorrect">Yogic Sleep Pose</option> 
			<option value="correct20">The Boat Pose (*)</option>
			<option value="incorrect">Side Headstand</option>
			<option value="incorrect">Extended Leg Headstand Pose</option>
		</select>
	</div>

	<div id="buttons">
		<input type="submit" value="Submit answers" name="submitQuiz1">
		<input type="submit" formaction="quizchoice.php" value="Back"><br>
		<input type="submit" formaction="welcome.php" value="Leave Session">
	</div>
</form>

</body>
</html>