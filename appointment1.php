
<html>
<head>
	<title>appointment</title>
	<link rel="stylesheet" type="text/css" href="appointment1.css">
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
		
		<a href="appointment.php" class="app1">
			<img src="book_appointment.png" width="450px"  height="300px">
		</a>

		<a href="appointment_status.php" class="app2">
			<img src="appointment status.png" width="500px"  height="400px">
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