
<html>
<head>
	<title>mainpage</title>
	<link rel="stylesheet" type="text/css" href="contactus-style.css">
</head>

<body>

<div class="header">



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
		<div class="info">
			<h1><em>Website made by </em>:-</h1>
		
			<h2><mark>TUSHAR KARLE</mark><h2>
			<h2><mark>JSCOE HADAPSAR PUNE</mark><h2>	
				<br>
			<h2><em>Email address</em>:-
				<mark>tusharkarle001@gmail.com</mark>
				<h2>
				<br>
			<h2><em>Phone no:-</em>
			 <mark>7040067813</mark>
				<h2>
		</div>


		<div class="photo">
			<img src="tushar.jpg">
				
		</div>


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