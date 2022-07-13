<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styling.css">

<body style="background-image:url('bg1.webp');background-size:cover">



	<div class="navbar">

		<p class="head" style=" float: left;"> JEPPIAAR <span style="font-size:60%;">ENGINEERING COLLEGE</span></p>
		<a href="logout.php">Log-out</a>
		<a href="signup.php">sign-in</a>

		<a href="index.html">Home</a>
		<a class="active" href="index.php">profile</a>

	</div><br><br><br>

	<fieldset class="bg1">

	<div class="div1">

		<h4 style="color: rgb(138, 138, 252);font-size:120%;">check your profile details..</h4>

		Hello Mr/Mrs <?php echo $user_data['user_name']; ?><br><br> Date of Birth:  <?php echo $user_data['dob']; ?><br><br> User_Id: <?php echo $user_data['user_id']; ?><br><br>
		Roll Number: <?php echo $user_data['roll_num']; ?><br><br>Department: <?php echo $user_data['dept']; ?><br><br>
		Year: <?php echo $user_data['year']; ?><br><br>Address: <?php echo $user_data['address']; ?><br><br>
		Blood Group: <?php echo $user_data['blood_group']; ?><br><br>Gender: <?php echo $user_data['gender']; ?><br><br>

	</div>
	</fieldset>
</body>

</html>