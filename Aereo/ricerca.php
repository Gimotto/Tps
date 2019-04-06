<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'compagniaaerea');

$partenza = $_POST['partenza'];
$arrivo = $_POST['arrivo'];


$s = "SELECT * FROM volo WHERE partenza='$partenza' && arrivo='$arrivo'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);?>
<html>
  		<head>
    		<title>Ricerca il tuo volo</title>
    		<link rel="stylesheet" type="text/css" href="index.css">
  		</head>
  		<body>
    		<div id="login-box" align="center">
        	<form class="box" action="ricerca.php" method="POST">
            <div class="TopText">
              <h1>Ricerca il tuo volo</h1>
            </div>
          	<input type="text" name="partenza" placeholder="Partenza"/>
          	<input type="text" name="arrivo" placeholder="Arrivo"/>
          	<input type="submit" value="Trova il tuo volo"/>
        	</form>
    		</div>
  		</body>
<?php if ($num>0) {
	?>	
  		<table align="center" class="fixed_headers">
        <thead>
  			<tr>
  				<td><h4>Partenza</h4></td>
  				<td><h4>Arrivo</h4></td>
  				<td><h4>Orario Partenza</h4></td>
  				<td><h4>Orario Arrivo</h4></td>
  				<td><h4>Durata Viaggio</h4></td>
  			</tr>
      </thead>
	<?php
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		?><tbody><tr><td><?php echo ($row['Partenza']);?></td><?php  
		?><td><?php echo ($row['Arrivo']);?></td><?php
		?><td><?php echo ($row['Ora_p']);?></td><?php
		?><td><?php echo ($row['Ora_a']);?></td><?php
		?><td><?php echo ($row['Durata']);?></td></tr></tbody><?php
	}
}else{
	?>
	</table>
	<?php
	echo("Il volo ricercato non esiste");  
}
?>
	</html>
	
