<?php
session_start();

$username1=$_POST['username'];
$password1=$_POST['password'];
$profession1=$_POST['profession'];



#make the connection
$con=mysqli_connect('localhost','root','','website1');



#make a query

$query="SELECT * FROM `userdata` WHERE username='$username1' and password='$password1' and profession='$profession1'";

#run the query

$run=mysqli_query($con,$query);

#find if any data matches
$num= mysqli_num_rows($run);

if($num==1)
{
	$data=mysqli_fetch_assoc($run);

	$_SESSION['name']=$data['name'];
	$_SESSION['profession']=$profession1;
	$_SESSION['username']=$username1;

	if ($profession1=='Hospital') 
	{
		header('location:hospital_login_next.php');

	}
	else
	{
	header('location:mainpage.php');
	}
}
else
{
echo "login unsuccessful";

}






?>