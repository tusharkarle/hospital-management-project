
<html>
<head>
	<title>emergency</title>
	<link rel="stylesheet" type="text/css" href="emergency.css">
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

		<div class="login">
			<a href="login.php">	
				<img src="login.png">
			</a>
		</div>

		<div class="signup" >
			<a href="signup.php">
				<img src="signup.png">
			</a>
		</div>


	</div>




	<div class="middle" >

		<h1>Patients Details</h1>

		<form class="contact-form" action="emergency_next.php" method="post">

			<label>Pateint Name</label>
			<br>
			<input type="text" name="pateint-name">
			<br>
			<br>

			<label>Current facing issue</label>
			<br>
			<input type="text" name="issue">

			<br>
			<br>

			<label>Phone no:-</label>
			<br>

			<input type="number" name="phone">

			<br>
			<br>

			<select name="hospital">
				<option>SELECT THE HOSPITAL</option>
				<?php


											
						$con=mysqli_connect('localhost','root','','website1');

						$query="SELECT * FROM `userdata` WHERE profession='Hospital'";
						$run=mysqli_query($con,$query);

						$num=mysqli_num_rows($run);
					
							while($data=mysqli_fetch_assoc($run))
							{
								$n=$data['name'];
								echo "<option>$n</option>";
							

							}


				?>
			</select>
			<br>

			<input type="submit" name="SUBMIT" value="SUBMIT">



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

