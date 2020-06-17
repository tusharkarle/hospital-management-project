
<html>
<head>
	<title>appointment</title>
	<link rel="stylesheet" type="text/css" href="appointment.css">
	  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
       $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker').datepicker({
        minDate: new Date(currentYear, currentMonth, currentDate),
        dateFormat: 'dd-mm-yy'
    });
});
    </script>
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
		<h1>SELECT THE DOCTOR</h1>


		<form action="" action="post" method="post"> 

				<b>ENTER PATIENTS NAME:-</b>

				<input type="text" name="patients_name" value="<?php echo $_SESSION['name']; ?>" style="width: 120px;height: 35px; border-radius: 20px;text-align: center;">

				<br>
				<br>
				<br>

				<b>SELECT THE HOSPITAL:-</b>
		

				
				<select name="doctors_name" style="width: 200px;height: 35px; border-radius: 20px;text-align: center;">
					<option>Select the Hospital</option>

					<?php
					$con=mysqli_connect('localhost','root','','website1');


					$query="SELECT * FROM `userdata` WHERE profession='Hospital'";


					$run=mysqli_query($con,$query);

					while ($data=mysqli_fetch_array($run))
					 {
						?>
						<option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
						
					<?php	
						}


					?>

				</select>
					<br>
					<br>
					<br>

					<input type="hidden" name="patients_username" value="<?php echo $_SESSION['username']; ?>" style="width: 100px;height: 35px; border-radius: 20px;">
					
					<b>SELECT THE DATE:-</b>
				
					<input id="datepicker" type="text" name='date' placeholder="DATE" style="width: 100px;height: 35px; border-radius: 20px;text-align: center;">

					<br>
					<br>
					<br>
					<b>SELECT THE TIMMING :-</b>
				

					<SELECT name="timming" style="width: 200px;height: 35px; border-radius: 20px; text-align: center;">
						<option>SELECT THE TIMMING</option>

						<option value="11am-12pm">11am-12pm</option>

						<option value="12pm-1pm">12pm-1pm</option>


						<option value="1pm-2pm">1pm-2pm</option>

						<option value="2pm-3pm">2pm-3pm</option>

						<option value="3pm-4pm">3pm-4pm</option>

						<option value="4pm-5pm">4pm-5pm</option>

						<option value="5pm-6pm">5pm-6pm</option>

						<option value="6pm-7pm">6pm-7pm</option>

						<option value="7pm-8pm">7pm-8pm</option>

					</SELECT>
		

					<br>
					<br>
					<br>
					<br>
				<input type="submit" name="submit" value="CHECK THE AVAIBAILITY" style="width: 250px; height:50px; font-size: 16px; border-radius: 20px;">
				<br>
				<br>

					<?php

					if(isset($_POST["submit"]))
					{
								
								$patients_name=$_POST['patients_name'];
								$doctors_name=$_POST['doctors_name'];
								$date1=$_POST['date'];
								$timming=$_POST['timming'];
								$patients_username=$_SESSION['username'];

								if (!empty($patients_name) and $doctors_name!='Select the Hospital' and !empty($date1) and $timming!=="SELECT THE TIMMING")
								{
									
								



											$con=mysqli_connect('localhost','root','','website1');

											$query="SELECT * FROM `appointment` WHERE doctors_name='$doctors_name' and date1='$date1' AND timming='$timming'";

											$run=mysqli_query($con,$query);

											$count=mysqli_num_rows($run);
											

												if ($count==1)
													 {
													 	echo "!!DATE AND TIMMING IS ALREADY BOOKED"."<br>";
													 	echo "Please select other date";
													}
												else{
														$con1=mysqli_connect('localhost','root','','website1');

														$query1="INSERT INTO `appointment`(`doctors_name`, `patients_name`, `patients_username`, `date1`, `timming`) VALUES ('$doctors_name','$patients_name','$patients_username','$date1','$timming')";
														

														$run1=mysqli_query($con1,$query1);

														if($run1==TRUE)
														{
															echo "!!APPOINTMENT REQUEST SEND SUCCESSFULLY";
														}

														else{
															echo "!!unsuccess";
														}
											}
									
								}

								else{
									echo "Enter the data correctly";
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


</html>