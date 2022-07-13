<?php
session_start();

include("connection.php");
include("function.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$roll_num = $_POST['roll_num'];
	$dept = $_POST['dept'];
	$year = $_POST['year'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$blood_group = $_POST['blood_group'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into userid (user_id,user_name,password,dob,roll_num,dept,year,address,gender,blood_group) values ('$user_id','$user_name','$password','$dob','$roll_num','$dept','$year','$address','$gender','$blood_group')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styling.css">

<body style="background-image:url('bg3.jpg');background-size:cover">



<div class="navbar">
	
  <p class="head" style=" float: left;"> JEPPIAAR <span style="font-size:60%;">ENGINEERING COLLEGE</span></p>
  <a class="active" href="signup.php">sign-in</a> 
  <a href="login.php">login</a> 
  <a href="index.html">Home</a> 
  
</div><br><br><br>

<fieldset class="field">

<div style="font-size: 50px;text-align:center;color: rgb(145, 177, 236);">Sign-In</div>

<table class="table">
<tr>
<td class="table1">
<h4>JEPPIAAR ENGINEERING COLLEGE</h4><br><br>
<p>"its not about perfect , its about effort"</p><br>
<p>“Excellence is not a skill. It is an attitude.”</p><br>
<p>“Focus on your goal. Don’t look in any direction but ahead.”</p><br>
<p>“You don’t get what you wish for. You get what you work for.”</p><br>
<p>“Do something now; your future self will thank you for later.” </p><br>
<p>“Don’t try to be perfect. Just try to be better than you were yesterday.”</p><br>


</td>
<td>



	<div id="box">

		<form method="post">
			
			<label for="name" >Name:</label><br>
			<input id="text" type="text" placeholder="Enter your name.." name="user_name"><br><br>
			<label for="password" >Password:</label><br>
			<input id="text" type="password" placeholder="Enter your Password.." name="password"><br><br>
			<label for="DOB" >Date Of Birth:</label><br>
			<input id="text" type="date" placeholder="Enter your DOB.." name="dob"><br><br>
			<label for="roll_number" >Roll Number:</label><br>
			<input id="text" type="text" placeholder="12345..." name="roll_num"><br><br><br>
			<label for="dept" >Select Department:</label>
			<select name="dept">
				<option>EIE</option>
				<option>ECE</option>
				<option>EEE</option>
				<option>MECH</option>
				<option>CIVIL</option>
				<option>AERO</option>
				<option>BIO</option>
				<option>ECE</option>
			</select><br><br>

			<label for="year" >Select year:</label>
			<select name="year">
				<option>1 ST</option>
				<option>2 ND</option>
				<option>3 RD</option>
				<option>4 TH</option>

			</select><br><br>
			
			<label for="gender" >Select Gender:</label>

			<select name="gender">
				<option>Male</option>
				<option>Female</option>
				
			</select><br><br>
			<label for="blood_group" >Select Blood Group:</label>

			<select name="blood_group">
				<option>A1+</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>O+</option>
				<option>O-</option>
				<option>AB+</option>
			</select><br><br><br>
		



			<label for="address" >Fill your address in below column:</label><br><br>

			<textarea id="ta1" cols="40" rows="10" style="background-color: rgb(252, 238, 221);" placeholder="eg: No.34 , chennai , tamilnadu , India" name="address" ></textarea><br><br>


			<input id="button" type="submit" value="Signup"><br><br>

			
		</form>
	</div>

		
</td>
</tr>
</table>

</fieldset>
</body>

</html>