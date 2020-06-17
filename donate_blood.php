
<html>
<head>
	<title>emergency</title>
	<link rel="stylesheet" type="text/css" href="donate_blood.css">
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




	<div class="middle" style="text-align: center;">

		<div class="text1">
			<b><u>LIST OF REQUESTS FOR BLOOD</u></b>
		</div>


		<div class="main">
				<table border='1' cellpadding="10" cellspacing="0" style="text-align: center;" class="table">
					<tr width="300px" height="50px" style="background-color: #99ccff ;color: black;">
					<th>NAME</th>
					<th>REQUIRED BLOOD GROUP</th>
					<th width="450px">ADDRESS</th>
					<th width="300px;">PHONE</th>
					<th>REQUESTED DATE</th>
				</tr>
					<?php

					$con=mysqli_connect('localhost','root','','website1');

					$query="SELECT * FROM `blood-donation`";

					$run=mysqli_query($con,$query);

					while ($data=mysqli_fetch_assoc($run)) 
					{


						$d=strtotime("- 5 days");

						$date2=date("d/M/Y", $d);

				
						if ($data['name']>=$date2)
						 {
							
						



						?>
								<div>	
									<tr height="50px">
									<td><?php echo $data['name']; ?></td>
									<td><?php echo $data['blood_group']; ?></td>
									<td style="overflow-y: scroll;"><?php echo $data['address']; ?></td>
									<td><?php echo $data['phone']; ?></td>
									<td><?php echo $data['date']; ?></td>
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

