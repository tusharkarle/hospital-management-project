<?php


$con=mysqli_connect('localhost','root','','website1');

$query="SELECT * FROM `userdata` WHERE profession='Hospital'";
$run=mysqli_query($con,$query);

$num=mysqli_num_rows($run);

echo $num;


#$data=mysqli_fetch_array($run);

#$data=mysqli_fetch_array($run);
#$i=1
#while($i<=$data)

#	print_r($data);
#}
	#echo $data['name'];
	/*$n="name_".$i;
	echo $n."<br>";
	$n=$data['name'];
	echo $n."<br>";*/
/*
for ($i=1;$i<=$; $i++)
{ 
	


}
*/
echo "<select>";
while($data=mysqli_fetch_assoc($run))
		{
				$n=$data['name'];
				echo "<option>$n</option>";		

		}
echo "</select>";


?>