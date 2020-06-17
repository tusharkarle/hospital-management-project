<?php

$id=$_POST['id'];

echo $id;



$con=mysqli_connect('localhost','root','','website1');



$query="UPDATE `appointment` SET status='Confirmed' WHERE id='$id'";

$run=mysqli_query($con,$query);


if ($run==TRUE)

 {
		echo "success";
		header('location:appointment_list.php');


}
#header('location:appointment_list.php')
else{


	echo "UNSUCCESFULL";
}








?>

