<?php
 require './../../app/Database_Connect.php';
 
$id=$_GET['id'];
$sql = "SELECT * FROM  residence WHERE Num_p = '$id'";
$residence = mysqli_query($conn, $sql);
$residence = mysqli_fetch_assoc($residence);

$sql = "SELECT Prénom_p FROM  mouhtamir WHERE Num_p = '$id'";
$Prénom_p = mysqli_query($conn, $sql);
$Prénom_p = mysqli_fetch_assoc($Prénom_p);

$val=$residence['Num_vol'];

$sql = "SELECT Date_vol_r  FROM  voyage  WHERE Num_vol = '$val'";
$Date_vol = mysqli_query($conn, $sql);
$Date_vol = mysqli_fetch_assoc($Date_vol);

$date_r=$Date_vol['Date_vol_r'];

$sgl="UPDATE `residence` SET `Paiement` = 1 WHERE Num_p = '$id' ";
mysqli_query($conn, $sgl);

$todayDate = date('Y-m-d');

$sql = "INSERT INTO visa (`Date_visa`, `Date_Val_visa`, `Num_p` ,`Num_vol` ) 
        VALUES ('$todayDate', '$date_r', '$id' , '$val')";
        mysqli_query($conn, $sql);

