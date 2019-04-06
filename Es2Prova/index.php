<html>
<head>
	<title>Visualizzazione Elenco Eventi</title>
	<link rel="stylesheet" type="text/css" href="eventi.css">
	<?php  
		//connessione
		$conn=mysqli_connect('localhost', 'root', '', 'Es2Prova')
		or die ("Errore di Connessione" . mysql_error());
		// Interrogazione database
		$sql="SELECT * FROM Eventi WHERE
		Provincia=$_POST['Provincia'] AND Categoria=$_POST['Categoria']";
		$result = mysql_query($sql);
	?>
</head>
<body>
	<p>Elenco Eventi trovati</p>

	<?php  
		if (mysql_num_rows($result) != 0) {
			echo "<TABLE>";
			echo "<TR>";
			echo "<TD>IDEvento</TD> <TD>Data Ora</TD> <TD>Luogo</TD> <TD>Categoria</TD> <TD>Descrizione</TD>"
			echo "<TR>";
			while ($row = mysql_fetch_array($result)) {
				echo "<TR>";
				echo "<TD".$row["IDEvento"]."</TD>";
				echo "<TD".$row["DataOra"]."</TD>";
				echo "<TD".$row["Luogo"]."</TD>";
				echo "<TD".$row["Categoria"]."</TD>";
				echo "<TD".$row["Descrizione"]."</TD>";
				echo "</TR>";
			}
			echo "</TABLE>";
		}
	?>
</body>
</html>