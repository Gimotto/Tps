<?php 
	session_start();

	$connessione=mysqli_connect('localhost','root','','Cosecosi');


	$nome=$_POST['nome'];
	$cognome=$_POST['cognome'];
	$codfiscale=$_POST['codfiscale'];
	$piva=$_POST['piva'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query = "SELECT * FROM azienda WHERE codfiscale='$codfiscale' AND username='$username' AND piva='$piva'";
	$result = mysqli_query($connessione, $query);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "Errore, Azienda già registrata";
	} else {
		$registrazione="INSERT INTO azienda (nome,cognome,codfiscale,piva,username,password) VALUES ('$nome','$cognome','$codfiscale','$piva','$username','$password')";
		mysqli_query($connessione, $registrazione);
		header("Location: index.html");
	}
 ?>