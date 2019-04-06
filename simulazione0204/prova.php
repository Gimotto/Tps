<?php 
	$con=mysqli_connect("localhost","root","","easytrain");
	if(!$con){die ("Connessione non avvenuta".mysqli_error());}

	$query="SELECT id, username FROM viaggiatori";
	$result=mysqli_query($con,$query);
	$array=mysqli_fetch_all($result);
	echo "<pre>";
	print_r($array);
	echo "</pre>";
 ?>