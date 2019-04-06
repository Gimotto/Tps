<?php 
	$db = new PDO ("mysql:host=localhost;dbname=easytrain", "root", "");
	if (!$db){die ("Impossibile collegarsi al database");}

	$result = $db->query("SELECT username FROM viaggiatori");
	$p = $result->fetchAll(PDO::FETCH_ASSOC);
	echo "<pre>";
	print_r($p);
	echo "</pre>";
 ?>