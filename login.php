
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet"  type="text/css" href="login-style.css">
</head>

<body>

<div class="header">


	<div class="top">
		<div class="logo">
			<img src="logo.png">
		</div>

		<div class="description">
			
			<h1>Stay Healthy ...Stay Fit</h1>
			
		</div>


	</div>
<div class="middle">
	<div class="login-photo">
		<img src="log.png">
	</div>

	<form class="login" action="" method="post">
		<div class="name">	
			<h1>LOG IN</h1>
		</div>
		<br>
		<div class="innerlogin">

 				<select name="profession" style="width: 100px; text-align: center;
					height: 25px; height: 25px;
					font-size: 19px;">
 					<option name="profession">USER</option>
 						<option value="Patient"> Patient</option>
 						<option value="Doctor"> Docter</option> 					
 						<option value="Hospital"> Hospital</option>
 							<br>
 	
 				</select>
 				<br>	<br>
				<label>Username:-</label>
				<input type="text" name="username" placeholder="Enter the Username" style="width: 200px; text-align: center;
				height: 30px;">
					<br><br><br>
				<label>Password:-</label>
				<input type="password" name="password" placeholder="Enter the password" style="width: 200px; text-align: center;
				height: 30px;">
  				
  				<br> <br>
			
				<input type="checkbox" name="submit"> <p>Remember me</p>

				
				<input type="submit" name="submit" value="Log in" style="width: 150px; text-align: center;
				height: 50px; background-color: #0099ff;border-color: blue ;font-size: 25px; border-radius: 20%;">





		</div>
		<?php

			if(isset($_POST["submit"]))
			{
				session_start();

				$username1=$_POST['username'];
				$password1=$_POST['password'];
				$profession1=$_POST['profession'];



				#make the connection
				$con=mysqli_connect('localhost','root','','website1');



				#make a query

				$query="SELECT * FROM `userdata` WHERE username='$username1' and password='$password1' and profession='$profession1'";

				#run the query

				$run=mysqli_query($con,$query);

				#find if any data matches
				$num= mysqli_num_rows($run);

				if($num==1)
				{
					$data=mysqli_fetch_assoc($run);

					$_SESSION['name']=$data['name'];
					$_SESSION['profession']=$profession1;
					$_SESSION['username']=$username1;

					if ($profession1=='Hospital') 
					{
						header('location:hospital_login_next.php');

					}
					else
					{
					header('location:mainpage.php');
					}
				}
				else
				{
				echo "login unsuccessful";

				}



			}


				?>





	</form>	

</div>




<div class="bottom">
			<div class="contactus">
				<a href="contactus.php">
					<img src="contactus.png">

				</a>

			</div>	

			<div class="help">
				<a href="contactus.php">
					<img src="help.png">
				</a>
				
			</div>




</div>




</div>
</body>


</html>