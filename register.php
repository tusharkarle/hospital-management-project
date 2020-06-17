<?php

#ake data from the signup page

$name=$_POST['name'];

$username=$_POST['username'];

$password=$_POST['password'];

$profession=$_POST['profession'];
echo $name,$username,$profession;

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

?>