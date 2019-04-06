<?php 
	session_start();

	$connessione=mysqli_connect('localhost','root','','Cosecosi');


	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$codfiscale=$_POST['codfiscale'];
	$pec=$_POST['pec'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query = "SELECT * FROM commerciale WHERE codfiscale='$codfiscale' AND username='$username' AND pec='$pec'";
	$result = mysqli_query($connessione, $query);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "Errore, Commerciale già registrato";
	} else {
		$registrazione="INSERT INTO commerciale (nome,cognome,codfiscale,pec,username,password) VALUES ('$nome','$cognome','$codfiscale','$pec','$username','$password')";
		mysqli_query($connessione, $registrazione);
		header("Location: index.html");
	}
 ?>