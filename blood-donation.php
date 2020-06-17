
<html>
<head>
	<title>blood-donation</title>
	<link rel="stylesheet" type="text/css" href="blood-donation.css">
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
			header('location:login.php');

		}

		?>


	</div>




	<div class="middle">

		
			<div class="i1">
				<a href="donate_blood.php" >
				<img class="image_1" width="450px" height="400px" src="DONATE BLOOD.png">
				</a>	
			</div>

			<div class="i2">
				<a href="request_blood.php">
				<img class="image_2" width="450px" height="380px" src="REQUEST BLOOD.png">
				</a>
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