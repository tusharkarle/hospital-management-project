
<html>
<head>
	<title>mainpage</title>
	<link rel="stylesheet" type="text/css" href="appointment_list.css">

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
		<div class="text1">
			<b><u>APPOINTMENT REQUEST</u></b>
		</div>

		<div class="table" >
			<table border="1" cellspacing="0" cellpadding="10px" style="text-align: center;">
				
				<tr style="background-color:#66cccc;border-radius: 20px;">
					<th width="300px" height="50px">PATIENTS NAME</th>
					<th width="300px">DOCTERS NAME</th>
					<th width="300px">date</th>
					<th width="300px">TIMMING</th>
					<th width="300px"> CURRENT STATUS</th>
					<th width="300px">UPDATE</th>
				


				</tr>


				<?php
			
				$name=$_SESSION['name'];
				$con=mysqli_connect('localhost','root','','website1');

				$query="SELECT * FROM `appointment` WHERE doctors_name='$name'";

				$run=mysqli_query($con,$query);

				while($data=mysqli_fetch_assoc($run))
				{
					?>
					<tr>
						<td height="40px"><?php echo  $data['patients_name']; ?></td>
						<td><?php echo $data['doctors_name']; ?></td>
						<td><?php echo $data['date1']; ?></td>
						<td><?php echo $data['timming']; ?></td>
						<td><?php echo $data['status']; ?></td>
						<td class="confirm">
							    <form action='confirm.php' method="post">
							        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
							        <input type="submit" name="submit" value="CONFIRM" style="width: 100%;height: 50px;">
							    </form>
							</td>
						
						

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