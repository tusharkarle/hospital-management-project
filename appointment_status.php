
<html>
<head>
	<title>mainpage</title>
	<link rel="stylesheet" type="text/css" href="appointment_status.css">
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

		<div class="text1">

			<b><u> Appointment status</u></b>


			</div>
		<br>
		<div  class="table" >

			<table border="1" cellspacing="0" cellpadding="50px">
					<tr style="background-color:#66cccc;border-radius: 20px;">
						<th width="300px" height="50px">Hospital name</th>
						<th width="300px" >Date</th>
						<th width="300px">Timming</th>
						<th width="300px">Status</th>
						</tr>
				
		
					<?php

					$username=$_SESSION['username'];


					$con=mysqli_connect('localhost','root','','website1');

					$query="SELECT * FROM `appointment` WHERE patients_username='$username'";

					$run=mysqli_query($con,$query);

					while ($data=mysqli_fetch_assoc($run))
					 {
					
					?>
				
						<tr>
							<td height="50px"><?php echo $data['doctors_name']; ?></td>
							<td><?php echo $data['date1']; ?></td>
							<td><?php echo $data['timming']; ?></td>
							<td><?php echo $data['status']; ?></td>



						</tr>
			
					<?php

				}

				?>
	
	
				</table>		
			

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