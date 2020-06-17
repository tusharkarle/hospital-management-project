
<html>
<head>
	<title>mainpage</title>
	<link rel="stylesheet" type="text/css" href="patients_list.css">
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

		<h1><u> EMERGENCY PATIENTS LIST</u></h1>

		<div class="table">
			<table border="1" cellspacing="0" cellpadding="50px">
					
				<tr style="background-color:#66cccc;border-radius: 20px;">

					<th  width="300px" height="50px">Patient Name</th>
					<th width="300px">Current facing issue</th>	
					<th width="300px">Contact no</th>
					<th width="300px">Date</th>
					<th width="300px">Time</th>
				</tr>

				<?php

					if (isset($_SESSION['name'])) 

					{
						$hospital=$_SESSION['name'];
						$date=date('d-m-y');


						$con=mysqli_connect('localhost','root','','website1');

						$query="SELECT * FROM `emergency` WHERE hospital='$hospital' and date='$date' ";

						$run=mysqli_query($con,$query);


						while($data=mysqli_fetch_array($run))
						{
							?>
					<div class="body">
						<tr>
							<td height="30px"><?php echo $data['patient_name']; ?> </td>
							<td><?php echo $data['current_facing_issue']; ?> </td>
							<td><?php echo $data['phone']; ?> </td>
							<td><?php echo $data['date']; ?> </td>
							<td><?php echo $data['time']; ?> </td>

						</tr>
					</div>
						<?php
						}

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