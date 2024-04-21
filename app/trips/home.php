<?php 
require './../../app/Database_Connect.php';

$todayDate = date('Y-m-d');

$sql = "SELECT Date_vol_d , Date_vol_r , Montant_omra
FROM voyage
WHERE  	Date_vol_d > '$todayDate'";

$voyage = mysqli_query($conn, $sql);
if (mysqli_num_rows($voyage) != 0) {
    $voyage = mysqli_fetch_assoc($voyage);

$dateVolD = $voyage['Date_vol_d'];
$dateVolR = $voyage['Date_vol_r'];

$timestampVolD = strtotime($dateVolD);
$timestampVolR = strtotime($dateVolR);

$diffInSeconds = $timestampVolR - $timestampVolD;
$diffInDays = floor($diffInSeconds / (60 * 60 * 24));
}

