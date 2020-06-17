<?php


$patient_name=$_POST['pateint-name'];
$current_facing_issue=$_POST['issue'];
$phone=$_POST['phone'];

$hospital=$_POST['hospital'];

$date=date('d-m-y');
#echo $date.'<br>';
$time=date('h-i-s');
#echo $time;
#echo($hospital);



$con=mysqli_connect('localhost','root','','website1');


$query="INSERT INTO `emergency` (`patient_name`, `current_facing_issue`, `phone`,`date`,`time`, `hospital`) VALUES ('$patient_name','$current_facing_issue','$phone','$date','$time','$hospital')";

#run the query
$run=mysqli_query($con,$query);

if ($run==1) {
	echo "HOSPITAL WILL CALL YOU IN MOMENT";
}

else{

	echo "unsuccesfull";
}


























?>