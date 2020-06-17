
<html>
<head>
	<title>emergency</title>
	<link rel="stylesheet" type="text/css" href="emergency.css">
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
		
		header('location:login.php');

		}

		?>



	</div>


	<div class="middle" >

		<h1><u>Patients Details</u></h1>

		<form class="contact-form" action="" method="post">

			<label>PATIENTS NAME:-</label>
		
			<input type="text" name="pateint-name" style="width: 250px;height: 35px; border-radius: 20px;text-align: center;">
			<br>
			<br>

			<label>CURRENT FACING ISSUE:-</label>
		
			<input type="text" name="issue" style="width: 250px;height: 50px; border-radius: 20px;text-align: center;overflow-x: scroll;">

			<br>
			<br>

			<label>PHONE NO :-</label>
			

			<input type="number" name="phone" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;">

			<br>
			<br>
			<b>ENTER THE ADDRESS :-</b>
			<input type="text" name="address" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;">
			<br>
			<br>

			<b>SELECT THE HOSPITAL:-</b>
			<select name="hospital" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;">
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
			<br>
			<br>

			<input type="submit" name="SUBMIT" value="SUBMIT" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;" >

			<br>
			<br>


			<?php

				if(isset($_POST['SUBMIT']))
					{
						$patient_name=$_POST['pateint-name'];
						$current_facing_issue=$_POST['issue'];
						$phone=$_POST['phone'];

						$hospital=$_POST['hospital'];

						$date=date('d-M-Y');
						#echo $date.'<br>';
						$time=date("h:i:sa");
						#echo $time;
						#echo($hospital);
						$address=$_POST['address'];


						if (!empty($patient_name) and !empty($current_facing_issue) and !empty($phone) and $hospital!='SELECT THE HOSPITAL' and !empty($date) and !empty($time) and !empty($address) )
						 {
							
							$con=mysqli_connect('localhost','root','','website1');

							$query="INSERT INTO `emergency`(`patient_name`, `current_facing_issue`, `phone`, `address`, `date`, `time`, `hospital`) VALUES ('$patient_name','$current_facing_issue','$phone','$address','$date','$time','$hospital')";

							#run the query
							$run=mysqli_query($con,$query);

							if ($run==TRUE)
							 {
								echo "HOSPITAL WILL CALL YOU IN MOMENT";
							}

							else{

								echo "unsuccesful";
						
							}
						}
						else{
							echo "ENTER ALL DATA";
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

