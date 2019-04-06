<html>
<head>
	<title>Reg.php</title>
</head>
<body>
<?php  
	echo "Registrazione effettuata <br>" ;
	$txt=$_POST['password'];

	$txt_cifrato=md5($txt);
?>
<p>Codice MD5 della password è: <?php echo $txt_cifrato; ?></p>
</body>
</html>