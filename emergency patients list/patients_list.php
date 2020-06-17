
<html>
<head>
	<title>emergency patients list</title>
</head>



<body>


<h1>PATIENTS LIST</h1>

<table>
	
<tr>

	<th>Patient Name</th>
	<th>Current facing issue</th>	
	<th>Contact no</th>
</tr>

<?php
session_start();

	if (isset($_POST["hospital_name"])) 

	{
		$hospital=$_SESSION['name'];

		$con=mysqli_connect('localhost','root','','website1');

		$query="SELECT * FROM `emergency` WHERE hospital='$hospital' ";

		$run=mysqli_query($con,$query);


		while($data=mysqli_fetch_array($run))
		{
			?>

		<tr>
			<td><?php echo $data['patient_name']; ?> </td>
			<td><?php echo $data['current_facing_issue']; ?> </td>
			<td><?php echo $data['phone']; ?> </td>

		</tr>

		<?php
		}

	}
	?>




</table>

















</body>


</html>