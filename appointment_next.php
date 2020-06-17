<?php
session_start();
$patients_name=$_POST['patients_name'];
$doctors_name=$_POST['doctors_name'];
$date1=$_POST['date'];
$timming=$_POST['timming'];
$patients_username=$_SESSION['username'];



$con=mysqli_connect('localhost','root','','website1');

$query="SELECT * FROM `appointment` WHERE doctors_name='$doctors_name' and date1='$date1' AND timming='$timming'";

$run=mysqli_query($con,$query);

$count=mysqli_num_rows($run);


if ($count==1)
 {
 	echo "DATE AND TIMMING IS ALREADY BOOKED";
}
else{
	$con1=mysqli_connect('localhost','root','','website1');

	$query1="INSERT INTO `appointment`(`doctors_name`, `patients_name`, `patients_username`, `date1`, `timming`) VALUES ('$doctors_name','$patients_name','$patients_username','$date1','$timming')";
	

	$run1=mysqli_query($con1,$query1);

	if($run1==TRUE)
	{
		echo "APPOINTMENT REQUEST SEND SUCCESSFULLY";
	}

	else{
		echo "unsuccess";
	}
}
