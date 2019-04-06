<?php  
session_start();

$con=mysqli_connect('localhost', 'root', '', 'tps');

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$password=$_POST['password'];

$s = "SELECT * FROM user WHERE nome='$nome' && cognome='$cognome'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	?>
	<html>
	<head>
		<title>Errore</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="login-page">
      		<div class="form">
        		<form class="login-form">
        			<h2>Errore di registrazione</h2>
        		</form>
      		</div>
    	</div>
	</body>
	</html>
	<?php
}else{
	$email=$nome.$cognome."@dallachiesa.5c.it";
	$reg="INSERT INTO user(id, nome, cognome, email, password) VALUES ('', '$nome', '$cognome', '$email', '$password')";
	mysqli_query($con, $reg);
	header('location:index.php');
}
?>