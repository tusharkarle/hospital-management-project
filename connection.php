<?php

session_start();

$con=mysqli_connect('localhost','root','','website1');


$query="SELECT * FROM `userdata` WHERE profession='Hospital'";


$run=mysqli_query($con,$query);


if ($run==TRUE) 
{
	/*
	while($data=mysqli_fetch_assoc($run))
	{

		#echo $data['name'];
	}
*/
	
}


else
{
	echo "CANNOT CONNECT TO DATABASE";
}

?>