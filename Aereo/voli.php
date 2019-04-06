<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'compagniaaerea');

$s = "SELECT * FROM volo WHERE partenza='$partenza' && arrivo='$arrivo'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);

if ($num==1) {
  echo ($row['Partenza']." ");
  echo ($row['Arrivo']." ");
  echo ($row['Durata']." ");
  echo ("Mi dispiace la password è segreta!!!");
}
?>