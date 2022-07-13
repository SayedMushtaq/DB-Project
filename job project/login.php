<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from userid where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
  <a  href="signup.php">sign-in</a> 
  <a class="active" href="login.php">login</a> 
  <a href="index.html">Home</a> 
  
</div><br><br><br>

<fieldset class="field">

<div style="font-size: 50px;text-align:center;color: rgb(145, 177, 236);">Log-In</div>
<p style="text-align:center;color: rgb(145, 177, 236);font-size:20px;font-weight:300">If you dont have an account sigh-In first by clicking "sign-In" in the nav bar!<br>if you have so then enter your username and password</p>
<table class="table">
<tr>
<td class="table1">

<p>"its not about perfect , its about effort"</p><br>
<p>“Excellence is not a skill. It is an attitude.”</p><br>



</td>
<td>



	<div id="box">

		<form method="post">
			
			<label for="name" >Name:</label><br>
			<input id="text" type="text" placeholder="Enter your name.." name="user_name"><br><br>
			<label for="password" >Password:</label><br>
			<input id="text" type="password" placeholder="Enter your Password.." name="password"><br><br>
			

			<input id="button" type="submit" value="login"><br><br>

			
		</form>
	</div>

		
</td>
</tr>
</table>

</fieldset>
</body>

</html>