<?php
$db=mysqli_connect("car.cqn8jr4zs6zp.us-east-1.rds.amazonaws.com","admin","12345678","car_showroom");
if(!$db)
{
	die("could not connect".mysqli_error());
}
?>