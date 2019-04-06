<?php 
	session_start();

	$connessione=mysqli_connect('localhost','root','','Cosecosi');


	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$codfiscale=$_POST['codfiscale'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query = "SELECT * FROM privato WHERE codfiscale='$codfiscale' AND username='$username'";
	$result = mysqli_query($connessione, $query);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "Errore, Utente già registrato";
	} else {
		$registrazione="INSERT INTO privato (nome,cognome,codfiscale,username,password) VALUES ('$nome','$cognome','$codfiscale','$username','$password')";
		mysqli_query($connessione, $registrazione);
		header("Location: index.html");
	}
 ?>