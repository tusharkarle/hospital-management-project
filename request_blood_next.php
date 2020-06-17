<?php

$name=$_POST['name'];

$blood_group=$_POST['blood_group'];

$address=$_POST['address'];

$phone=$_POST['phone'];

$email=$_POST['email'];

$date=date('d-m-y');

$time=date('h-i-s');




if (!(empty($name)) and !(empty($address)) and !(empty($phone)) and !(empty($email)) )

{

	if (!empty($blood_group) and $blood_group!='blood group')

	{
		$con=mysqli_connect('localhost','root','','website1');

		$query="INSERT INTO `blood-donation`(`name`, `blood_group`, `address`, `phone`, `email`, `date`, `time`) VALUES ('$name','$blood_group','$address','$phone','$email','$date','$time')";

		$run=mysqli_query($con,$query);


		echo "WE HAVE RAISED YOUR BLOOD REQUEST";




	}

	else
	{
		echo "unsuccesful";
	}


}

else
{

	echo "ENTER ALL DETAILS";
}





?>
