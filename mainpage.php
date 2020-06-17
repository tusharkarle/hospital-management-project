
<html>
<head>
	 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>mainpage</title>
	<link rel="stylesheet" type="text/css" href="mainpage-style.css">
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

		<?php
		session_start();
		if (!empty($_SESSION['name']))
		 {
		 	?>

		 	<b class="text">Hello ,<u> <?php echo $_SESSION['name']; ?> </u></b>


		 	<a class="logout" href="logout.php" width="50px" >
		 		
		 		<img src="logout.png">
		 	</a>

		 <?php
		}

		else
		{
			?>

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

		<?php

		}

		?>

	</div>

	<div class="middle">

		<a href="appointment1.php" class="appointment">
			<img src="appointment.png">

		</a>


		<a href="blood-donation.php" class="blooddonation">
			<img width="500px" height="350px" src="blood-donation.png">

		</a>


		<a href="emergency.php" class="emergency">
			<img width="450px" height="350px" src="emergency.png">

		</a>


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