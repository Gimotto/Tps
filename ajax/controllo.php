<?php  
	session_start();

	$connessione=mysqli_connect('localhost','root','','username');
	if (isset($_POST['user_name'])) {
		$username=mysqli_real_escape_string($connessione, $_POST['user_name']);
		$query="SELECT * FROM utenti WHERE username='".$username."'";
		$result=mysqli_query($connessione,$query);
		echo mysqli_num_rows($result);
	}
?>