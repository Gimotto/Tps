<?php  
session_start();

$con=mysqli_connect('localhost', 'root', '', 'tps');

$email=$_POST['email'];
$password=$_POST['password'];

$control = "SELECT * FROM user WHERE email='$email' && password='$password'";
$result = mysqli_query($con, $control);
$num = mysqli_num_rows($result);

if($num == 1){
	?>
	<html>
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="login-page">
      		<div class="form">
        		<form class="login-form">
        			<h2>Home Page</h2>
        		</form>
      		</div>
    	</div>
	</body>
	</html>
	<?php
}else{
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
        			<h2>Email o password sbagliate</h2>
        		</form>
      		</div>
    	</div>
	</body>
	</html>
	<?php
}
?>