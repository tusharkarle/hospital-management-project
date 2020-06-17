
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet"  type="text/css" href="sigin-style.css">
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


	</div>


<div>
	<div class="login-photo">
		<img src="log.png">
	</div>

	<form class="login" action="" method="post">
		<div class="name">	
			<h1> SIGN UP</h1>
			<tr></tr>
		</div>
		<br>		

		<div class="innerlogin" >

 						 	
 			
 			<select style="width: 100px; text-align: center;
				height: 25px; height: 25px;
				font-size: 15px;" name="profession">


 				<option name="profession">USER</option>
 					<option value="Patient">Patient</option>
 					<option value="Doctor">Docter</option> 					
 					<option value="Hospital">Hospital</option>

 				</select>

 				<br><br>

 				<label>NAME:-</label>
				<input type="text" name="name" placeholder="Enter the Username" style="width: 200px; text-align: center;
				height: 25px;">
					<br><br>

				<label>Username:-</label>
				<input type="text" name="username" placeholder="Enter the Username" style="width: 200px; text-align: center;
				height: 25px;">

					<br><br>
				

				<label>Password:-</label>
				<input type="password" name="password" placeholder="Enter the password" style="width: 200px; text-align: center;
				height: 25px;">
  				<br>

			

				<br>
				<input type="submit" name="submit" value="Register" style="width: 150px; text-align: center;
				height: 50px; background-color: #0099ff;border-color: blue ;font-size: 25px; border-radius: 20%;">



		</div>

		<?php

					#ake data from the signup page
			if(isset($_POST['submit']))
				{
					$name=$_POST['name'];

					$username=$_POST['username'];

					$password=$_POST['password'];

					$profession=$_POST['profession'];
			

					if ($profession=="USER")
					{

						echo "ENTER THE USER PROFESSION";
					}

					else{
						#make the connection
						$con=mysqli_connect('localhost','root','','website1');

						$query="SELECT * FROM `userdata` WHERE username='$username'";


						$run=mysqli_query($con,$query);


						#check whether this username is present or not
						$num=mysqli_num_rows($run);

						
							if($num==1)

							{
								echo "USERNAME ALREADY TAKEN";

							}

							else{

								#create a query
								$query1="INSERT INTO `userdata`(`name`, `profession`, `username`, `password`) VALUES('$name','$profession','$username','$password')";

								#run the query

								$run1=mysqli_query($con,$query1);
								if ($run1==TRUE) 
								{
									header('location:login.php');
								}
								else
								{
									echo "PLZZ REGISTER AGAIN";
								}

								#header('location:login.php');
									
							}
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