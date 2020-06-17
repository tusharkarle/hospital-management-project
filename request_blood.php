
<html>
<head>
	<title>REQUEST BLOOD</title>
	<link rel="stylesheet" type="text/css" href="request_blood.css">
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


	<div class="middle" >
		<h1><u>ENTER THE DETAILS</u></h1>
		<form action="" method="post" class="form">
	

			<b>ENTER THE NAME:-</b>
		
			<?php
			if (!empty($_SESSION['name'])) 
			{
				?>
				<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;" required="">
			<?php
			}
			else
			{
				?>
				<input type="text" name="name" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;">

			<?php
			}
			?>

			<br>
			<br>
			<b>SELECT THE REQUIRED BLOOD GROUP:-</b>
			
			<select name="blood_group" style="width: 120px;height: 35px; border-radius: 20px;text-align: center;">
				<option>blood group</option>

				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>AB+</option>
				<option>AB-</option>
				<option>O+</option>
				<option>O-</option>


			</select>
			<br>
			<br>

			<b>ENTER THE ADDRESS:-</b>
		
			<input type="text" name="address" style="width: 300px;height: 35px; border-radius: 20px;text-align: center;">
			<br>
			<br>

			<b>PHONE NO:-</b>
			
			<input type="number" name="phone" style="width: 250px;height: 35px; border-radius: 20px;text-align: center;">
			<br>
			<br>
			<b>EMAIL:-</b>
		
			<input type="email" name="email" required=".com" style="width: 250px;height: 35px; border-radius: 20px;text-align: center;">
			<br>
			<br>
			<br>
			<input type="submit" name="submit" value="SUBMIT" style="width: 250px;height: 50px; border-radius: 30px;text-align: center;">
			<br>
			<br>



			<?php
				if(isset($_POST['submit']))
				{
						$name=$_POST['name'];

						$blood_group=$_POST['blood_group'];

						$address=$_POST['address'];

						$phone=$_POST['phone'];

						$email=$_POST['email'];

						$date=date('d/M/Y');

						$time=date('h:i:sa');




						if (!(empty($name)) and !(empty($address)) and !(empty($phone)) and !(empty($email)))

						{

							if (!empty($blood_group) and $blood_group!='blood group')

							{
								$con=mysqli_connect('localhost','root','','website1');

								$query="INSERT INTO `blood-donation`(`name`, `blood_group`, `address`, `phone`, `email`, `date`, `time`) VALUES ('$name','$blood_group','$address','$phone','$email','$date','$time')";

								$run=mysqli_query($con,$query);

								if($run==TRUE)
								{

								echo "<mark>WE HAVE RAISED YOUR BLOOD REQUEST".'</mark>';
							}

							



							}

							else
							{
								echo "!!ENTER ALL DETAILS";
							}


						}

						else
						{

							echo "!!ENTER ALL DETAILS";
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

