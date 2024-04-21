<?php
 require './../../app/Database_Connect.php';
 
$id=$_GET['id'];
$sql = "SELECT Montant_omra_total , Num_p 
FROM  residence 
WHERE  	Num_p = '$id'";

$Montant = mysqli_query($conn, $sql);
$Montant = mysqli_fetch_assoc($Montant);
